<?php

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
    return view('homepage');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

#ajustar isso para uso mais adequado do HomeController.php , se é bom criar outros controllers ou posso fazer assim de boa:
Route::get('/postsPage', [App\Http\Controllers\HomeController::class, 'postsPage'])->name('postsPage')->middleware('verified'); 

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile')->middleware('verified'); 
