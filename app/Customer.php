<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Basket;

class Customer extends Model
{
    public function baskets(){
        return $this->hasMany('App\Basket');
        }
}
