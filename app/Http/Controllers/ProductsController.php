<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    //
    public function index() {
        $products = Product::Paginate(6);
        return view('products.index',compact('products'));
    }

    public function show($id) {

        $products = Product::findorFail($id);
        return view('products.show', compact('products'));
    }
}
