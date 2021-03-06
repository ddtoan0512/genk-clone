<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view', Category::class);

        $categories = Category::all();
        // dd($categories);
        if ($request->ajax()) {
            return response()->json([
                'data' => $categories
            ]);
        }

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Category::class);
        $rules = [
            'name'        => 'required',
            'description' => 'required'
        ];

        $messages = [
            'name.required'        => "Tên danh mục không được để trống",
            'description.required' => "Mô tả danh mục không được để trống"
        ];

        $validator = validator()->make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status'  => false,
                'message' => $validator->errors(),
            ]);

        }

        $category = new Category();
        $category->name = $request->input('name');
        $category->slug = \Str::slug($request->input('name'), '-');
        $category->description = $request->input('description');
        $category->save();

        return response()->json([
            'status'  => true,
            'message' => 'Thêm danh mục thành công',
            'data'    => $category
        ], 200);
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
        $this->authorize('update', Category::class);
        $category = Category::find($id);

        return response()->json([
            'category' => $category
        ]);
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
        $this->authorize('update', Category::class);
        // $category = Category::where("id", $request->id)
        //         ->update([

        //         ]);

        $category = tap(DB::table('categories')->where('id', $id))
            ->update([
                'name'        => $request->input('category_name'),
                'slug'        => \Str::slug($request->input('category_name'), '-'),
                'description' => $request->input('category_description')
            ])
            ->first();

        return response()->json([
            'status'   => true,
            'category' => $category
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Category::class);
        // dd($id);
        $category = Category::where('id', $id)->delete();
        return response()->json([
            'status' => true
        ]);
    }
}
