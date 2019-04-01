<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Controller;

class Basket extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
        }

    public function orders_to_products(){
        return $this->hasMany('App\Orders_to_products');
        }
}
