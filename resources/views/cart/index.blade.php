@extends('layouts.app')

@section('content')
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
                        <td><a href="{{route('cart.destroy', $item->id)}}"><i class="fa fa-trash"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Total : Rp {{\Cart::session(auth()->id())->getTotal()}}</h3><br>
        <div class="col-4">
            <a href="#" class="btn btn-danger btn-lg" role="button">Beli</a>
        </div>

@endsection
