<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $with = ['iniposts'];

    public function iniposts()
    {
        return $this->hasMany(Post::class);
    }
}
