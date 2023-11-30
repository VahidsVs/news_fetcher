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
Route::get('/post-details/{id}', [HomeController::class, 'getPostDetails'])->name("home.post-details");

Route::get('/api/apifetchnews', [PostApiController::class, 'apiFetchNews'])->name("api.fetchNews");

