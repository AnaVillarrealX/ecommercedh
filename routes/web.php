<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contactUS', 'ContactUSController@contactUS');
Route::post('/contactUS', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

Route::get('/faqs', 'FaqsController@faqs')->name('faqs');
