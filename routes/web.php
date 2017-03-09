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
/**
 * Login
 */
Route::get('/','AuthenticationController@index');

/**
 * Admin
 */
Route::get('/admin','AdminController@index');

/**
 * Users
 */
//Route::get('/admin','UserController@index');