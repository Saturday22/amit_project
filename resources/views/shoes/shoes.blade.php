@extends('layouts.app')
<style>
    .card {
        display: inline-block !important;
    }
</style>
@section('content')
    <div class="container">
        {{-- {{$tShirts}} --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h1>All Shoes: </h1>
        @if ($shoes->count() > 0)
            <div class="row">
                @foreach ($shoes as $item)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('upload_pic/' . $item->product_picture) }}"
                            alt="Card image cap" style="height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title">Description:{{ $item->product_name }} </h5>
                            <p class="card-text">Price:{{ $item->product_price }}</p>
                            @auth
                                <a href="{{ route('addToCart', $item->id) }}" class="btn btn-success">Add to Cart</a>
                            @else
                                <div>
                                    <a href="{{ route('login') }}" class="btn btn-success" style="margin-top: 20px"> Please
                                        Login To
                                        Add To Cart </a>
                                </div>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>No Shoes Found</h2>
        @endif

    </div>
@endsection
