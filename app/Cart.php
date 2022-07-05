<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ["count","totalPrice","user_id","code"];


    public function getCartProduct(){
        return $this->hasMany("App\Cart_Product","cart_id");
    }
}
