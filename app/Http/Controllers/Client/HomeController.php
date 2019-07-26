<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Models\Product;
use Session;

class HomeController 
{
    public function about()
    {
        return view('client.home.about');
    }
    public function contact()
    {
        return view('client.home.contact');
    }
    public function index()
    {
        
        return view('client.home.index' );
    }
}
