<?php

use GuzzleHttp\Middleware;
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
//// Route for home page by logged-in user
Route::get('/', function () {
    return view('welcome');
});
//// Auth routes for registration and login pages
Auth::routes();

//// Middleware route additions for 'admin' pages
Route::middleware('auth')->name('admin.')->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/orders', 'OrderController@index')->name('orders.index');
    Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
    Route::resource('products', 'ProductController');
    Route::resource('ingredients', 'IngredientController');
});

Route::get('{any?}', function () {
    return view('welcome');
})->where('any', '.*');
