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

    Route::get('/', function ()
    {
        return view('auth.login');
    });

    Auth::routes();

    Route::get('admin/dashboard', 'AdminController@dashboard')->name('admin-dashboard');
    Route::get('home', 'UserController@home')->name('home');

