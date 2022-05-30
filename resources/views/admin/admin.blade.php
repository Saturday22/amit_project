@extends('layouts.app')
@section('content')
{{-- {{$products}} --}}
<div class="container">
    <a href="{{route('Admin.create')}}" class="btn btn-success">create product</a>
    <h1>Admin all products: </h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Product name</th>
            <th scope="col">Product price</th>
            <th scope="col">Product picture</th>
            <th scope="col">Control</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->product_name}}</td>
                <td>{{$product->product_price}}</td>
                <td> <img src="{{asset('upload_pic/'.$product->product_picture)}} " style="height: 500px;width:500px"> </td>
                <td>
                    <form method="POST" action="{{ route('Admin.destroy',$product->id)}}">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="delete">

                    </form>
                </td>
                <td>
                    <a href="{{route('Admin.edit',$product->id)}}" class="btn btn-warning"> Edit </a>
                </td>
            </tr>

            @endforeach

        </tbody>
      </table>
</div>

@endsection
