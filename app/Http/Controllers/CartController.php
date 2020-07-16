<?php

namespace App\Http\Controllers;
use App\Coupon;
use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product){
        //Menambahkan product ke keranjang
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');

    }

    public function index(){
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('cart.index', compact('cartItems'));
    }
    public function destroy($itemId)
    {
        \Cart::session(auth()->id())->remove($itemId);
        return back();
    }


    public function update($rowId)
    {
        \Cart::session(auth()->id())->update($rowId, [
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            )
        ]);
        return back();
    }

    public function checkout()
    {
        return view('cart.checkout');
    }
    public function applyCoupon()
    {
        $couponCode = request('coupon_code');
        $couponData = Coupon::where('code', $couponCode)->first();
        if(!$couponData) {
            return back()->withMessage('Maaf, Kupon tidak dapat ditemukan');
        }else{
            // add single condition on a cart bases
       //coupon logic
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => $couponData->name,
            'type' => $couponData->type,
            'target' => 'total',
            'value' => $couponData->value,
        ));

        Cart::session(auth()->id())->condition($condition); // for a speicifc user's cart


        return back()->withMessage('Kupon berhasil diterapkan');

        }
    }
}