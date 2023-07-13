<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Web\Application\Admin\AdminController;
use App\Models\Category;

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

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', function() {
    dd('register page!');
})->name('register');

Route::middleware('customAuth')->group(function(){ 
    Route::prefix('admin')->name('admin.')->group(function() {
        Route::get('dashboard', [AdminController::class, 'dashboard']);
    });
});

// blogs
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/create', [BlogController::class, 'create']);
// wildcard blog dibawah adalah nama model dari blogs -> Blog(blog) dan :slug adalah mengambil data speseifik berdasarkan slug
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);
Route::post('/blogs', [BlogController::class, 'store']);

// category
Route::resource('/categories', CategoryController::class);


// Route::prefix('blog')->group(function() {
//     Route::get('/', [BlogController::class, 'index'])->name('index');
//     Route::get('create', [BlogController::class, 'create'])->name('create');
//     Route::post('store', [BlogController::class, 'store'])->name('store');
//     Route::get('edit', [BlogController::class, 'edit'])->name('edit');
//     Route::post('update', [BlogController::class, 'update'])->name('update');
//     Route::delete('destroy', [BlogController::class, 'destroy'])->name('destroy');
// });

// Route::prefix('categories')->group(function() {
//     Route::get('/', CategoryController::class, 'index')->name('index');
//     Route::get('create', CategoryController::class, 'create')->name('create');
//     Route::post('store', CategoryController::class, 'store')->name('store');
//     Route::get('edit', CategoryController::class, 'edit')->name('edit');
//     Route::post('update', CategoryController::class, 'update')->name('update');
//     Route::delete('destroy', CategoryController::class, 'destroy')->name('destroy');
// });