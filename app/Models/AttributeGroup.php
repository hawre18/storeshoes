<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeGroup extends Model
{
    public function attributeValue(){
        return $this->hasMany(AttributeValue::class,'attributeGroup_id');
    }
    public function categories(){
        return $this->belongsToMany(Category::class,'attributeGroup_category','attributeGroup_id','category_id');
    }
}
