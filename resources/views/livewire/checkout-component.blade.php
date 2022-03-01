<!-- component -->
<section class="px-4 antialiased text-gray-600">
    <div class="flex flex-col justify-center h-full">
        <!--- Checkout -->
        <header class="">
            <h1 class="text-3xl font-bold text-center text-green-600">Checkout</h1>
        </header>
        <div class="w-full max-w-3xl mx-auto mt-10 bg-white border border-gray-200 rounded-sm shadow-lg">
            <form>
            <!-- Form Billing Address -->
            <div x-data="{ open: false }" class="">
            <div class="">
                <div class="flex justify-center px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Billing Address</h2>
                </div>
                <div class="space-y-5">
                    <div class="flex justify-around">
                        <label for="fname">first name<span>*</span></label>
                        <input type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
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
                        <label for="country">Country<span>*</span></label>
                        <input type="text" name="country" value="" placeholder="United States" wire:model="country">
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
                    <div class="flex justify-around fill-wife">
                        <span>Ship to a different address?</span>
                        <button @click.prevent="open = !open" class="px-4 py-2 text-white bg-gray-700 rounded shadow" >Open</button>
                    </div>
                </div>
            </div>
            <!-- End Form Billing Address -->
            <!-- Form Shipping Address -->
            <div x-show="open" x-transition.opacity>
                <div  class="my-3 border border-gray-500"></div>
                <div class="flex justify-center px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Shipping Address</h2>
                </div>
                <div class="space-y-5">
                    <div class="flex justify-around">
                        <label for="fname">first name<span>*</span></label>
                        <input  type="text" name="fname" value="" placeholder="Your name" wire:model="s_firstname">
                    </div>
                    <div class="flex justify-around">
                        <label for="lname">last name<span>*</span></label>
                        <input type="text" name="lname" value="" placeholder="Your last name" wire:model="s_lastname">
                    </div>
                    <div class="flex justify-around">
                        <label for="email">Email Addreess:</label>
                        <input type="email" name="email" value="" placeholder="Type your email" wire:model="s_email">
                    </div>
                    <div class="flex justify-around">
                        <label for="phone">Phone number<span>*</span></label>
                        <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_mobile">
                    </div>
                    <div class="flex justify-around">
                        <label for="add">Line 1:</label>
                        <input type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line1">
                    </div>
                    <div class="flex justify-around">
                        <label for="add">Line 2:</label>
                        <input type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line2">
                    </div>
                    <div class="flex justify-around">
                        <label for="country">Country<span>*</span></label>
                        <input type="text" name="country" value="" placeholder="United States" wire:model="s_country">
                    </div>
                    <div class="flex justify-around">
                        <label for="city">Province<span>*</span></label>
                        <input type="text" name="province" value="" placeholder="Province name" wire:model="s_province">
                    </div>
                    <div class="flex justify-around">
                        <label for="city">Town / City<span>*</span></label>
                        <input type="text" name="city" value="" placeholder="City name" wire:model="s_city">
                    </div>
                    <div class="flex justify-around">
                        <label for="zip-code">Postcode / ZIP:</label>
                        <input type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="s_zipcode">
                    </div>
                </div>
            </div>
            </div>
            <!--- End Form Shipping Address -->
            <div class="my-3 border border-gray-500"></div>
            <!-- Payment and Shipping Method -->
            <div class="p-5 mt-3">
                <!-- Payment Method -->
                <div class="space-y-5">
                    <h4 class="text-xl text-center">Payment Method</h4>
                    <div class=""><span class="">Check / Money order</span></div>
                    <div class=""><span class="">Credit Cart (saved)</span></div>
                    <div class="">
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-bank" value="cod" type="radio" class="">
                            <span class="font-semibold">Cash On Delivery</span>
                            <div class="">Order now pay on delivery</div>
                        </label>
                        <label class="">
                            <input name="payment-method" id="payment-method-visa" value="card" type="radio">
                            <span class="font-semibold">Debit / Credit Card</span>
                            <div class="">There are many variations of passages of Lorem Ipsum available</div>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                            <span class="font-semibold">Paypal</span>
                            <div class="">You can pay with your credit</div>
                            <div class="">card if you don't have a paypal account</div>
                        </label>
                    </div>
                    <div class="">
                        <div class="flex justify-around font-bold"><span>Grand Total</span> <span class="">$100.00</span></div>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="px-4 py-2 bg-yellow-500 rounded shadow">Place order now</button>
                    </div>
                </div>
                <!-- End Payment Method -->
                <div class="my-3 border border-gray-500"></div>
                <!-- Shipping Method -->
                <div class="">
                    <h4 class="text-xl text-center">Shipping method</h4>
                    <div class=""><span class="">Flat Rate</span></div>
                    <div class=""><span class="">Fixed $0</span></div>
                    <div class="flex justify-center mt-10">
                        <button href="#" class="px-4 py-2 bg-yellow-500 rounded shadow ">Apply</button>
                    </div>
                </div>
                <!-- End Shipping Method -->
            </div>
            <!-- End Payment Shipping Method -->
            </form>
        </div>
        <!-- End Checkout -->
    </div>
</section>

