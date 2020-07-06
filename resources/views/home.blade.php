@extends('layouts.app')

@section('content')
<div class="container ">
    <h2>Produk</h2>
    <div class="row">
        @foreach ($allProducts as $product)
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('default-product.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{$product->name}}</h4>
                    <p class="card-text">{{$product->description}}</p>
                    <p class="card-text">Rp {{$product->price}}</p>
                </div>
                <div class="card-body">
                    <a href="{{route('cart.add', $product->id)}}"  class="btn btn-danger" role="button"> + Keranjang</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
@endsection
