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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@index');

Route::resource('atg','ATGController');

Route::get('/getStates/{id}', 'ATGController@getStates');
Route::get('/getCities/{id}', 'ATGController@getCities');

/////////////////////////

//Route::get('/','ImageController@album');

Route::get('/album','ImageController@index');

Route::post('/album','ImageController@store')->name('album.store');
Route::post('/album/image','ImageController@addImage')->name('album.image');

Route::get('albums/{id}','ImageController@show');
Route::post('image/delete','ImageController@destroy')->name('image.delete');


