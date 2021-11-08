<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
     public function index()
    {
         $categories = Product::all();
         $products = Category::with(['product']);


        return view('pages.category',[
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
