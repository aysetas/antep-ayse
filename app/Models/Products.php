<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    function getCategory(){
        return $this->hasOne('App\Models\Categories' , 'id' , 'category_id'); //hangi kategoride olduğunu bulur
    }
}
