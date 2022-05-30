@extends('layouts.app')
@section('content')
<div class="container">
    <img src="{{asset('homee/1.JPG')}} " >
    <h2 style="margin-top: 10px">Pants:</h2>
    <div class="row">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('homee/2.jpeg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">price:1$</p>
          <a href="" class="btn btn-danger">Buy now</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('homee/3.WEBP')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">price:1$</p>
          <a href="#" class="btn btn-danger">Buy now</a>
        </div>
      </div>
    </div>
    <h2 style="margin-top: 30px">T-Shirt:</h2>
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('homee/5.jpeg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Price:1$</h5>
              <a href="#" class="btn btn-danger"> Buy Now </a>
            </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('homee/6.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Price:1$</h5>
                  <a href="#" class="btn btn-danger">Buy now </a>
                 </div>
              </div>
              <h2 style="margin-top: 30px">Shoes</h2>
              <div class="row">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('homee/7.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Price:1$</h5>
                      <a href="#" class="btn btn-danger"> Buy Now </a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('homee/8.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Price:1$</h5>
                      <a href="#" class="btn btn-danger"> Buy Now </a>
                    </div>
                  </div>
              </div>
          </div>

    </div>

</div>


@endsection
