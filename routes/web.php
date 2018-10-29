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
Route::get('/',['as'=>'home.index','uses'=>'homeController1@index']);

Route::get('news/{name?}',['as'=>'news.index','uses'=>'newsController1@index']);

Route::get('about/{name?}',['as'=>'about.index','uses'=>'aboutController1@index']);
