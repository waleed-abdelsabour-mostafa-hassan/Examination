<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cart;
use App\Product;
class cartsController extends Controller
{
    //
    public function store(Product $product){

        $cart=new Cart();
        $cart->product_id=$product->id;
        $cart->user_id=1;
        $cart->save();
        return redirect()->back();
    }
}
