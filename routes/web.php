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
Route::view('/quienes-somos', 'about')->name('about');
Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('message.store');

Route::resource('project', 'ProjectController');

/*Route::get('/project', 'ProjectController@index')->name('project.index');
Route::get('/project/crear', 'ProjectController@create')->name('project.create');
Route::post('/project', 'ProjectController@store')->name('project.store');
Route::get('/project/{project}/editar', 'ProjectController@edit')->name('project.edit');
Route::patch('/project/{project}', 'ProjectController@update')->name('project.update');
Route::get('/project/{project}', 'ProjectController@show')->name('project.show');
Route::delete('/project/{project}', 'ProjectController@destroy')->name('project.destroy');*/

//Route::resource('portfolio', 'PortfolioController')->except('create','edit');