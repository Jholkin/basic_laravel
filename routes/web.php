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

Route::view('/', 'home')->name('home');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::post('contact', 'MessagesController@store');

Route::get('portfolio', 'PortfolioController@index')->name('portfolio');
//Route::resource('protfolio', 'PortfolioController')->except('create','edit');