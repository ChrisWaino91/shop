<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket;
use App\Customer;
use DB;

class CustomerController extends Controller
{
    public function store(Basket $basket, Customer $customer, Request $request)
    {
    
        $customer = new Customer; 

        $customer->forename = $request->forename;
        $customer->surname = $request->surname;
        $customer->email = $request->email;

        

    
        
        $customer->save();

        $customer_id = $customer->id;

        $current_session = session()->getId();

        
        $current_customer = DB::select("SELECT DISTINCT id FROM customers WHERE email = '$customer->email'");

        $current_customer = $current_customer[0]->id;
        
        $current_basket = DB::update("UPDATE baskets SET customer_id = '$current_customer' WHERE session_id = '$current_session'");
    
        return redirect('/basket/confirmation');

    }
}
