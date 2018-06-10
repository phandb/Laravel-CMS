<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\Comments;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){

        $postsCount = Post::count();
        $categoriesCount = Category::count();
        $commentsCount = Comments::count();
        return view('admin/index', compact('postsCount', 'categoriesCount', 'commentsCount'));
    }
}
