<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $uploads='/storage/images/';
    public function products()
    {
        return $this->belongsToMany(Product::class,'image_product','image_id','product_id');
    }


}
