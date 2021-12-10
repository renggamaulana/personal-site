<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
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
        'title' => 'Home'
    ]);
});

Route::get('/blogs', function () {
    return view('blogs', [
        'title' => 'Blogs',
        'blogs' => Blog::all()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});
