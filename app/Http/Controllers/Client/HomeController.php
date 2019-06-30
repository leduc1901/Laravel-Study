<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

class HomeController 
{
    public function about()
    {
        return view('client.about');
    }
    public function contact()
    {
        return view('client.contact');
    }
    public function index()
    {
        return view('client.index');
    }
}
