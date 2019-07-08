<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Models\Product;

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
        
        $products = Product::whereBetween('price',[ '200000' , '700000'])->get();
        
       

            
        return view('client.index', ['products' => $products] );
    }
}
