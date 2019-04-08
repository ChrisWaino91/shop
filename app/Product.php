<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Departments;

class Product extends Model
{
    protected $guarded = [];


    public function adminPath(){
        $path = '/admin/products/' . $this->id;
        return $path;
    }


    public function path(){
        $path = '/product/' . $this->id;
        return $path;
    }


    public function imagePath(){
        
        $path = $this->image_url;
        return $path;

    }

    public function department(){
        return $this->belongsTo('App\Departments', 'departments_id');
        }

}
