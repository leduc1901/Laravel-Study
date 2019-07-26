<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

class CartController 
{
    public function index()
    {
        return view('client.cart.index');
    }
    public function checkout()
    {
        return view('client.cart.checkout');
    }
    public function complete()
    {
        return view('client.cart.complete');
    }
}
