<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OauthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $topUsers = User::orderBy('writer_post_views', 'desc')->limit(3)->get();
    $posts = Post::latest()->limit(3)->get();
    return view('home', [
        "title" =>"Home",
        "active" => "home",
        "topUsers" => $topUsers,
        "posts" => $posts
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" =>"About",
        "active" => "about",
        "name" => "Moh. Ainur Bahtiar Rohman",
        "email" => "ainurbahtiarr@gmail.com",
        "image" => "ainur.jpg",
    ]);
});


Route::get('/posts', [PostController::class, 'index']);



//halaman detail post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('oauth/google', [OauthController::class, 'redirectToProvider'])->name('oauth.google');  
Route::get('oauth/google/callback', [OauthController::class, 'handleProviderCallback'])->name('oauth.google.callback');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/set-password', [OauthController::class, 'setPassword'])->middleware('auth');
Route::post('/set-password', [OauthController::class, 'storePassword'])->middleware('auth');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('dashboard/categories', AdminCategoryController::class)->except('show')->middleware('is_admin');
Route::resource('/profile', UserController::class)->middleware('auth')->scoped([
    'profile' => 'username',
]);;
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');
// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title' => "Post By Category : $category->name",
//         'active' => "categories",
//         'posts'=>$category->posts->load('category', 'author'),
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts',[
//         'title' => "Post by Author : $author->name",
//         'active' => "posts",
//         'posts'=>$author->posts->load('category', 'author'),
//     ]);
// });

