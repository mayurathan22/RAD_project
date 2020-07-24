<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    public function users(){
        return $this->belongsTo('App\User','order');
    }

    public function products() {
        return $this->belongsToMany('App\Product','order_products');
    }
}