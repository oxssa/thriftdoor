<?php

namespace App\Observers;

use App\Shop;
use App\Mail\ShopActivated;
use Illuminate\Support\Facades\Mail;

class ShopObserver
{
    /**
     * Handle the shop "created" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function created(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "updated" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function updated(Shop $shop)
    {

        //cek apakah kolom toko aktif sudah berubah dari tidak aktif menjadi aktif

        if($shop->getOriginal('is_active') == false && $shop->is_active == true){
            //kirim email ke customer
            Mail::to($shop->owner)->send(new ShopActivated($shop));
            //ubah role dari customer ke seller
            $shop->owner->setRole('seller');
        }else{
            // dd("tokomu tidak aktif");
        }

    }

    /**
     * Handle the shop "deleted" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function deleted(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "restored" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function restored(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "force deleted" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function forceDeleted(Shop $shop)
    {
        //
    }
}
