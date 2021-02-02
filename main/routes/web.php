<?php

use Illuminate\Support\Facades\Route;
//HOME
Route::get('/' , 'DrinkController@index')
    -> name('home-drink');
//SHOW SINGLE ENTITY
Route::get('/show/{id}' , 'DrinkController@show')
    -> name('show-drink');
//CREATE ENTITY
Route::get('/create' , 'DrinkController@create')
    -> name('create-drink');
Route::post('/store' , 'DrinkController@store')
    -> name('store-drink');
//EDIT ENTITY
Route::get('/edit/{id}' , 'DrinkController@edit')
    -> name('edit-drink');
Route::post('/update/{id}' , 'DrinkController@update')
    -> name('update-drink');
//DELETE ENTITY    
Route::get('/delete/{id}' , 'DrinkController@destroy')
    -> name('delete-drink');