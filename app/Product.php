<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    

    public function tags() {
        return $this->belongsToMany('App\Tag','product_tags');
    }

    
    public function categories() {
        return $this->belongsToMany('App\Category','product_categories');
    }

    public function orders() {
        return $this->belongsToMany('App\Order','order_products');
    }

    
}
