<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use \App\Models\Product;

class ProductController 
{
    const PER_PAGE = 6;
    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('client.products.detail', compact('product'));
    }
    public function index(Request $request)
    {
        $conditions = [];
        $start = NULL;
        $end = NULL;
        if($request->start){
            $conditions[] = ['price' , '>=' , $request->start];
            $start = $request->start;
        }
        if($request->end){
            $conditions[] = ['price' , '<=' , $request->end];
            $end = $request->end;
        }
        $products = Product::where($conditions)->latest()->paginate(self::PER_PAGE);
        return view('client.products.index', compact('products', 'start', 'end'));
    }
}
