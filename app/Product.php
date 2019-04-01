<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Departments;

class Product extends Model
{
    protected $guarded = [];


    public function adminPath(){
        $path = '/shop/admin/products/' . $this->id;
        return $path;
    }


    public function path(){
        $path = '/shop/product/' . $this->id;
        return $path;
    }


    public function imagePath(){
        
        $path = 'storage' . substr($this->image_url, 6);
        return $path;

    }

    public function department(){
        return $this->belongsTo('App\Departments', 'departments_id');
        }

}
