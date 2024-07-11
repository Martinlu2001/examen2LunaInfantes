<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
//Route::get('ingreso', 'App\Http\Controllers\IngresosController@index')->name('alumnos.index');
Route::get('ingreso', 'App\Http\Controllers\AlumnosController@create')->name('ingreso.create');
Route::post('ingreso', 'App\Http\Controllers\AlumnosController@store')->name('ingreso.store');
Route::get('listado','App\Http\Controllers\AlumnosController@index')->name('listado.index');
Route::get('listado/{id}','App\Http\Controllers\AlumnosController@show')->name('listado.show');
