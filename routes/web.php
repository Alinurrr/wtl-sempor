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
Route::group(['middleware' => ['auth', 'ceklevel:master,admin']], function () {

    Route::get('/adm', 'DashboardController@index')->name('dashboard');
    //========================== product ==========================
    Route::get('/adm/product', 'ProductController@index')->name('product-admin');
    // create
    Route::get('/adm/product/create', 'ProductController@create')->name('product-create');
    Route::post('/adm/product/store', 'ProductController@store')->name('product-store');
    // update
    Route::get('/adm/product/{product:slug}/edit', 'ProductController@edit')->name('product-edit');
    Route::patch('/adm/product/{product:slug}/edit', 'ProductController@update')->name('product-update');
    // delete
    Route::delete('/adm/product/{product:slug}/delete', 'ProductController@destroy')->name('product-delete');
    // show
    Route::get('/adm/product/{product:slug}', 'ProductController@show')->name('product-show');

    //========================== category ==========================
    Route::get('/adm/product/categories/{category:slug}', 'CategoryController@show');


    //========================== article ==========================
    Route::get('/adm/article', 'ArticleController@index')->name('article-admin');
    // create
    Route::get('/adm/article/create', 'ArticleController@create')->name('article-create');
    Route::post('/adm/article/store', 'ArticleController@store')->name('article-store');
    // update
    Route::get('/adm/article/{article:slug}/edit', 'ArticleController@edit')->name('article-edit');
    Route::patch('/adm/article/{article:slug}/edit', 'ArticleController@update')->name('article-update');
    // delete
    Route::delete('/adm/article/{article:slug}/delete', 'ArticleController@destroy')->name('article-delete');
    // show
    Route::get('/adm/article/{article:slug}', 'ArticleController@show')->name('article-show');
});


Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
