<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_product extends Model
{
    use HasFactory;
    protected $table ='type_products';

    public function products(){
        return $this->hasMany('App\product');
        //hasMany là thể hiện mqh và tyeproduct có mqh hệ 1(type_products) - nhiều(products) (app\product) - model 
    }
}
