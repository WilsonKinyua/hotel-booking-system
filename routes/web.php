<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/','WelcomeController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rooms','WelcomeController@rooms')->name('rooms');

Route::get('/about-us','WelcomeController@about_us')->name('about-us');

Route::get('/news','WelcomeController@blog')->name('blog');

Route::get('/contact','WelcomeController@contact')->name('contact');

Route::get('rooms/room-details/{details}', 'WelcomeController@room_details')->name("room.details");