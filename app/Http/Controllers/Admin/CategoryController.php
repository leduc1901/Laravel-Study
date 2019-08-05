<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Get the sub categories
     * 
     * @param int $parent_id
     * @return mix
     */
    private function getSubCategories($parent_id , $ignore_id=null) // get the sub categories
    {
        $categories = Category::where('parent_id' , $parent_id)
            ->where('id', '<>' , $ignore_id)
            ->get()
            ->map(function($query) use($ignore_id){
                $query->sub = $this->getSubCategories($query->id, $ignore_id);
                return $query;
            });

        return $categories;
    }
    public function index()
    {
       
        $categories = $this->getSubCategories(0);
        return view('admin.category.index', compact('categories'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->getSubCategories(0);
        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'parent_id' => 'required|numeric|min:0',
            'name' => 'required|unique:categories'
        ]);

        $attributes = $request->only([
            'parent_id' , 'name'
        ]);

        $category = Category::create($attributes);

        return redirect()->route('admin.categories.edit', $category->id)
            ->with('succes', 'Tạo mới thành công !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = $this->getSubCategories(0, $id);
        return view('admin.category.edit' , compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'parent_id' => 'required|numeric|min:0',
            'name' => 'required|unique:categories,id,'.$id
        ]);
        $category = Category::findOrFail($id);
        $attributes = $request->only([
            'parent_id' , 'name'
        ]);

        $category = $category->fill($attributes);
        $category->save();
        return redirect()->route('admin.categories.edit', $category->id)
            ->with('success', 'Cập nhật thành công !!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        
        
        return redirect()->route('admin.category.index')
            ->with('success', 'Xóa thành công !!');
    }
}
