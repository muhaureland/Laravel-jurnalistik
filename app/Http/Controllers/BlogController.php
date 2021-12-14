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
        // if (request('category')) {
        //     $category = Category::firstWhere('slug', request('category'));
        //     $title = ' in ' . $category->name;
        // }
        // if (request('author')) {
        //     $iniAuthor = User::firstWhere('username', request('author'));
        //     $title = ' by ' . $iniAuthor->name;
        // }
        return view('blogs', [

            "title" => "Berita Terbaru" . $title,
            "categories" => Category::all(),
            // "posts"     => Post::latest()->filter(request(['search', 'iniCategory']))->get()
            "posts"     => Post::latest()->filter(request(['search']))->paginate(5)->withQueryString(),
            "popular"   => Post::orderBy('views','desc')->limit('2')->get()

            
        ]);
    }

    public function show(Post $post)
    {
        return view('blog', [
            "categories" => Category::all(),
            "post" => $post,
            $post->increment('views'),
            "popular"   => Post::orderBy('views','desc')->limit('2')->get()
        ]);
    }

    public function kategori()
    {
        return view('categories', [
            "categories" => Category::latest()->paginate(6),
            "popular"   => Post::orderBy('views','desc')->limit('2')->get()
        ]);
    }
}
