<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartProduct extends Component
{
    public function increaseQty($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
    }

    public function decreaseQty($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message', 'item has been removed');
    }


    public function render()
    {
        return view('livewire.cart-product')->layout('layouts.base');
    }
}
