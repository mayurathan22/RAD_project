@extends('layout')
 
@section('title', 'Products')
 
@section('content')
 
    <div class="container products">
 
        <div class="row">
 
            @foreach($data['products'] as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail" style="height:500px;">
                        <img src="{{ $product->photo }}" width="200" height="200">
                        <div class="caption"  >
                            <h4>{{ $product->name }}</h4>
                            <div style="height:70px;">
                            <p >{{ str_limit(strtolower($product->description), 50) }}</p>
                            </div>
                            <p ><strong>Price: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder" style="width:200px;"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
 
        </div><!-- End row -->
 
    </div>
 
@endsection