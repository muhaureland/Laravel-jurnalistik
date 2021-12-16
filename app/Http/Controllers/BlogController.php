<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;


class BlogController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        // if (request('author')) {
        //     $author = User::firstWhere('username', request('author'));
        //     $title = ' by ' . $author->name;
        // }
        
        return view('blogs',[
            "title"         => "Berita Terbaru" . $title,
            "categories"    => Category::all(),
            "posts"         => Post::latest()->filter(request(['search', 'category']))->paginate(7),
            "popular"       => Post::orderBy('views','desc')->get()->take(5),
            "recent"        => Post::orderBy('id','desc')->get()->take(3),
        ]);
        
    }

    public function show(Post $post)
    {
        return view('blog', [
            "categories" => Category::all(),
            "post" => $post,
            $post->increment('views'),
            "posts"     => Post::latest()->get(),
            "popular"       => Post::orderBy('views','desc')->get()->take(5),
            "recent"        => Post::orderBy('id','desc')->get()->take(3),
        ]);
    }

    public function kategori()
    {
        return view('categories', [
            "categories" => Category::latest()->paginate(6),
            "posts"     => Post::latest()->get(),
            "popular"       => Post::orderBy('views','desc')->get()->take(5),
            "recent"        => Post::orderBy('id','desc')->get()->take(3),
        ]);
    }
}
