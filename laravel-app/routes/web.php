<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'index']);

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/postsPage/create', [App\Http\Controllers\PostsController::class, 'create'])->name('create')->middleware('verified'); 

Route::post('/postsPage/create', [App\Http\Controllers\PostsController::class, 'store'])->name('store')->middleware('verified'); 

Route::get('/postsPage/show/{id}', [App\Http\Controllers\PostsController::class, 'show'])->name('show')->middleware('verified'); 

Route::post('/postsPage/update/{id}', [App\Http\Controllers\PostsController::class, 'edit'])->name('edit')->middleware('verified'); 

Route::delete('/postsPage/delete/{id}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('destroy')->middleware('verified'); 

Route::get('/postsPage', [App\Http\Controllers\PostsController::class, 'postsPage'])->name('postsPage')->middleware('verified'); 

Route::get('/profile', [App\Http\Controllers\PagesController::class, 'profile'])->name('profile')->middleware('verified'); 

Route::get('/postsPage/showProducerProfile', [App\Http\Controllers\PagesController::class, 'showProducerProfile'])->name('showProducerProfile')->middleware('verified'); 

