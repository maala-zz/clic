<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price_special extends Model
{
    public function products()
    {
        /**
         * Accessing the parent Model (Product)
         */
    	return $this->belongsTo('App\Product');
    }
}
