<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct()
    {
        $categories = Category::all();
        \View::share('categories', $categories);
    }
}
