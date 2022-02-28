<!-- component -->
<section class="px-4 mt-5 antialiased text-gray-600 bg-gray-100">
    <div class="flex flex-col justify-center h-full">
        <!-- Add New Products -->
        <div class="w-full max-w-3xl mx-auto bg-white border border-gray-200 rounded-sm shadow-lg">
            <header class="flex justify-center px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Billing Address</h2>
            </header>

            <!-- form -->
            <div class="p-5">
            <form class="space-y-5">
                <p class="flex justify-around">
                    <label for="fname">first name<span>*</span></label>
                    <input id="fname" type="text" name="fname" value="" placeholder="Your name">
                </p>
                <p class="flex justify-around">
                    <label for="lname">last name<span>*</span></label>
                    <input id="lname" type="text" name="lname" value="" placeholder="Your last name">
                </p>
                <p class="flex justify-around">
                    <label for="email">Email Addreess:</label>
                    <input id="email" type="email" name="email" value="" placeholder="Type your email">
                </p>
                <p class="flex justify-around">
                    <label for="phone">Phone number<span>*</span></label>
                    <input id="phone" type="number" name="phone" value="" placeholder="10 digits format">
                </p>
                <p class="flex justify-around">
                    <label for="add">Address:</label>
                    <input id="add" type="text" name="add" value="" placeholder="Street at apartment number">
                </p>
                <p class="flex justify-around">
                    <label for="country">Country<span>*</span></label>
                    <input id="country" type="text" name="country" value="" placeholder="United States">
                </p>
                <p class="flex justify-around">
                    <label for="zip-code">Postcode / ZIP:</label>
                    <input id="zip-code" type="number" name="zip-code" value="" placeholder="Your postal code">
                </p>
                <p class="flex justify-around">
                    <label for="city">Town / City<span>*</span></label>
                    <input id="city" type="text" name="city" value="" placeholder="City name">
                </p>
                <p class="flex justify-around fill-wife">
                    <label class="checkbox-field">
                        <input name="create-account" id="create-account" value="forever" type="checkbox">
                        <span>Create an account?</span>
                    </label>
                    <label class="checkbox-field">
                        <input name="different-add" id="different-add" value="forever" type="checkbox">
                        <span>Ship to a different address?</span>
                    </label>
                </p>
            </form>
            </div>
            <!-- End Form -->

            <!-- Payment and Shipping Method -->
            <div class="p-5 mt-10">
                <!-- Payment Method -->
                <div class="space-y-5">
                    <h4 class="text-center text-xl">Payment Method</h4>
                    <p class=""><span class="">Check / Money order</span></p>
                    <p class=""><span class="">Credit Cart (saved)</span></p>
                    <div class="">
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-bank" value="bank" type="radio" class="">
                            <span class="font-semibold">Direct Bank Transder</span>
                            <div class="">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</div>
                        </label>
                        <label class="">
                            <input name="payment-method" id="payment-method-visa" value="visa" type="radio">
                            <span class="font-semibold">visa</span>
                            <div class="">There are many variations of passages of Lorem Ipsum available</div>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                            <span class="font-semibold">Paypal</span>
                            <div class="">You can pay with your credit</div>
                            <div class="">card if you don't have a paypal account</div>
                        </label>
                    </div>
                    <p class=""><span>Grand Total</span> <span class="">$100.00</span></p>
                    <a href="" class="">Place order now</a>
                </div>
                <!-- End Payment Method -->

                <!-- Shipping Method -->
                <div class="">
                    <h4 class="text-center text-xl">Shipping method</h4>
                    <p class=""><span class="">Flat Rate</span></p>
                    <p class=""><span class="">Fixed $50.00</span></p>
                    <div class="">
                    <h4 class="">Discount Codes</h4>
                    <div class="flex justify-around my-3">
                        <label for="coupon-code">Enter Your Coupon code:</label>
                        <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">
                    </div>
                    <div class="flex justify-center mt-10">
                        <button href="#" class=" py-2 px-4 rounded shadow bg-yellow-500">Apply</button>
                    </div>
                </div>
                <!-- End Shipping Method -->
            </div>
            <!-- End Payment Shipping Method -->
        </div>

    </div>
</section>

