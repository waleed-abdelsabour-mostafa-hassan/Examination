<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use Storage;
use DB;
class productsController extends Controller
{
    public function index()
    {
        $products=DB::table('products')->get();
        return view('admin.product.index',compact('products'));
    }
    public function show($id)
    {
        $product=Product::where('id',$id)->first();
        return view('admin.product.show',compact('product'));
    }
    public function create(Product $product)
    {
        $categories=Category::all();
        return view('admin.product.create',compact('categories','product'));
    }
    public function search(Request $request)
    {
        $search=$request->get('search');
        $products=DB::table('products')->where('name','like','%'.$search.'%')
            ->orWhere('price','like','%'.$search.'%')->get();
        return view('admin.product.resultsearch',compact('products'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $file = $request->file('image');
        $destinationPath = 'images';
        $file->move($destinationPath,$file->getClientOriginalName());
        $products=new Product();
        $products->name=$request->name;
        $products->price=$request->price;
        $products->category_id=$request->category_id;
        $products->image=$file->getClientOriginalName();
        $products->save();
        return redirect()->route('admin.product.index');
    }
    public  function edit(Product $product)
    {
        $categories=Category::all();
        return view('admin.product.edit',compact('categories','product'));
    }
    public function update(Request $request ,Product $product)
    {

        $file = $request->file('image');

        //Display File Name
        $destinationPath = 'images';
        $file->move($destinationPath,$file->getClientOriginalName());
        // $product=new Product();
        $product->category_id=$request->category_id;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->image=$file->getClientOriginalName();
        $product->save();

        return redirect()->route('admin.product.index');

    }
    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
