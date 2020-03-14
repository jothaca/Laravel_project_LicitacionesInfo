<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get( '/', function () {return view('home');});

Route::get( '/home', 'HomeController@index')->name('home');
Route::get( '/register', 'HomeController@register');

Route::get( '/customers', 'CustomerController@index')->name('customers');
Route::get( '/customers/create', 'CustomerController@create');
Route::get( '/customers/{id}/delete', 'CustomerController@destroy');
Route::get( '/customers/{id}/edit', 'CustomerController@edit');
Route::post( '/customers/update', 'CustomerController@update');
Route::get( '/customers/{id}/show', 'CustomerController@show');
Route::post( '/customers/store', 'CustomerController@store');


Route::get( '/actions', 'ActionController@index')->name('actions');
Route::get( '/actions/create', 'ActionController@create');
Route::post( '/actions/store', 'ActionController@store');
Route::get( '/actions/{id}/delete', 'ActionController@destroy');



Auth::routes();
