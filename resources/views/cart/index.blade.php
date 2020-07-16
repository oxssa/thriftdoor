@extends('layouts.front')

@section('content')
    {{-- <div class="container-fluid text-center">
        <h2>Keranjang</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jumlah</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td scope="row">{{$item->name}}</td>
                            <td>
                                $ {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
                            </td>
                            <td><form action="{{route('cart.update', $item->id)}}">
                                <input type="number" name="quantity" id="" value="{{$item->quantity}}">
                                <input type="submit" value="simpan">
                            </form></td>
                            <td><a href="{{route('cart.destroy', $item->id)}}">hapus</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h3>Total : Rp {{\Cart::session(auth()->id())->getTotal()}}</h3><br>
            <div class="col-4">
                <a href="{{route('cart.checkout')}}" class="btn btn-danger btn-lg" role="button">Beli</a>
            </div>
    </div> --}}

    <div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="cart-heading">Keranjang</h1>
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>hapus</th>
                                            <th>gambar</th>
                                            <th>Produk</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $item)
                                        <tr>
                                            <td class="product-remove"><a href="{{route('cart.destroy', $item->id)}}"><i class="pe-7s-close"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{$item->name}}</a></td>
                                            <td class="product-price-cart"><span class="amount">Rp {{$item->price}}</span></td>
                                            <td class="product-quantity">
                                                <form action="{{route('cart.update', $item->id)}}">
                                                    <input type="number" name="quantity" id="" value="{{$item->quantity}}">
                                                    <input class="button" type="submit" value="save">
                                                </form>
                                            </td>
                                            <td class="product-subtotal">Rp {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <form action="{{route('cart.coupon')}}" method="get">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Kode kupon" type="text">
                                                <input class="button" name="apply_coupon" value="Terapkan" type="submit">
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Total Transaksi</h2>
                                        <ul>
                                            {{-- <li>Subtotal<span>100.00</span></li> --}}
                                            <li>Total<span>Rp {{\Cart::session(auth()->id())->getTotal()}}</span></li>
                                        </ul>
                                        <a href="{{route('cart.checkout')}}">Checkout</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
