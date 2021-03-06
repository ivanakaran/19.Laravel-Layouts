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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'BlogController@index')->name('index');
Route::get('aboutme', 'BlogController@aboutMe')->name('aboutme');
Route::get('sample', 'BlogController@sample')->name('sample');
Route::get('contact', 'BlogController@contact')->name('contact');