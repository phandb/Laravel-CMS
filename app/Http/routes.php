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

//Route to User in admin page

Route::resource('admin/users', 'AdminUsersController');

Route::auth();

Route::get('/home', 'HomeController@index');
