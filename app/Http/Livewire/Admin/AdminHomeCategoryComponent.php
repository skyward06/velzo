<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AdminHomeCategoryComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        // dd($categories);
        return view('livewire.admin.admin-home-category-component', ['categories' => $categories])->layout('layouts.base');
    }
}
