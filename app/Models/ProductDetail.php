<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = [
        'products_id','categories_id' 
    ];

    protected $hidden = [

    ];
      public function product()
    {
        return $this->hasMany(Product::class, 'id', 'products_id');
    }
}
