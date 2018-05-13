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

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['web']], function(){

});


Route::auth();

Route::get('/home', 'HomeController@index');

//Route to admin page
Route::get('/admin', function(){

    return view('admin.index');
});


//Create a route group on 050718

Route::group(['middleware'=>'admin'], function(){

    //Route to User in admin page
    Route::resource('admin/users', 'AdminUsersController');
    
    //Route to Posts in admin page
    Route::resource('admin/posts', 'AdminPostsController');
    
    //Route to Categories in admin page
    Route::resource('admin/categories', 'AdminCategoriesController');

});



Route::auth();

Route::get('/home', 'HomeController@index');
