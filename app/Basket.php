<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Controller;
use App\Customer;

class Basket extends Model
{
    public function orders_to_products(){
        return $this->hasMany('App\Orders_to_products');
        }

    public function customer(){
        return $this->belongsTo(Customer::class);
        }
}
