<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function saleproducts(){
    	return $this->hasMany(Sale_Product::class);
    }
}
