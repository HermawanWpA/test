<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Product extends Model
{

    protected $fillable = [
        'name', 'qty', 'price', 'total_price', 'description' 
    ];

    protected $hidden = [

    ];
      public function productDetail()
    {
        return $this->hasMany(ProductDetail::class,'products_id','id');
    }
    
}
