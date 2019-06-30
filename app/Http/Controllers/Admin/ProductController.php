<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }
    public function create()
    {
        return view('admin.product.create');
    }
    public function edit()
    {
        return view('admin.product.edit');
    }
}
