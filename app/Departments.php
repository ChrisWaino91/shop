<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Departments extends Model
{

    protected $guarded = [];
    
    public function path(){
        return "/shop/departments/{$this->id}";  
    }

    public function adminPath(){
        return "/shop/admin/departments/{$this->id}";  
    }


    public function product(){
        return $this->hasMany('App\Product');
    }
}
