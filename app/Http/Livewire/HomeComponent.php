<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\Product;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status', 1)->get();
        $latestProducts = Product::orderBy('created_at','ASC')->get();
        return view('livewire.home-component', [
            'sliders' => $sliders,
            'latestProducts' => $latestProducts,
        ])->layout('layouts.base');
    }
}
