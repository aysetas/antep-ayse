<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable =['name' ,'price' , 'photo' ,'description' , 'created_by'];

    //ilişkili olduğu alanlar
    public function users(){
        return $this->hasMany('App\Users' ,'id' ,'created_by');
    }
}
