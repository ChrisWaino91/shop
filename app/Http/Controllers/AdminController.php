<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show (Product $product){   
        return view('admin.index', compact('product'));
    }
}
