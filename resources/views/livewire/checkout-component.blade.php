<!-- component -->
<section class="px-4 antialiased text-gray-600">
    <div class="flex flex-col justify-center h-full">
        <!--- Checkout -->
        <header class="">
            <h1 class="text-3xl font-bold text-center text-green-600">Checkout</h1>
        </header>
        <div class="w-full max-w-3xl mx-auto mt-10 bg-white border border-gray-200 rounded-sm shadow-lg">
            <form wire:submit.prevent="placeOrder">
                <!-- Form Billing Address -->
                <div class="">
                    <div class="flex justify-center px-5 py-4 border-b border-gray-100">
                        <h2 class="font-semibold text-gray-800">Billing Address</h2>
                    </div>
                    <div class="space-y-5">
                        <div class="flex justify-around">
                            <label for="fname">first name<span>*</span></label>
                            <input type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
                            {{-- @error('firstname') <span class="my-2">{{ $message }}</span> @enderror --}}
                        </div>
                        <div class="flex justify-around">
                            <label for="lname">last name<span>*</span></label>
                            <input type="text" name="lname" value="" placeholder="Your last name" wire:model="lastname">
                        </div>
                        <div class="flex justify-around">
                            <label for="email">Email Addreess:</label>
                            <input  type="email" name="email" value="" placeholder="Type your email" wire:model="email">
                        </div>
                        <div class="flex justify-around">
                            <label for="phone">Phone number<span>*</span></label>
                            <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="mobile">
                        </div>
                        <div class="flex justify-around">
                            <label for="add">Line 1:</label>
                            <input type="text" name="add" value="" placeholder="Street at apartment number" wire:model="line1">
                        </div>
                        <div class="flex justify-around">
                            <label for="add">Line 2:</label>
                            <input type="text" name="add" value="" placeholder="Street at apartment number" wire:model="line2">
                        </div>
                        <div class="flex justify-around">
                            <label for="city">Province<span>*</span></label>
                            <input type="text" name="province" value="" placeholder="Province name" wire:model="province">
                        </div>
                        <div class="flex justify-around">
                            <label for="city">Town / City<span>*</span></label>
                            <input type="text" name="city" value="" placeholder="City name" wire:model="city">
                        </div>
                        <div class="flex justify-around" >
                            <label for="zip-code">Postcode / ZIP:</label>
                            <input type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="zipcode">
                        </div>
                    </div>
                </div>
                <!-- End Form Billing Address -->

                <div class="my-3 border border-gray-500"></div>
                <!-- Payment Method -->
                <div class="space-y-5">
                    <h4 class="text-xl text-center">Payment Method</h4>
                    {{-- <div class=""><span class="">Check / Money order</span></div>
                    <div class=""><span class="">Credit Cart (saved)</span></div> --}}
                    <div class="">
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-bank" value="cod" type="radio" class="" wire:model="paymentmode">
                            <span class="font-semibold">Cash On Delivery</span>
                            <div class="">Order now pay on delivery</div>
                        </label>
                        <label class="">
                            <input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
                            <span class="font-semibold">Debit / Credit Card</span>
                            <div class="">There are many variations of passages of Lorem Ipsum available</div>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="paymentmode">
                            <span class="font-semibold">Paypal</span>
                            <div class="">You can pay with your credit</div>
                            <div class="">card if you don't have a paypal account</div>
                        </label>
                    </div>
                    @if (Session::has('checkout'))
                    <div class="">
                        <div class="flex justify-around font-bold"><span>Grand Total</span> <span class="">${{ Session::get('checkout')['total'] }}</span></div>
                    </div>
                    @endif
                    <div class="flex justify-center">
                        <button type="submit" class="px-4 py-2 bg-yellow-500 rounded shadow">Place order now</button>
                    </div>
                </div>
                <!-- End Payment Method -->
            </form>
        </div>
        <!-- End Checkout -->
    </div>
</section>

