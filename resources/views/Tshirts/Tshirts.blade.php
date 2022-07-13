@extends('layouts.app')
<style>
    .card {
        display: inline-block !important;
        margin: 20px;
    }
</style>
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container">
        {{-- {{$tShirts}} --}}
        <h1>All T-Shirts</h1>
        @if ($tShirts->count() > 0)
            <div class="row">
                @foreach ($tShirts as $item)
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
            <h2>No T-Shirts Found</h2>
        @endif

    </div>
@endsection
