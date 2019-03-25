<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale_Product extends Model
{
    public function sale(){
    	return $this->belongsTo(Sale::class);
    }
    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
