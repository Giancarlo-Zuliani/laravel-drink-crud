<?php

use Illuminate\Support\Facades\Route;

Route::get('/' , 'DrinkController@index')
    -> name('home-drink');
Route::get('/show/{id}' , 'DrinkController@show')
    -> name('show-drink');
Route::get('/create' , 'DrinkController@create')
    -> name('create-drink');
Route::post('/store' , 'DrinkController@store')
    -> name('store-drink');
Route::get('/edit/{id}' , 'DrinkController@edit')
    -> name('edit-drink');
Route::post('/update/{id}' , 'DrinkController@update')
    -> name('update-drink');
Route::get('/delete/{id}' , 'DrinkController@destroy')
    -> name('delete-drink');