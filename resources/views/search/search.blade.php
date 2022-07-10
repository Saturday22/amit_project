@extends('layouts.app')
<style>
    .card {
        display: inline-block !important;
    }
</style>
@section('content')
    <div class="container">
        {{-- {{$tShirts}} --}}
        <h1>Results </h1>
        <div class="row">
            @foreach ($search as $item)
                <div class="card" style="width: 18rem; margin: 20px;">
                    <img class="card-img-top" src="{{ asset('upload_pic/' . $item->product_picture) }}" alt="Card image cap"
                        style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">Description:{{ $item->product_name }} </h5>
                        <p class="card-text">Price:{{ $item->product_price }}</p>
                        @auth
                            <a href="{{ route('addToCart', $item->id) }}" class="btn btn-success">Add to Cart</a>
                        @else
                            <div>
                                <a href="{{ route('login') }}" class="btn btn-success" style="margin-top: 20px"> Please Login To
                                    Add To Cart </a>
                            </div>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
