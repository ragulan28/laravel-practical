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

    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware(['myAuth'])->group(function () {
        Route::get('/home', 'HomeController@home');

        // Update User1
        Route::get('/user_update/{id}', 'UserController@user_update');
        Route::post('/user_update_post/{id}', 'UserController@user_update_post');
        Route::get('/logout', 'LoginController@logout');
    });

    Route::get('/registration', 'RegistrationController@form');
    Route::post('/registration_post', 'RegistrationController@registration_post');

    Route::get('/logina', 'LoginController@index');
    Route::post('/login_post', 'LoginController@login_post');
    Route::get('/logout', 'LoginController@logout');

