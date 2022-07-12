@extends('layouts.app')
<style>
    .card {
        display: inline-block !important;
    }
</style>
@section('content')
    @if (session('success'))
        <div class="alert alert-warning">
            {{ session('success') }}
        </div>
    @endif

    <div class="container">
        {{-- {{$tShirts}} --}}
        <h1> Cart: </h1>
        <div class="row">
            {{-- $item['product_name'] --}}
            @auth
                @if ($cart)
                    @foreach ($cart as $item)
                        <div class="card" style="width: 18rem; margin: 20px;">
                            <img class="card-img-top" src="{{ asset('upload_pic/' . $item['product_picture']) }}"
                                alt="Card image cap" style="height: 300px;">
                            <div class="card-body">
                                <h5 class="card-title">Description:{{ $item['product_name'] }} </h5>
                                <p class="card-text">Price:{{ $item['product_price'] }}</p>
                                <p class="card-text">Quantity:{{ $item['quantity'] }}</p>
                                <a href="#" class="btn btn-danger">Buy now</a>
                                <a href="{{ route('remove', $item['id']) }}" class="btn btn-warning">Remove item</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h1>Cart is Empty</h1>
                @endif
            @else
                <div>
                    <a href="{{ route('login') }}" class="btn btn-success" style="margin-top: 20px"> Please Login To
                        Add To Cart </a>
                </div>
            @endauth
        </div>

    </div>
@endsection
