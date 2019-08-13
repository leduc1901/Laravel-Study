<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;

use Cart;

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
    public function complete($id)
    {
        $order = Order::findOrFail($id);
        
        return view('client.cart.complete', compact('order' ));
        
        
    }
    public function add(Request $request)
    {
        $product = Product::findOrFail($request->id);
        Cart::add([
            'id' => $request->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            
            'attributes' => array(
                'avatar' => $product->avatar
            )
        ]);

        return response()->json(['quantity' => Cart::getTotalQuantity()], 200);
    }
    public function update(Request $request)
    {
        Cart::update($request->id , array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
        ));

        $summedPrice = Cart::get($request->id)->getPriceSum();

        return response()->json([
            'summedPrice' => number_format($summedPrice),
            'subTotal' => number_format(Cart::getSubTotal()),
            'getTotal' => number_format(Cart::getTotal())
        ], 200);
    }
    public function destroy(Request $request)
    {
        Cart::remove($request->id);    

        return response()->json([] , 204);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);
        $attributes = $request->only([
            'name' , 'email' , 'address' , 'phone'
        ]);
        $attributes['status'] = 'wait';
        $order = Order::create($attributes);
        foreach(Cart::getContent() as $item){
            $order->orderDetails()->create([
                'product_id' => $item->id,
                'price' => $item->price,
                'quantity' => $item->quantity,
            ]);
            
        }

        Cart::clear();
        
        return redirect()->route('client.cart.complete', $order->id);
    }
}
