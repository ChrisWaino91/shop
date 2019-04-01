<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_to_products extends Model
{
    public function basket(){
        return $this->belongsTo('App\Basket');
        }
}
