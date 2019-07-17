<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Models\Product;
use \App\Models\Category;

use Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $category = Category::find(1);

        $products = Product::orderBy('id')->paginate(8);
        return view('admin.product.index', compact('products', 'categories'));
    }
    public function create()
    {
        $categories = Category::get();
        $product = Product::get();
        return view('admin.product.create', compact('product', 'categories'));
    }
    public function store(Request $request)
    {
        $categories = Category::get();

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'name' => $request->name,
            'category_id' => $request->category_id
        ]);

        session()->flash('success' , 'Tạo mới sản phẩm thành công');
        return redirect()->route('admin.product.edit', $product->id);
    }
    public function edit($id)
    {
        $categories = Category::get();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product', 'categories'));
    }
    public function update($id, Request $request)
    {
        $categories = Category::find($id);
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('admin.products.edit', $product->id)->with('success', 'Sửa sản phẩm thành công');

    }
    public function delete($id)
    {
        $product = Product::findOrFail($id)->delete();
        return Redirect::to('admin/products');

    }
}
