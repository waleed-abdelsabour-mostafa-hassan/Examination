<?php

namespace App\Http\Controllers\admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class categoriesController extends Controller
{
    public function index()
    {
        $categories=DB::table('categories')->get();
        return view('admin.category.index',compact('categories'));
    }
    public function show($id)
    {
        $category=Category::where('id',$id)->first();
        return view('admin.category.show',compact('category'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function search(Request $request)
    {
        $search=$request->get('search');
        $categories=DB::table('categories')->where('name','like','%'.$search.'%')->get();
        return view('admin.category.resultsearch.blade.php',compact('categories'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $categories=new Category();
        $categories->name=$request->name;
        $categories->save();
        return redirect()->route('admin.category.index');
    }
    public  function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }
    public function update(Request $request ,Category $category)
    {
        $category->name=$request->name;
        $category->save();

        return redirect()->route('admin.category.index');

    }
    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
