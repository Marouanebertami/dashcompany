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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('admin');

Route::get('/profile/update', 'ProfilController@update')->name('profile');

Route::post('/profile/update', 'ProfilController@upstore')->name('update');

Route::get('/password', 'ProfilController@password')->name('password');
Route::post('/password', 'ProfilController@passwordUpdate')->name('passwordupdate');
