<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/products','App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/{id}','App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/haile','App\Http\Controllers\HaileController@index')->name('haile.index');