@extends('layouts.app')
@section('content')
    <style>
        .card {
            display: inline-block !important;
            margin: 20px;
        }
    </style>

    <div class="container">
        <div style="text-align: center">
            <img src="{{ asset('homee/Logo.JPG') }} ">
        </div>
        {{-- @auth --}}
        <h2 style="margin-top: 10px">Pants</h2>
        @if ($pants->count() > 0)
            <div class="row">
                @foreach ($pants as $item)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('upload_pic/' . $item->product_picture) }}"
                            alt="Card image cap" style="height:300px;">
                        <div class="card-body">
                            <h5 class="card-title">Description:{{ $item->product_name }} </h5>
                            <p class="card-text">Price:{{ $item->product_price }}</p>
                            <a href="{{ route('pants.index') }}" class="btn btn-danger">Show all Pants</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>No Pants Found</h2>
        @endif

        <h2 style="margin-top: 30px">T-Shirts</h2>
        @if ($tShirts->count() > 0)
            <div class="row">
                @foreach ($tShirts as $item)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('upload_pic/' . $item->product_picture) }}"
                            alt="Card image cap" style="height:300px;">
                        <div class="card-body">
                            <h5 class="card-title">Description:{{ $item->product_name }} </h5>
                            <p class="card-text">Price:{{ $item->product_price }}</p>
                            <a href="{{ route('tshirt.index') }}" class="btn btn-danger"> Show all t shirts </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>No T-Shirts Found</h2>
        @endif

        <h2 style="margin-top: 30px">Shoes:</h2>
        @if ($shoes->count() > 0)
            @foreach ($shoes as $item)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('upload_pic/' . $item->product_picture) }}"
                        alt="Card image cap" style="height:300px;">
                    <div class="card-body">
                        <h5 class="card-title">Description:{{ $item->product_name }} </h5>
                        <p class="card-text">Price:{{ $item->product_price }}</p>
                        <a href="{{ route('shoes.index') }}" class="btn btn-danger"> Show all shoes </a>
                    </div>
                </div>
            @endforeach
    </div>
    @else
        <h2>No Shoes Found</h2>
    @endif
    {{-- @else
        <div>
            <a href="{{ route('login') }}" class="btn btn-success" style="margin-top: 20px"> Please Login To Show Products </a>
        </div>
    @endauth --}}

    </div>
@endsection
