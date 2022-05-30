@extends('layouts.app')
@section('content')
@if (session('add_product'))
    <div class="alert alert-success">
        {{ session('add_product') }}
    </div>
@endif

<div class="container">
    <h1> Create a Product </h1>
    <form method="POST" action="{{route('Admin.store')}}"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputEmail1">product name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">price</label>
          <input type="number" class="form-control" id="exampleInputPassword1" name="product_price">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">product picture</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="picture">
          </div>
        <button type="submit" class="btn btn-success">Add product</button>
      </form>
      <a href="{{route('Admin.index')}}"  class="btn btn-primary">back to all products</a>
</div>

@endsection
