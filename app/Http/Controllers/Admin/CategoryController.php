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
    public function store(Request $request)
    {

        $category = Category::create([
            'name' => $request->name,
        ]);
        session()->flash('success1' , 'Tạo mới danh mục thành công');
        return redirect()->route('admin.category.index');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update($id , Request $request)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin.category.edit', $category->id)->with('success1', 'Sửa danh mục thành công');
    }
    public function delete($id)
    {
        $category = Category::findOrFail($id)->delete();
        return Redirect::to('admin/category');

    }
}
