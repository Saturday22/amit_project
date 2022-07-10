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
          <label for="exampleInputEmail1">Product Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Price</label>
          <input type="number" class="form-control" id="exampleInputPassword1" name="product_price">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">product picture</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="picture">
          </div>
        <button type="submit" class="btn btn-success">Add Product</button>
      </form>
      <a href="{{route('Admin.index')}}"  class="btn btn-primary">Back to all Products</a>
</div>

@endsection
