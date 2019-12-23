@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Add Fields Form</h1>
        <form style="color: white;width: 40%;border: 3px solid saddlebrown;border-radius: 10px"  method="post" action="{{route('admin.product.update',$product->id)}}" class="form-control-lg " enctype="multipart/form-data" >
            {{csrf_field()}}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="course_id">Category</label><span style="color:red">*</span>
                <select  name="category_id" class="form-control">
                    <option value=" ">No Data selected</option>
                    @foreach($categories as $category)
                        <option @if($category->id==$product->category_id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div><br>
            <div class="form-group">
                <label for="name">Product_Name</label>
                <input type="text"  class="form-control" name="name" value="{{$product->name}}"  />
            </div><br>
            <div class="form-group">
                <label for="name">Product_Price</label>
                <input type="number"  class="form-control" name="price" value="{{$product->price}}" />
            </div><br>
            <div class="form-group">
                <label for="name">Product_Image</label>
                <img src="{{asset("images/".$product->image)}}" width="50px" height="50px">
                <input type="file"  class="form-control" name="image" />
            </div><br>

            <button type="submit" class="btn btn-success" >UPdate Product</button>
        </form>
    </center>
@endsection