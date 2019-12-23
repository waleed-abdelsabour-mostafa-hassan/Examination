@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Show All Categories </h1>
        <div class="row" style="color: whitesmoke;width: 82%;margin-left: 15%">
            <table class="table table-bordered table-responsive " >
                <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-3">Product_Name</th>
                </tr>
                @foreach($categories as $category)

                    <tr >
                        <th class="col-md-1"> {{$category->id}}</th>
                        <th class="col-md-3"> {{$category->name}}</th>
                    </tr>
                @endforeach
            </table>
        </div>
    </center>
@endsection