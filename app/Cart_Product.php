<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_Product extends Model
{
    protected $table = "cart_product";

    protected $fillable = ["count","product_id","cart_id"];

    public function getProduct(){
        return $this->belongsTo("App\Product","product_id");
    }
}
