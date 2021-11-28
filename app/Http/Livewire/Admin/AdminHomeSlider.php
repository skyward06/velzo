<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSlider extends Component
{
    public function render()
    {
        $slider = HomeSlider::all();
        return view('livewire.admin.admin-home-slider', ['slider' => $slider])->layout('layouts.base');
    }
}
