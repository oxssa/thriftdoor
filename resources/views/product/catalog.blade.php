@extends('layouts.front')

@section('content')

<div class="shop-page-wrapper shop-page-padding ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-product-wrapper res-xl res-xl-btn">
                            <div class="shop-bar-area">
                                <div class="shop-bar pb-60">
                                    <div class="shop-found-selector">
                                        <div class="shop-found">
                                        <p><span>{{$products->total()}}</span> Produk Ditemukan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-content tab-content">
                                    <div id="grid-sidebar1" class="tab-pane fade active show">
                                        <div class="row">
                                            @foreach ($products as $product)

                                                    @include('product.single_product')

                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{$products->appends(['query'=>request('query')])->render()}}

                    </div>
                </div>
            </div>
        </div>

@endsection
