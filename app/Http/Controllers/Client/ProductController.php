<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

class ProductController 
{
    public function detail()
    {
        return view('client.detail');
    }
    public function shop()
    {
        return view('client.shop');
    }
}
