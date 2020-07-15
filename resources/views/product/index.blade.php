@extends('layouts.front')

@section('content')
    <div class="container">

    <h2>Produk {{ $categoryName ?? null }} </h2>

    <div class="custom-row-2">
    @foreach ($products as $product)

        @include('product.single_product')
    @endforeach

    </div>


</div>
@endsection
