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

Route::get('/home', function () {
    return view('display_blogs');
});

Route::get('/home', 'BlogController@showBlogs');

Route::post('addTag/{id}', 'TagController@addTags');


