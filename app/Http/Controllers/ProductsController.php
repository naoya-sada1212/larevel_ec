<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Cart;


class ProductsController extends Controller
{
    //
    public function index() {
        $products = Product::Paginate(6);
        return view('products.index',compact('products'));
    }

    public function mycart() {

        $mycarts = Cart::all();

        return view('products.mycart',compact('mycarts'));
    }
    public function addmycart(Request $request) {
        $user_id = Auth::id();
        $products_id = $request->products_id;
        
        $cart_add_info = Cart::firstOrCreate([
            'products_id' => $products_id,
            'user_id' => $user_id
        ]);
        if($cart_add_info->wasRecentlyCreated) {
            $message = 'カートに追加しました';
        } else {
            $message = 'カートに登録済みです';
        }

        $my_carts = Cart::where('user_id',$user_id)->get();

        return view('products.mycart', compact('my_carts','message'));
    }
}
