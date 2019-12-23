@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Show All Categories </h1>
        <div class="col-md-4 pull-right">
            <form action="{{route('admin.category.search')}}" method="post">
                {{csrf_field()}}
                <div class="input-group">
                    <input type="text" name="search" class="form-control">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div>
        <div class="row" style="color: whitesmoke;width: 82%;margin-left:18%">
            <table class="table table-bordered table-responsive col-md-8" >
                <tr>
                    <th class="col-md-2">ID</th>
                    <th class="col-md-3">Category_Name</th>
                    <th class="col-md-5">Actions</th>
                </tr>
                @foreach($categories as $category)

                    <tr >
                        <th class="col-md-1"> {{$category->id}}</th>
                        <th class="col-md-2"> {{$category->name}}</th>
                        <th class="col-md-6">
                            <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-success">Edit</a>
                            <form action="{{ route('admin.category.delete', $category->id) }}" method="post" style="display: inline;" onclick="return confirm('Do You Want To Delete This Record? ')">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <button type="submit" class="btn btn-danger">Detete</button>
                            </form>
                            <a href="{{route('admin.category.show',$category->id)}}" class="btn btn-info">Show</a>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>
    </center>
@endsection