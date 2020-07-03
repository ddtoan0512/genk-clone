<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function  show(Request $request, $slug, $id){
        $url = $request->segment(2);
        $arrUrl = \explode('-', $url);
        $id = \array_pop($arrUrl);
        $slug = implode("-", $arrUrl);

        $post = Post::where([
            'id' => $id,
            'slug' => $slug
        ])->firstOrFail();

        return view('client.post.detail', compact('post'));
    }
}
