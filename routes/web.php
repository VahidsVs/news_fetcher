<?php

use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'showHome'])->name("home");
Route::get('posts/{category}', [HomeController::class, 'getPostsByCategory'])->name("home.category");
Route::get('post-details/{id}', [HomeController::class, 'getPostDetails'])->name("home.post-details");
Route::get('post-details/like/{post}', [HomeController::class, 'likePost'])->name('post-details.like');
Route::get('post-details/unlike/{post}', [HomeController::class, 'unlikePost'])->name('post-details.unlike');
Route::post('post-details/create-comment/{post}', [HomeController::class, 'createComment'])->name('post-details.create-comment');

Route::get('/api/apifetchnews', [PostApiController::class, 'apiFetchNews'])->name("api.fetchNews");

