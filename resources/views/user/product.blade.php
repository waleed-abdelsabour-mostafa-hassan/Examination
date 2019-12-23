@extends('master')
@section('content')
    <div class="container" style="margin-left: 14%">
        <div class="row">
            <div id="main" class="">
                <div id="">
                    <div class="col-md-4 pull-right">
                        <form action="{{route('user.search')}}" method="post">
                            {{csrf_field()}}
                            <div class="input-group">
                                <input type="text" name="search" class="form-control">
                                <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-3 col-sm-4 col-xs-5" style="margin-left: 7%">
                                <div class="product product-single" >
                                    <div class="product-thumb" >
                                        <div class="product-label">
                                            <span>New</span>
                                            <span class="sale">-20%</span>
                                        </div>
                                        <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                        <img  src="{{asset('images/'.$product->image)}}" alt="FCI" width="200px" height="250px">
                                    </div>
                                    <div class="product-body">
                                        <h3 style="color:white;" class="product-price">{{$product->price}} <del class="product-old-price">$45.00</del></h3>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o empty"></i>
                                        </div>
                                        <h2 class="product-name"><a href="#" style="color:white;">{{$product->name}}</a></h2>
                                        <div class="product-btns">
                                            <a href="{{route('cart.store',$product->id)}}" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
