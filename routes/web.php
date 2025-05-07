<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardBlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardWorkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WorkController;
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

// =============== FRONT-END ===============

Route::get('/', [HomeController::class, 'index'])->name('login');


Route::get('/a-startup-technology', function () {
    return view('about');
});

Route::get('/what-we-do', function () {
    return view('services');
});

Route::get('/working-together', [WorkController::class, 'index']);
Route::get('/working-together/{work:slug}', [WorkController::class, 'show']);

Route::get('/writing-about', [BlogController::class, 'index']);
Route::get('/writing-about/{blog:slug}', [BlogController::class, 'show']);

Route::get('/all-ears', function () {
    return view('contact');
});

// =============== BACK-END ===============

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/development', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/development/work/checkSlug', [DashboardWorkController::class, 'checkSlug'])->middleware('auth');
Route::resource('/development/work', DashboardWorkController::class)->middleware('auth');

Route::get('/development/blog/checkSlug', [DashboardBlogController::class, 'checkSlug'])->middleware('auth');
Route::resource('/development/blog', DashboardBlogController::class)->middleware('auth');

Route::get('/development/profile/checkSlug', [DashboardProfileController::class, 'checkSlug'])->middleware('auth');
Route::get('/development/profile', [DashboardProfileController::class, 'index'])->middleware('auth');

Route::get('/development/data-user/checkSlug', [DashboardUserController::class, 'checkSlug'])->middleware('auth');
Route::resource('/development/data-user', DashboardUserController::class)->middleware('auth');
