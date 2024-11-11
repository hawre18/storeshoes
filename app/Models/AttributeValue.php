<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    public function attributeGroup(){
        return $this->belongsTo(AttributeGroup::class,'attributeGroup_id');
    }

}
