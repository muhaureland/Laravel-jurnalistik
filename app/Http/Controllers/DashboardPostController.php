<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index',[
            'posts' => Post::where('user_id', auth()->user()->id)->latest()->paginate(2)
            // 'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create',[
            'categories'    => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $validatedData = $request->validate([
            'judul'         => 'required|max:15',
            'category_id'   => 'required',
            'gambar'        => 'image|file|max:1024',
            'body'          => 'required'
        ]);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['views'] = 0;
        $validatedData['slug'] = SlugService::createSlug(Post::class, 'slug', $request->judul);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        Post::create($validatedData);
        return redirect('dashboard/posts')->with('status', 'postingan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('dashboard/posts');
    }
}
