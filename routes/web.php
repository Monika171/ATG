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
    return view('admin.index');
});

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'PagesController@index');

//DUMMY QuiZ Module

Route::resource('quiz','QuizController');
Route::resource('question','QuestionController');


// DUMMY RESTAURANT MENU
Route::resource('category','CategoryController')->middleware('auth');
Route::resource('food','FoodController')->middleware('auth');
Route::get('/listFood','FoodController@listFood'); //menu home
Route::get('/foods/{id}','FoodController@view')->name('food.view');

//////////////////////////

Route::resource('atg','ATGController');

Route::get('/getStates/{id}', 'ATGController@getStates');
Route::get('/getCities/{id}', 'ATGController@getCities');

/////////////////////////

// PHOTO GALLERY
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
