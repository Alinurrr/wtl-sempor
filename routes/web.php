<?php

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


// ######################### ADMINISTRATOR #########################
Route::get('/adm', 'DashboardController@index')->name('dashboard');
//========================== product ==========================
Route::get('/adm/product', 'ProductController@index')->name('product-admin');
// create
Route::get('/adm/product/create', 'ProductController@create')->name('product-create');
Route::post('/adm/product/store', 'ProductController@store')->name('product-store');
// delete
Route::delete('/adm/product/{product:slug}/delete', 'ProductController@destroy')->name('product-delete');

//========================== category ==========================
Route::get('/adm/product/categories/{category:slug}', 'CategoryController@show');

Route::get('/', function () {
    return view('welcome');
})->name('home');
