<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;
class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::all();
        // dd($sliders);
        return view('livewire.home-component', ['sliders' => $sliders])->layout('layouts.base');
    }
}
