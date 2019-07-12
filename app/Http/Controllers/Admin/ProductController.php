<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Models\Product;
use Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id')->paginate(8);
        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        return view('admin.product.create');
    }d
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'name' => $request->name,

        ]);
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }
    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return Redirect::to('admin/products');

    }
    public function delete($id)
    {
        $product = Product::findOrFail($id)->delete();
        return Redirect::to('admin/products');

    }
}
