<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

class CartController 
{
    public function cart()
    {
        return view('client.cart');
    }
    public function checkout()
    {
        return view('client.checkout');
    }
    public function complete()
    {
        return view('client.complete');
    }
}
