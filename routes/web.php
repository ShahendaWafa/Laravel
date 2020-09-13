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
});

Route::get('/home', "App\Http\Controllers\Posts@home");

Route::get('/allposts', "App\Http\Controllers\Posts@allposts");

Route::get('/create', "App\Http\Controllers\Posts@create");

Route::get('/contact', "App\Http\Controllers\Posts@contact");

Route::post('/submit', "App\Http\Controllers\Posts@submit");

Route::get('/show/{post_id}', "App\Http\Controllers\Posts@show");

Route::get('/edit/{post_id}', "App\Http\Controllers\Posts@edit");

Route::post('/update/{post_id}', "App\Http\Controllers\Posts@update");

Route::get('/delete/{post_id}', "App\Http\Controllers\Posts@delete");