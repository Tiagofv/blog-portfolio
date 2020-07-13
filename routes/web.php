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
    return view('welcome');
})->name('index');
Auth::routes();

Route::get('/blog', 'PostController@index')->name('blog');
Route::resource('contact', 'ContactController');
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'PostController@index')->name('home');

});
Route::resource('post', 'PostController');
