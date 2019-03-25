<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function subsidiary(){
    	return $this->belongsTo(Subsidiary::class);
    }
    public function client(){
    	return $this->belongsTo(Client::class);
    }
    public function saleproducts(){
    	return $this->hasMany(Sale_Product::class);
    }
}
