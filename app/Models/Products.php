<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
   protected $table ='products';
    protected $fillable =['name' ,'price' , 'photo' ,'description' ,'status', 'created_by','category_id'];
    function getCategory(){
        return $this->hasOne('App\Models\Categories' , 'id' , 'category_id'); //hangi kategoride olduğunu bulur
    }
        //ilişkili olduğu alanlar
        public function users(){
            return $this->hasMany('App\Models\Users' ,'id' ,'created_by');
        }
}
