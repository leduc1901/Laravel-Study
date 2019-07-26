<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use \App\Models\Product;

class ProductController 
{
    public function detail($id)
    {
        return view('client.products.detail');
    }
    public function index()
    {
        return view('client.products.index');
    }
}
