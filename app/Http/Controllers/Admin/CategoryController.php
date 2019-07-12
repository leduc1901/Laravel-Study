<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Models\Product;
use \App\Models\Category;

use Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('admin.category.index' , compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function edit()
    {
        return view('admin.category.edit');
    }
}
