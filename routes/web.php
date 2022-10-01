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

// Uncomment to explicitly set the routes.
//Auth::routes(['verify' => true, 'register' => false]);
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
