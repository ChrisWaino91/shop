<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Basket;
use App\Orders_to_products;


class BasketController extends Controller
{
    public function show(Basket $basket, Orders_to_products $orders_to_products)
    {
       
        $session = session()->getId();
        
        $products = DB::select("SELECT * from orders_to_products WHERE basket = '$session'");
        $total = 0;

        foreach ($products as $product){
            $single = $product->product_price;
            $total = $total + $single;
        }
        
        return view('basket', compact('products', 'total'));

    }


    public function store(Basket $basket, Request $request)
    {
    
        $basket = new Basket; 

        $basket->session_id = session()->getId();
        $basket->customer = Auth::user()->id;
        $basket->completed = false; 

        $basket->save();

        $product = new Orders_to_products;

        $product->basket = session()->getId();
        $product->product_id = $request->product_id;
        $product->product_title = $request->product_title;
        $product->product_price = $request->sale_price;

        $product->save();
    
        return redirect('/basket/');

    }


    public function destroy(Orders_to_products $orders_to_products){
        
        $id = $orders_to_products->id;
        Orders_to_products::find($id)->delete();

        return redirect('/basket/');

    }

}
