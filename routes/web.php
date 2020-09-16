<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('templates.store');
});

Auth::routes();

Route::get('/store/login', 'Store\Auth\LoginController@showLoginForm')->name('store.login');
Route::post('/store/login', 'Store\Auth\LoginController@login')->name('store.login.submit');
Route::get('/store/logout', 'Store\Auth\LoginController@logout')->name('store.logout');



Route::get('/food', 'Store\FoodDrinkController@index')->name('food.index');
Route::get('/food/create', 'Store\FoodDrinkController@create')->name('food.create');
Route::post('/food/store', 'Store\FoodDrinkController@store')->name('food.store');
Route::get('/food/edit/{id}', 'Store\FoodDrinkController@edit')->name('food.edit');
Route::patch('/food/update/{id}', 'Store\FoodDrinkController@update')->name('food.update');

Route::get('/home', 'HomeController@index')->name('home');
