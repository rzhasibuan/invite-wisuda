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
//     // return view('theme');
//     return view('welcome');
// });

Route::get('/','FrontEnd\HalamanController@index');
Route::get('/wisuda/cari','FrontEnd\HalamanController@cari');
Route::post('/undagan-kami','FrontEnd\HalamanController@undangan');


Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

