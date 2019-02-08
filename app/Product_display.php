<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_display extends Model
{
    public function products()
    {
        /**
         * Accessing the parent Model (Product)
         */
    	return $this->belongsTo('App\Product');
    }
}
