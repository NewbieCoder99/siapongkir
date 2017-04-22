<?php

Route::get('/', function ()
{
    return view('front_layouts.index');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/home/pemasukan','HomeController@pemasukan');
Route::get('/home/pengeluaran', 'HomeController@pengeluaran');
Route::get('/home/report', 'HomeController@report');
