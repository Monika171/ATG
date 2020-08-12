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

//////////////////////////////
///*
Route::get('/contacts','ContactController@index');
Route::get('/contacts/create','ContactController@create')->name('contact.index');
Route::post('/contacts','ContactController@store')->name('contact.store');
Route::get('/contacts/{id}/edit','ContactController@edit')->name('contact.edit');
Route::post('/contacts/{id}/store','ContactController@update')->name('contact.update');
Route::get('/contacts/{id}','ContactController@show')->name('contact.show');
Route::post('/contacts/{id}/delete','ContactController@destroy')->name('contact.destroy');

//*/






















