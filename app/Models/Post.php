<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['iniCategory', 'iniAuthor'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search)
        => $query->where('judul', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
        );
        // $query->when($filters['category'] ?? false, fn($query, $category)
        //     => $query->whereHas('category', fn($query)
        //     => $query->where('slug', $category))
        // );
        // $query->when($filters['iniAuthor'] ?? false, fn($query, $author)
        //     => $query->whereHas('iniAuthor', fn($query) 
        //     => $query->where('username', $author))
        // );
    }

    public function iniAuthor()
    {
        //belongsTo satu postingan pasti ditulis 1 user
        return $this->belongsTo(User::class, 'user_id');
    }

    public function iniCategory()
    {
        //belongsTo satu category pasti dimiliki 1 postingan
        return $this->belongsTo(Category::class, 'category_id');
    }
}
