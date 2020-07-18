@extends('layouts.front')

@section('content')

  <div class="product-details ptb-100 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 col-12">
                        <div class="product-details-img-content">
                            <div class="product-details-tab mr-70">
                                <div class="product-details-large tab-content">
                                    <div class="tab-pane active show fade" id="" role="">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="#">
                                                @if(!empty($product->cover_img))
                                                    <img src="{{asset('storage/'.$product->cover_img)}}" alt="">
                                                @else
                                                    <img src="/assets/img/product-details/l1.jpg" alt="">
                                                @endif
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 col-12">
                        <div class="product-details-content">
                            <h3>{{$product->name}}</h3>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star red-star"></i>
                                    <i class="pe-7s-star red-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <div class="details-price">
                                <span>Rp {{$product->price}}</span>
                            </div>
                            <span>{!! $product->description !!}</span>

                            <div class="quickview-plus-minus">

                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="{{route('cart.add', $product->id)}}">add to cart</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
