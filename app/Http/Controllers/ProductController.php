<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Departments;

class ProductController extends Controller 
{
    
    public function index(Product $product, Departments $departments){

        $departments = $departments->all();

        return view('admin.edit_product', compact('product', 'departments'));

    }


    public function show(Product $product){
        return view('product', compact('product'));
    }


    public function create(Product $product, Departments $departments){

        $departments = $departments->all();
        
        return view('admin.create_product', compact('product', 'departments'));

    }

    public function store(Request $request){

        $product = new Product;
        
        $path = $request->file('product_image')->store('public/products');
        
        // Try to turn this into a compact request when refactoring
        $product->title = $request->product_title;
        $product->description = $request->product_description;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->departments_id = $request->product_department;
        $product->image_url = $path;
        
        $product->save();
        
        return redirect('admin/products');

    }

    public function edit(Product $product){

        $products = $product->all();

        return view ('admin.products', compact('products'));
    }

    public function update(Product $product, Request $request){

        // Refactor this
        $product->title = $request->product_title;
        $product->description = $request->product_description;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->departments_id = $request->product_department;

        $product->save();

        return redirect ('admin/products');

    }


    public function destroy (Product $product){

        $id = $product->id;

        Product::find($id)->delete();
        
        return redirect ('admin/products');
         
    }

}
