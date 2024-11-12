<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class,'attributeValue_product','product_id','attributeValue_id');
    }

    public function images()
    {
        return $this->belongsToMany(Image::class,'image_product','product_id','image_id');
    }
}
