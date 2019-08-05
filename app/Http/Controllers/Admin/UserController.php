<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.users.create');
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
            'email' => 'required|unique:users|email',
            'name' => 'required|unique:users',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric'
        ]);

        

        $user = Users::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'address' => $request->address,
            'phone' => $request->phone
        ]);

        return redirect()->route('admin.users.edit', $user->id)
            ->with('success', 'Tạo mới thành công !!');
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
        $user = Users::findOrFail($id);
        return view('admin.users.edit', compact('user'));
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
            'email' => 'required|unique:users|email',
            'name' => 'required|unique:users',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric'
        ]);

        

        $user = Users::fill([
            $user->email => $request->email,
            $user->name => $request->name,
            $user->password => bcrypt($request->password),
            $user->address => $request->address,
            $user->phone => $request->phone
        ]);
        $user->save();

        return redirect()->route('admin.users.index')
            ->with('success', 'Chỉnh sửa thành công !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = Users::findOrFail($id);
        $user->delete();
        
        
        return redirect()->route('admin.users.index')
            ->with('success', 'Xóa thành công !!');
    }
}
