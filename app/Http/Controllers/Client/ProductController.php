<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use \App\Models\Product;

class ProductController 
{
    public function detail($id)
    {

        $products = \App\Models\Product::findOrFail($id);
        

        return view('client.detail' , [
            'products' => $products
        ]);
    }
    public function shop()
    {
        $products = Product::orderBy('id', 'desc')->paginate(6);
        return view('client.shop', [

            'products' => $products
        ]);
    }
}
