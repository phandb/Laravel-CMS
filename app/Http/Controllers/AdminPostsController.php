<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Photo;
use App\User;
use App\Role;
use App\Category;
use App\Http\Requests\PostsCreateRequest;
use App\Http\Requests\PostsEditRequest;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Auth; 

use Illuminate\Support\Facades\Session;
use File;

class AdminPostsController extends Controller
{


  /************INDEX********************** */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
/************************CREATE************************************ */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Pass in category names
        $categories = Category::lists('name','id')->all();
        return view('admin.posts.create', compact('categories'));
    }
/********************STORE****************************************** */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsCreateRequest $request)
    {
        //
        $input = $request->all();
        $user = Auth::user();

        if($file = $request->file('photo_id')){
           $name = time() . $file->getClientOriginalName();
           $file->move('images', $name);
           $photo = Photo::create(['file' => $name]);
           $input['photo_id'] = $photo->id;

        }

        $user->posts()->create($input);
        return redirect('/admin/posts');


    }
/***********************SHOW***************************************** */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
/*******************EDIT*********************************** */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
/**********************UPDATE******************************* */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
/************************DESTROY************************* */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
