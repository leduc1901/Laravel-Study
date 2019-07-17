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
        return view('client.about');
    }
    public function contact()
    {
        return view('client.contact');
    }
    public function index()
    {
        //session()->put('name2', 'Zzz');
        //session()->get('name2');
    
        print_r("good morning");

        $products = Product::get();
        return view('client.index', compact('products') );
    }
}
