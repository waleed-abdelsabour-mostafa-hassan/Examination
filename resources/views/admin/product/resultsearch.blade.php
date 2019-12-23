@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Show All Products </h1>
        <div class="row" style="color: whitesmoke;width: 82%;margin-left: 15%">
            <table class="table table-bordered table-responsive " >
                <tr>
                    <th class="col-md-3">Product_Name</th>
                    <th class="col-md-2">Product_price</th>
                    <th class="col-md-3">Product_Image</th>
                </tr>
                @foreach($products as $product)

                    <tr >
                        <th class="col-md-3"> {{$product->name}}</th>
                        <th class="col-xs-2">{{$product->price}}</th>
                        <th class="col-xs-3"><img src="{{asset("images/".$product->image)}}" width="300px" height="150px"></th>
                    </tr>
                @endforeach
            </table>
        </div>
    </center>
@endsection