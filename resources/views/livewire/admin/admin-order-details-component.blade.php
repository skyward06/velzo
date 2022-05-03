{{-- @dump($order->orderItems); --}}
<div class="p-3">
    <div class="flex flex-col">
        <h1>
            Ordered Items
        </h1>

        <div class="flex flex-col divide-y divide-gray-100">
            <h1 class="text-lg">Products Name</h1>
            @foreach ($order->orderItems as $orderItem)
            <div class="flex items-center justify-around">
                <img src="{{ asset('assets/images/products') }}/{{ $orderItem->product->image }}" alt="{{ $orderItem->product->name }}" class="object-contain checkoutproduct__image" style="width: 100px; height: 100px;" />
                <div class="font-medium text-gray-800">{{ $orderItem->product->name }}</div>
                        <div class="font-medium text-gray-800">{{ $orderItem->price }}</div>
                <div class="font-medium text-gray-800">x</div>
                <div class="font-medium text-gray-800">{{ $orderItem->quantity }}</div>
                <div class="font-medium text-gray-800">$ {{ $orderItem->price * $orderItem->quantity }}</div>
            </div>

            <h1 class="text-lg">Order Summary</h1>
            <div class="">
                <div class="font-medium text-gray-800">Subtotal: ${{ $order->subtotal }}</div>
                <div class="font-medium text-gray-800">Tax: {{ $order->tax }}</div>
                <div class="font-medium text-gray-800">Total: ${{  $order->total  }}</div>
            </div>
            @endforeach
    </div>

    <div class="my-6">
        <h1>
            Billing Details
        </h1>
    </div>

    <div>
        <h1>
            Transaction
        </h1>
    </div>

</div>

