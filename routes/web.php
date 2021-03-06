<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::livewire('/', 'home')->name('home');

Route::livewire('/contact', 'contact-form')->name('contact');
Route::livewire('/product', 'product-index')->name('product');
Route::livewire('/product/{id}/{slug}', 'product-detail')->name('product.detail');
Route::livewire('/products/category/{categoryId}/{slug}', 'product-category')->name('products.category');
Route::livewire('/keranjang', 'keranjang')->name('keranjang');
Route::livewire('/checkout', 'checkout')->name('checkout');
Route::livewire('/history', 'history')->name('history');

Route::livewire('/about', 'about')->name('about');

Route::livewire('/article', 'article-index')->name('article');
Route::livewire('/article/{id}/{slug}', 'article-detail')->name('article.detail');
Route::livewire('/article/category/{categoryId}/{slug}', 'article-category-filter')->name('article.category');
// Route::get('/contact', function () {
//     return view('form');
// });



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

    //========================== Pesanan ==========================
    Route::get('/adm/pesanan', 'PesananController@index')->name('pesanan-admin');
    // update
    Route::get('/adm/pesanan/{pesanan:kode_pemesanan}/edit', 'PesananController@edit')->name('pesanan-edit');
    Route::patch('/adm/pesanan/{pesanan:kode_pemesanan}/edit', 'PesananController@update')->name('pesanan-update');

    //========================== Laporan Penjualan ==========================
    Route::get('/adm/penjualan', 'PesananController@penjualanindex')->name('penjualan-admin');
    Route::get('/adm/penjualan/cetak_pdf', 'PesananController@cetak_pdf')->name('cetakpenjualan-admin');

    //========================== Auth ==========================

    Route::get('/adm/user', 'UserController@index')->name('user-admin');
    // update level
    Route::get('/adm/user/{user:id}/editlevel', 'UserController@editlevel')->name('user-editlevel');
    Route::patch('/adm/user/{user:id}/editlevel', 'UserController@updatelevel')->name('user-updatelevel');
    // update isi field
    Route::get('/adm/user/{user:id}/edit', 'UserController@edit')->name('user-edit');
    Route::patch('/adm/user/{user:id}/edit', 'UserController@update')->name('user-update');
    //show
    Route::get('/adm/user/{user:id}', 'UserController@show')->name('user-show');



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

    //========================== searching ==========================

    // user
    Route::get('adm/user/search/user', 'SearchController@user')->name('search-user');
    // product
    Route::get('adm/product/search/product', 'SearchController@product')->name('search-product');
    // user
    Route::get('adm/article/search/article', 'SearchController@article')->name('search-article');
});
