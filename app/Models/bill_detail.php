<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    use HasFactory;
    protected $table ='bill_detail';
    public function products(){
        return $this ->hasMany("App\Product");
    }
}

