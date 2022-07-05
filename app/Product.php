<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'name','price','offer','image','description','category_id','brand_id','special','instock','sponser'
    ];
}
