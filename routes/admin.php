<?php

Route::get('/','HomeController@index' )->name('admin');

Route::resource("mhs", "MahasiswaController");

Route::resource("tamu", "BukuTamuController");
Route::resource("kupon", "KuponController");
// Route::resource("kupon", "KuponController");
// index create store show edit update distroy

Route::get('/tes','TesController@index');
Route::get('/email','EmailPenerimaController@index');
