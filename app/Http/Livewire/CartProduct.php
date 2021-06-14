<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartProduct extends Component
{
    public function render()
    {
        return view('livewire.cart-product')->layout('layouts.base');
    }
}
