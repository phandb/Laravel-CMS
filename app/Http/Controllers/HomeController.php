<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $user = Auth::user();
      // $year = Carbon::now()->year;
        $posts = Post::paginate(5);
        $categories = Category::all();
        return view('front/home', compact('posts', 'categories', 'year'));
    }


    public function post($slug){
        
        $post = Post::findBySlugOrFail($slug);
        $categories = Category::all();
        $comments = $post->comments()->whereIsActive(1)->get();
        
        return view('post', compact('post', 'comments', 'categories'));

    }
}
