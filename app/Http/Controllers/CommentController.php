<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request){
        if($request->ajax()){
            $comment = new Comment();
            $comment->post_id = $request->post_id;
            $comment->user_id = Auth::user()->id;
            $comment->content = $request->content;
            $comment->save();
            return \response()->json([
                'status' => true,
                'user' => Auth::user(),
                'comment' => $comment
            ]);
        }
    }
}
