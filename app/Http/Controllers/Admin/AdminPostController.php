<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();
        return view('admin.post.index', compact('categories', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = \Str::slug($request->input('title'), '-');
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        $post->user_id = 1;
        $post->category_id = $request->input('category');
        $post->hot = $request->has('hot') ? 1 : 0;
        $post->thumbnail = '';
        if ($request->hasFile('thumbnail')) {
            $thumbnailName = time() . '.' . \request()->file('thumbnail')->getClientOriginalExtension();
            \request()->file('thumbnail')->move(public_path('images/upload'), $thumbnailName);

            $post->thumbnail = $thumbnailName;
        }

        $post->save();

        return \redirect('/admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $thumbnailName = $request->input('hidden_image');
        if ($request->hasFile('thumbnail')) {
            $thumbnailName = time() . '.' . \request()->file('thumbnail')->getClientOriginalExtension();
            \request()->file('thumbnail')->move(public_path('images/upload'), $thumbnailName);
        }

        Post::where('id', $id)->update([
            'title'       => $request->input('title'),
            'slug'        => \Str::slug($request->title, '-'),
            'description' => $request->input('description'),
            'content'     => $request->input('content'),
            'category_id' => $request->input('category'),
            'hot'         => $request->has('hot') ? 1 : 0,
            'thumbnail' => $thumbnailName
        ]);

        return \redirect('/admin/post')->with('success', "Cập nhật bài viết thành công");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return \redirect('/admin/post')->with('success', 'Xoá bài viết thành công!');
    }
}
