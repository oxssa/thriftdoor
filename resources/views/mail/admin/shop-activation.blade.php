@component('mail::message')
# Permintaan aktivasi toko

Tolong aktivasi toko. Berikut ini detail toko.

Nama Toko : {{$shop->name}}
Nama Pemilik : {{$shop->owner->name}}
@component('mail::button', ['url' => url('/admin/shops')])
Kelola Toko
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
