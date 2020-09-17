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
    return view('templates.landingpage');
});

Route::get('/store', function () {
    return redirect()->route('dashboard.index');
});
Auth::routes();



Route::get('/store/login', 'Store\Auth\LoginController@showLoginForm')->name('store.login');
Route::post('/store/login', 'Store\Auth\LoginController@login')->name('store.login.submit');
Route::get('/store/logout', 'Store\Auth\LoginController@logout')->name('store.logout');
Route::get('/store/register', 'Store\Auth\RegisterController@showRegisterForm')->name('store.register');
Route::post('/store/register', 'Store\Auth\RegisterController@register')->name('store.register.submit');


Route::get('/dashboard', 'Store\DashboardController@index')->name('dashboard.index');
Route::get('/food', 'Store\FoodDrinkController@index')->name('food.index');
Route::get('/food/create', 'Store\FoodDrinkController@create')->name('food.create');
Route::post('/food/store', 'Store\FoodDrinkController@store')->name('food.store');
Route::get('/food/edit/{id}', 'Store\FoodDrinkController@edit')->name('food.edit');
Route::patch('/food/update/{id}', 'Store\FoodDrinkController@update')->name('food.update');
Route::get('/food/destroy/{id}', 'Store\FoodDrinkController@destroy')->name('food.destroy');

Route::get('/profile', 'Store\ProfileController@index')->name('profile.index');
Route::post('/profile/store', 'Store\ProfileController@store')->name('profile.store');



Route::get('/home', 'HomeController@index')->name('home');
