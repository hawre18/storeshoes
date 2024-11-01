<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function images(){
        return $this->belongsTo(Image::Class);
    }
}
