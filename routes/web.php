<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoriesController;
use GuzzleHttp\Middleware;

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

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Silva Tria A.",
        "email" => "anugerahterindhypk@gmail.com",
        "img" => "me.jpg",
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        "title" => "Post Categories",
        "categories" => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function() { return view('dashboard.index'); } )->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/posts/createSlug', [DashboardPostController::class, 'createSlug'])->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoriesController::class);










// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         "title" => "Post category : " . $category->name,
//         "posts" => $category->posts->load('author', 'category'),
//         "category" => $category->name,
//     ]);
// });

// Route::get('/author/{author:username}', function(User $author){
//     return view('posts', [
//         "title" => "Posts by : " . $author->name,
//         "posts" => $author->posts->load('author', 'category')
//     ]);
// });