<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function price_special()
    {
        /**
         * Accessing child price_specials table in the code
         * optionally in case to make easier records fetching in the future
         */
        return $this->hasMany('App/Price_special');
    }

    public function price_group()
    {
        /**
         * Accessing child price_groups table in the code
         * optionally in case to make easier records fetching in the future
         */
        return $this->hasMany('App/Price_group');
    }

    public function files()
    {
        /**
         * Accessing child price_specials table in the code
         * optionally in case to make easier records fetching in the future
         */
        return $this->hasMany('App/File');
    }

    public function price_info()
    {
        return $this->hasOne('App/Price_info');
    }

    public function quantity_info()
    {
        return $this->hasOne('App/Quantity_info');
    }

    public function categories()
    {
        return $this->belongsToMany('App/Category');
    }

    public function stores()
    {
        return $this->belongsToMany('App/Store');
    }

    public function suppliers()
    {
        return $this->belongsToMany('App/Supplier');
    }

    public function tags()
    {
        return $this->belongsToMany('App/Tag');
    }

    public function brands()
    {
        return $this->belongsToMany('App/Brand');
    }

    public function medias()
    {
        return $this->hasMany('App/Media');
    }
}
