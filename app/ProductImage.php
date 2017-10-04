<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    // $productImage->product
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    // accessor
    public function getUrlAttribute()
    {
    	if (substr($this->image, 0, 4) === "http") {
    		return $this->image;
    	}

    	return '/images/products/' . $this->image;
    }

}
