@extends('layouts.app')
<style>
    .card {
        display: inline-block !important;
        margin: 20px;
    }
</style>
@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{-- {{$tShirts}} --}}
        <h1> All Pants </h1>
        <div class="row">
            @foreach ($pants as $item)
                <div class="card" style="width: 18rem;">
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
