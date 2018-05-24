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

    // $username = 'dfdsf';
    // $password = 'password';
    // if (Auth::attempt(['username'=>$username, 'password'=>$password])){
      
    //     return redirect()->intended('/admin');
    // }
    return view('welcome');
});



Route::group(['middleware' => ['web']], function(){

});


Route::auth();

Route::get('/home', 'HomeController@index');

//
Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);


//Create a route group on 050718

Route::group(['middleware'=>'admin'], function(){

    //Route to admin page
    Route::get('/admin', function(){

        return view('admin.index');
    });

    //Route to User in admin page
    Route::resource('admin/users', 'AdminUsersController');
    
    //Route to Posts in admin page
    Route::resource('admin/posts', 'AdminPostsController');
    
    //Route to Categories in admin page
    Route::resource('admin/categories', 'AdminCategoriesController');

    //Route for Media
    Route::resource('admin/media', 'AdminMediasController');

    //Route::get('admin/media/upload', ['as'=>'admin.media.upload', 'uses'=>'AdminMediasController@store']);

    Route::resource('admin/comments', 'PostCommentsController');

    Route::resource('admin/comments/replies', 'CommentRepliesController');

});


Route::group(['middleware'=>'auth'], function(){

    Route::post('comment/reply', 'CommentRepliesController@createReply');

});



        



Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
