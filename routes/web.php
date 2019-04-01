<?php

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


// Front End Routes

    Route::get('/shop', 'HomeController@index'); 
    Route::get('/shop/departments/{department}', 'DepartmentsController@show');
    Route::get('/shop/product/{product}', 'ProductController@show');
    Route::get('/shop/basket/', 'BasketController@show'); 
    Route::post('/shop/basket/add', 'BasketController@store'); 
    Route::delete('/shop/basket/delete/{orders_to_products}','BasketController@destroy');

// Admin Routes

    Route::group(['middleware' => 'auth'], function(){

        Route::get('/shop/admin', 'AdminController@show');
        Route::get('/shop/admin/products/create', 'ProductController@create');
        Route::get('/shop/admin/products/', 'ProductController@edit');
        Route::post('/shop/admin/products', 'ProductController@store');
        Route::get('/shop/admin/products/{product}', 'ProductController@index');
        Route::patch('/shop/admin/products/{product}', 'ProductController@update'); 
        Route::delete('/shop/admin/products/{product}', 'ProductController@destroy');

        Route::get('/shop/admin/department/create', 'DepartmentsController@create');
        Route::get('/shop/admin/departments/', 'DepartmentsController@edit');
        Route::post('/shop/admin/departments', 'DepartmentsController@store');
        Route::get('/shop/admin/departments/{department}', 'DepartmentsController@index');
        Route::patch('/shop/admin/departments/{department}', 'DepartmentsController@update'); 
        Route::delete('/shop/admin/departments/{department}', 'DepartmentsController@destroy');

    });

// Other

Auth::routes();

Route::get('shop/account', 'HomeController@index')->name('home');
