@component('mail::message')
# Invoice Pembayaran

Terimakasih atas pembelian yang anda lakukan

Info Transaksi

<table class="table">
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->items as $item)
        <tr>
            <td scope="row">{{ $item->name }}</td>
            <td>{{ $item->pivot->quantity }}</td>
            <td>${{ $item->pivot->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

Total : ${{$order->grand_total}}

@component('mail::button', ['url' => ''])
Lihat
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
