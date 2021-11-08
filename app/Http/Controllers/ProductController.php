<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductDetail;

class ProductController extends Controller
{
    public function index()
    {
         $categories = Category::Paginate(10);
         $productdetails = ProductDetail::with(['product'])->Paginate(10);

         $items = Product::with(['productDetail'])->Paginate(10);


        return view('product', [
            'categories' => $categories,
            'items' => $items,
            'productdetails' => $productdetails
        ]);
    }


}