<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $uploads='/storage/images/';
    public function getPathAttribute($photo){
        return $this->uploads . $photo;
    }

}
