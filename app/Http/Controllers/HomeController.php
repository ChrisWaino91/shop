<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Departments;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Product $product, Departments $departments)
    {
        $products = $product->all();
        return view('index', compact('products'));
    }


   


    public function showSingle(Product $product, $id)
    {

        $product = Product::Find($id);
        return view('product', compact('product'));
    }
}
