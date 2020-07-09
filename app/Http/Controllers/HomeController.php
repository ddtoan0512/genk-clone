<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $hotPosts = Post::where("hot", 1)
                        ->orderBy('created_at', 'desc')
                        ->take(9)
                        ->get();
        $viewData = [
            'posts' => $posts,  
            'hotPosts' => $hotPosts
        ];

        return view('home', $viewData);
    }
}
