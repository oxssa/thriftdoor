@extends('layouts.front')

@section('content')
<br><br>
<div class="container">
    <h2>Checkout</h2>
<br><br>
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

<br><br>
    <h2>Pembayaran</h2>

 <div class="form-group">
    <label for="">
        <select id="" name="payment_method">
            <option value="cash_on_delivery">COD</option>
            <option value="paypal">Paypal</option>
        </select>
    </label>
 </div>
    {{-- <div class="form-check">
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

    </div> --}}
<br><br>
    <h2>Pengiriman</h2>
<div class="form-group">
    <label for="">
        <select id="" name="shipping_method">
            <option value="gosend">Gosend</option>
            <option value="paypal">JNE</option>
        </select>
    </label>
</div>

    {{-- <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="shipping_method" id="" value="gosend">
            Gosend

        </label>

    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="shipping_method" id="" value="jne">
            JNE

        </label>

    </div> --}}
<br><br>
    <button type="submit" class="btn btn-dark">Order</button>


</form>
</div>
<br><br>
@endsection
