@extends('layouts.front')

@section('content')

    <div class="pl-200 pr-200 overflow clearfix">
        <div class="categori-menu-slider-wrapper clearfix">
            <div class="categories-menu">
                <div class="category-heading">
                    <h3> Semua Departmen <i class="pe-7s-angle-down"></i></h3>
                </div>
                <div class="category-menu-list">
                    <ul>
                        {{-- Navigasi --}}
                        @foreach($categories as $category)

                            <li>
                            <a href="{{route('products.index', ['category_id'=> $category->id])}}">{{$category->name}}<i class="pe-7s-angle-right"></i></a>

                                @php
                                    $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                                @endphp
                                @if($children->isNotEmpty())

                                    <div class="category-menu-dropdown">
                                        {{-- Dropdown Navigasi --}}

                                        @foreach ($children as $child)
                                        <div class="category-dropdown-style category-common4 mb-40">
                                            <h4 class="categories-subtitle">
                                                <a href="{{route('products.index', ['category_id'=> $category->id])}}">{{$child->name}}</a>
                                            </h4>
                                            @php
                                                $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                            @endphp
                                            @if($grandChild->isNotEmpty())
                                            <ul>
                                                 @foreach ($grandChild as $c)
                                                <li><a href="{{route('products.index', ['category_id' => $c->id])}}">{{$c->name}}</a></li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </div>

                                        @endforeach
                                    </div>

                                @endif

                            </li>

                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="menu-slider-wrapper">
                <div class="menu-style-3 menu-hover text-center">

                </div>
                <div class="slider-area">
                    <div class="slider-active owl-carousel">
                        <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(assets/img/slider/afif.jpg)">
                            <div class="slider-animation slider-content-style-3 fadeinup-animated">
                                <h2 class="animated">Platform Ecommerce <br>Secondhand</h2>
                                <h4 class="animated">Memberikan kemudahan dalam menjual barang bekas </h4>
                                <a class="electro-slider-btn btn-hover" href="{{ route('shops.create') }}">mulai</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="electronic-banner-area">
        <div class="custom-row-2">
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="{{ asset('assets/img/banner/alienware.jpg')}}" alt="" width="490" height="270">
                    <div class="electro-banner-style electro-banner-position">
                        <h1 style="color:aliceblue;">>Live 4K! </h1>
                        <h2 style="color:aliceblue;">up to 20% off</h2>
                        <h4 style="color:aliceblue;">Samsung Exclusives</h4>
                        <a style="color:aliceblue;" href="#">Beli Sekarang→</a>
                    </div>
                </div>
            </div>
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                     <img src="{{ asset('assets/img/banner/snap.jpg')}}" alt="" width="490" height="270">
                    <div class="electro-banner-style electro-banner-position">
                        <h1 style="color:aliceblue;">>Sneakers </h1>
                        <h2 style="color:aliceblue;">up to 30% off</h2>
                        <h4 style="color:aliceblue;">Nike Exclusives</h4>
                        <a style="color:aliceblue;" href="#">Beli Sekarang→</a>
                    </div>
                </div>
            </div>
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                   <img src="{{ asset('assets/img/banner/interior.jpg')}}" alt="" width="490" height="270">
                    <div class="electro-banner-style electro-banner-position">
                        <h1 style="color:aliceblue;">>Furniture </h1>
                        <h2 style="color:aliceblue;">up to 25% off</h2>
                        <h4 style="color:aliceblue;">IKEA Exclusives</h4>
                        <a style="color:aliceblue;" href="#">Beli Sekarang→</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
        <div class="container-fluid">
                <div class="section-title-4 text-center mb-40">
                    <h2>Produk Pilihan</h2>
                </div>
                <div class="top-product-style">

                    <div>
                        <div id="electro1" >
                            <div class="custom-row-2">

                                @foreach($allProducts as $product)
                                    @include('product.single_product')
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
