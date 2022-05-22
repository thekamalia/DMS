<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index()
    {
        $products = Product::all(); //Product::latest()->paginate(5);
        return view('dashboardds.products.show',compact('products'));
    }
}
