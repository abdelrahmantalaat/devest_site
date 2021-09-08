<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class,'index'])->name('/');

Route::get('/about', [HomeController::class,'getAbout'])->name('about');

Route::get('/portfolio', [HomeController::class,'getPortfolio'])->name('portfolio');

Route::get('/contact', [HomeController::class,'getContact'])->name('contact');

//test
Route::get('/test', [HomeController::class,'getTest'])->name('test');

Route::get('/portfolio/{portfolio}', [HomeController::class,'getPortfolioPost'])->name('portfolio_post.show');

Route::get('/blog', [HomeController::class,'getBlog'])->name('blog');

Route::get('/blog/{key_word}', [HomeController::class,'getBlogPost'])->name('blog_post');

Route::get('admin', [HomeController::class,'showAdmin'])->name('admin.index')->middleware('auth');

Route::get('/search/', [BlogController::class,'search'])->name('search_posts');
Route::get('/key-word-validate/{key_word}',[BlogController::class,'key_word_validate']);

Route::get('/category', [CategoryController::class,'category'])->name('category_posts');
Route::post('/category', [BlogController::class,'addCategory'])->name('add_category');
Route::post('/contact-us',[ContactController::class,'store'])->name('contact-us');

Route::resources([
    'admin/page' => PageController::class,
    'admin/portfolio' => PortfolioController::class,
    'admin/client' => ClientController::class,
    'admin/settings' => SettingController::class,
    'admin/contact' => ContactController::class,
    'admin/blog' => BlogController::class,
    'admin/users' => UserController::class
]);

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

