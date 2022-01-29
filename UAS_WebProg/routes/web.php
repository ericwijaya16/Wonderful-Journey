<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/','HomeController@home');
Route::get('/category/{id}', 'ArticleController@category');
Route::get('/detail/{id}', 'ArticleController@detail');
Route::get('/about', 'HomeController@about');
Route::get('/user', 'AdminController@user');
Route::get('/deleteuser/{id}', 'AdminController@deleteuser');
Route::get('/profile', 'UserController@profile');
Route::post('/update/{id}', 'UserController@update');
Route::get('/blog', 'UserController@blog');
Route::get('/deletearticle/{id}', 'UserController@deletearticle');
Route::get('/insert', 'UserController@insert');
Route::post('/createblog', 'UserController@createblog');