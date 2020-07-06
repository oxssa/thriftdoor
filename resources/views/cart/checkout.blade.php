@extends('layouts.app')

@section('content')
    <h2>Checkout</h2>

    <h3>Pengiriman</h3>


<form action="{{route('orders.store')}}" method="post">
    @csrf


    <div class="form-group">
        <label for="">Nama Lengkap</label>
        <input type="text" name="shipping_fullname" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Telp</label>
        <input type="text" name="shipping_phone" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Provinsi</label>
        <input type="text" name="shipping_state" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Kabupaten/Kota</label>
        <input type="text" name="shipping_city" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" name="shipping_address" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Kode Pos</label>
        <input type="number" name="shipping_zipcode" id="" class="form-control">
    </div>


    <h2>Pembayaran</h2>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
            COD

        </label>

    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
            Paypal

        </label>

    </div>


    <button type="submit" class="btn btn-danger mt-4 btn-lg">Order</button>


</form>

@endsection
