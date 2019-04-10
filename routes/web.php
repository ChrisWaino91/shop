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

    Route::get('/', 'HomeController@index'); 
    Route::get('/departments/{department}', 'DepartmentsController@show');
    Route::get('/product/{product}', 'ProductController@show');
    Route::get('/basket/', 'BasketController@edit'); 
    Route::post('/basket/add', 'BasketController@store'); 
    Route::delete('/basket/delete/{orders_to_products}','BasketController@destroy');
    Route::post('/basket/confirmation', 'CustomerController@store');
    Route::get('/basket/confirmation', 'BasketController@show');

// Admin Routes

    Route::group(['middleware' => 'auth'], function(){

        Route::get('/admin', 'AdminController@show');
        Route::get('/admin/products/create', 'ProductController@create');
        Route::get('/admin/products/', 'ProductController@edit');
        Route::post('/admin/products', 'ProductController@store');
        Route::get('/admin/products/{product}', 'ProductController@index');
        Route::patch('/admin/products/{product}', 'ProductController@update'); 
        Route::delete('/admin/products/{product}', 'ProductController@destroy');

        Route::get('/admin/department/create', 'DepartmentsController@create');
        Route::get('/admin/departments/', 'DepartmentsController@edit');
        Route::post('/admin/departments', 'DepartmentsController@store');
        Route::get('/admin/departments/{department}', 'DepartmentsController@index');
        Route::patch('/admin/departments/{department}', 'DepartmentsController@update'); 
        Route::delete('/admin/departments/{department}', 'DepartmentsController@destroy');

    });

// Other

Auth::routes();

Route::get('/account', 'HomeController@index')->name('home');
