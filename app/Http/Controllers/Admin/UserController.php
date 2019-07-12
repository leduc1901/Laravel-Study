<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\postCreateRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }
    public function create()
    {
        return view('admin.user.create');
    }
    
    public function edit()
    {
        return view('admin.user.edit');
    }
    
}
