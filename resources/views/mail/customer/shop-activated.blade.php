@component('mail::message')
# Selamat

Tokomu sekarang sudah aktif.

@component('mail::button', ['url' => route('shops.show', $shop->id)])
Kunjungi Tokomu
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
