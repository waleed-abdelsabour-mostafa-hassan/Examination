@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Add Fields Form</h1>
        <form style="color: white;width: 40%;border: 3px solid saddlebrown;border-radius: 10px"  method="post" action="{{route('admin.category.update',$category->id)}}" class="form-control-lg "  >
            {{csrf_field()}}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">Product_Name</label>
                <input type="text"  class="form-control" name="name" value="{{$category->name}}"  />
            </div><br>
            <button type="submit" class="btn btn-success" >UPdate Category</button>
        </form>
    </center>
@endsection