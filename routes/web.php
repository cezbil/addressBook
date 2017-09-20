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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','checkAdmin']], function (){
    Route::post('/contacts/{id}', 'ContactsController@update')->name('contacts.update');

    Route::resource('contacts', 'ContactsController', ['except' => [
         'update', 'destroy'
    ]]);
        Route::post('/contacts/{id}', 'ContactsController@update')->name('contacts.update');
        Route::post('/contacts/delete/{id}', 'ContactsController@destroy')->name('contacts.destroy');


});
