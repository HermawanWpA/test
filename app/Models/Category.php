<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     
    protected $fillable = [
        'name','photo','slug' 
    ];

    protected $hidden = [

    ];

        public function product_detail()
    {
        return $this->belongsTo(ProductDetail::class,'products_id','id');
    }
}
