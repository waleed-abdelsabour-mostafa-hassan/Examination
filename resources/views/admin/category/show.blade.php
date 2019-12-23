


@extends('master')
@section('content')
    <div class="container" style="margin-left: 14%">
        <div class="row">
            <div class="col-md-8 col-sm-4 col-xs-5" style="margin-left: 7%">
                <div class="product-thumb" >
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr style="color:white;">
                            <th>The Identity Of Category Is</th>
                            <th>The Name Of Category</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="color:black;">
                            <td><b><strong>{{$category->id}}</strong></b></td>
                            <td><b><strong>{{$category->name}}</strong></b></td>
                        </tr>
                        </tbody>
                    </table>
                    <h1 style="color:white;" >The Identity Of Category Is : {{$category->id}}</h1>
                    <h3 style="color:white;" >The Name Of Category : {{$category->name}}</h3>
                </div>
            </div>
        </div>
    </div>
@stop
