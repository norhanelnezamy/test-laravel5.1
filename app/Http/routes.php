<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'AdminController@getLogin');

Route::post('login', 'AdminController@postLogin');

Route::group(['middleware' => 'admin'], function () {

    Route::controller('products', 'ProductsController');

    Route::controller('categories', 'CategoriesController');

    Route::controller('users', 'UsersController');

});

