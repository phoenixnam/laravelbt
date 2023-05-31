<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function type_products()
    {
        return $this -> belongTo('App\type_product');
    }

    public function bill_details ()
    {
        return $this -> hasMany('App\bill_detail');
    }
    public function comments ()
    {
        return $this -> hasMany('App\comment');
         //hasMany là thể hiện mqh và tyeproduct có mqh hệ 1(products) - nhiều(comments)
    }
}
