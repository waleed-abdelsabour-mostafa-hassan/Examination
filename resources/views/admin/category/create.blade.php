@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Add Fields Form</h1>
        <form style="color: white;width: 40%;border: 3px solid saddlebrown;border-radius: 10px" method="post" action="store" class="form-control-lg ">
            {{csrf_field()}}
            <div class="form-group">
                <label>Product_Name</label>
                <input type="text" placeholder="Add name" class="form-control" name="name" />
            </div><br>
            <button type="submit" class="btn btn-success" >Add Category</button>
        </form>
    </center>
@endsection