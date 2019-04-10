<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    public function baskets(){
        return $this->hasMany(Basket::class);
        }
}
