@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Add Fields Form</h1>
        <form style="color: white;width: 40%;border: 3px solid saddlebrown;border-radius: 10px" method="post" action="{{route('admin.product.store')}}" class="form-control-lg " enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="course_id">Category</label><span style="color:red">*</span>
                <select  name="category_id" class="form-control">
                    <option value=" ">No Data selected</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div><br>
            <div class="form-group">
            <label>Product_Name</label>
            <input type="text" placeholder="Add name" class="form-control" name="name" />
            </div><br>
            <div class="form-group">
                <label>Product_Price</label>
                <input type="number" placeholder="Add price" class="form-control" name="price" />
            </div><br>
            <div class="form-group">
                <label>Product_Image</label>
                <input type="file" placeholder="Add image" class="form-control" name="image" />
            </div><br>



            <button type="submit" class="btn btn-success" >Add Product</button>
        </form>
    </center>
@endsection