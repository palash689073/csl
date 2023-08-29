<?php

Route::get('/','homeController@home');
Route::get('about','homeController@about');
Route::get('contact','homeController@contact');

Route::get('category','categoryController@index');
Route::get('category/create','categoryController@create');
Route::post('category/create','categoryController@store');
Route::get('category/delete/{id}','categoryController@delete');
Route::get('category/edit/{id}','categoryController@edit');
Route::post('category/update','categoryController@update');
 