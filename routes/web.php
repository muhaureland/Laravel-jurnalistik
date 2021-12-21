<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('detail/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('categories', [BlogController::class, 'kategori'])->name('blog.kategori');


Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('logout', [LoginController::class, 'logout'])->name('login.logout');


Route::get('register', [RegisterController::class, 'index'])->name('register.index')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');


Route::middleware(['web', 'auth'])->group(function () {
    Route::get('dashboard', function(){
        return view('admin.index');
    })->name('dashboard');
    Route::resource('dashboard/posts', DashboardPostController::class);
    Route::resource('dashboard/categories', DashboardCategoryController::class);
});

























// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('blogs', [
//         // 'posts' => $category->posts,
//         "title" => "Berita Terbaru : $category->name",
//         "posts"     => Post::latest()->paginate(7)
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//         return view('blogs', [
//             // 'posts' => $author->posts->load('category', 'author')
//             "title" => "Berita Terbaru : $author->name",
//             'posts' => $author->name,
//             "posts"     => Post::latest()->paginate(7)
//             // "posts"     => Post::latest()->paginate(7)

//             //fungsi load juga sama seperti with tapi load ketika sudah melakusan routes model binding
//             //maksudnya ketika model sudah dipanggil maka ambil sisanya menggunakan load ketika menggunakan relationship table
//         ]);
//     });




