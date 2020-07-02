<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug){
        if(isset($slug)){

        }
        $category = Category::where([ 'slug' => $slug ])->first();

        $posts = Post::where([
            'category_id' => $category->id,
            'status' => 1
        ])->get();

        $viewData = [
            'category' => $category,
            'posts' => $posts
        ];
//        dd($posts);
        return view("client.post.index", $viewData);
    }
}
