<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    // protected $with = ['postKeCategory', 'postKeUser'];

    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['search'] ?? false, fn($query, $search)
    //     => $query->where('judul', 'like', '%' . $search . '%')
    //             ->orWhere('body', 'like', '%' . $search . '%')
    //     );
    //     // $query->when($filters['category'] ?? false, fn($query, $category)
    //     //     => $query->whereHas('category', fn($query)
    //     //     => $query->where('slug', $category))
    //     // );
    //     // $query->when($filters['keUser'] ?? false, fn($query, $author)
    //     //     => $query->whereHas('keUser', fn($query) 
    //     //     => $query->where('username', $author))
    //     // );
    // }

    // public function postKeUser()
    // {
    //     //belongsTo satu postingan pasti ditulis 1 user
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    // public function postKeCategory()
    // {
    //     //belongsTo satu category pasti dimiliki 1 postingan
    //     return $this->belongsTo(Category::class, 'category_id');
    // }
    protected  $guarded = ['id'];
    protected $with = ['category', 'postKeUser'];
    //setiap pemanggilan model post maka category dan authornya langsung terpanggil

    public function scopeFilter($query, array $filters)
    {
        //query pencarian postingan dari judul dan atau body
        $query->when($filters['search'] ?? false, fn($query, $search)
            => $query->where('judul', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%')
        );

        //query mengatur postingan sesuai yg dipilih
        $query->when($filters['category'] ?? false, fn($query, $category)
            => $query->whereHas('category', fn($query)
            => $query->where('slug', $category))
        );
        
        // $query->when($filters['author'] ?? false, fn($query, $author)
        //     => $query->whereHas('author', fn($query) 
        //     => $query->where('username', $author))
        // );
    }

    public function postKeUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
