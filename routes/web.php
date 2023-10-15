<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('home',[
        'title' => 'Home',
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        "name" => "Farhan Yudha Pratama",
        "skill" => "Web Developer"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'find']);
Route::get('/categories/', function(){
    return view('categories', [
        'title' => 'Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/category/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post by Category; $category->title",
        'active' => 'blog',
        'posts' => $category->posts->load(['user', 'category'])
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post by Author: $author->name",
        'active' => 'blog',
        'posts' => $author->posts->load(['user', 'category'])
    ]);
});