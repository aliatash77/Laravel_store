<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    public function getCartProduct(){
        return $this->hasMany("App\Factor_Product","cart_id");
    }
}
