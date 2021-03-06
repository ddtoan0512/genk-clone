<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function index($slug){

        $category = Category::where([ 'slug' => $slug ])->firstOrFail();
        $posts = Post::where([
            'category_id' => $category->id,
            'status' => 1
        ])->get();

//        dd($posts);
        return view("client.post.index", compact('category', 'posts'));
    }
}
