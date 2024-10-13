<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'nama' => "Icam",
        'email' => "futuh@gmail.com"
    ]);
});


// posts 
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/post/{post:slug}', [PostsController::class, 'show']);



// categories
Route::get('/categories', function () {
    $categories = Category::all();
    return view('categories', compact('categories'));
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', compact('category'));
});


// users
Route::get('/authors/{user:username}', function (User $user) {
    return view('authors', compact('user'));
});

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// registration
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

// dashboard post controller
Route::resource('/dashboard/posts', DashboardPostController::class)
    ->middleware('auth');

// admin category controller
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
