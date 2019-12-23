<?php

namespace App\Http\Controllers\user;

use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class productsController extends Controller
{
    //
    public function index()
    {
        $products=Product::get();
        $carts=Cart::where('user_id',1)->get();
        return view('user.product',compact('products','carts'));
    }
    public function search(Request $request)
    {
        $search=$request->get('search');
        $products=DB::table('products')->where('name','like','%'.$search.'%')->get();
        $carts=Cart::where('user_id',1)->get();
        return view('user.resultSearch',compact('products','carts'));
    }
}
