<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function image(){
        return $this->belongsTo(Image::Class);
    }
}
