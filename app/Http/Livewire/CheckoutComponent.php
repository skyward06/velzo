<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckoutComponent extends Component
{
    // public $ship_to_different;
    // Billing Address
    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $line1;
    public $line2;
    public $country;
    public $city;
    public $zipcode;
    public $province;

    // Shipping Address
    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_mobile;
    public $s_line1;
    public $s_line2;
    public $s_country;
    public $s_province;
    public $s_city;
    public $s_zipcode;

    public function render()
    {
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
