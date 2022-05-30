@extends('layouts.app')
@section('content')
@if (session('update'))
    <div class="alert alert-warning">
        {{ session('update') }}
    </div>
@endif

<div class="container">
<h1> Edit Page </h1>
<form method="POST" action="{{route('Admin.update',$product->id)}}">
    {{ csrf_field() }}
    @method('PUT')

    <div class="form-group">
      <label for="exampleInputPassword1">Old price</label>
      <input type="number" class="form-control" id="exampleInputPassword1" value="{{$product->product_price}}" readonly>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">New price</label>
        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter new price" name="new_price">
      </div>
      <button type="submit" class="btn btn-warning">edit</button>
</form>
</div>
@endsection
