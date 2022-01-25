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



  Route::get('/', 'ComicController@index')->name('comic.index');

  Route::get('/create', 'ComicController@create')->name('comic.create');

Route::post('', 'ComicController@store')->name('comic.store'); 

Route::get('/comics/{comic}', 'ComicController@show')->name('comic.show');

  Route::get('/{comic}/edit', 'ComicController@edit')->name('comic.edit');

Route::put('/comics/{comic}', 'ComicController@update')->name('comic.update');

Route::delete('/comics/{comic}', 'ComicController@destroy')->name('comic.destroy'); 

 Route::resource('characters', 'CharacterController');