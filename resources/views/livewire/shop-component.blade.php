<section class="bg-white flex">
    <nav class="flex flex-col w-64 bg-gray-200 p-3 text-sm">
        <div class="text-black font-bold text-sm" href="#">Department</div>
            <div class="p-2">
                <span class="font-bold">Computers</span>
                <ul class="p-2">
                    <li><a href="#">Computer Accessories & Peripherals</a></li>
                    <li><a href="#">Computer Components</a></li>
                    <li><a href="#">Computer & Tablets</a></li>
                    <li><a href="#">Data Storage</a></li>
                    <li><a href="#">Laptop Accessories</a></li>
                    <li><a href="#">Monitors</a></li>
                    <li><a href="#">Networking Products</a></li>
                    <li><a href="#">Power Strips & Surge</a></li>
                    <li><a href="#">Protectors</a></li>
                    <li><a href="#">Printers</a></li>
                    <li><a href="#">Scanners</a></li>
                    <li><a href="#">Servers</a></li>
                    <li><a href="#">Tablet Accessories</a></li>
                    <li><a href="#">Tablet Replacement Parts</a></li>
                    <li><a href="#">Warranties & Services</a></li>
                </ul>
            </div>

        <div class="text-black font-bold text-sm">Climate Pledge Friendly</div>
            <ul class="p-2">
                <li><input type="checkbox" class="rounded">Climate Pledge Friendly</li>
            </ul>

        <div class="text-black font-bold text-sm">Velzon Certified</div>
            <ul class="p-2">
                <li><input type="checkbox" class="rounded">Auto Replenishment</li>
                <li><input type="checkbox" class="rounded">Works with Alexa</li>
            </ul>

        <div class="text-black font-bold text-sm">From Our Brands</div>
            <ul class="p-2">
                <li><input type="checkbox" class="rounded">Our Brands</li>
            </ul>

        <div class="text-black font-bold text-sm">Featured Brands</div>
            <ul class="p-2">
                <li><input type="checkbox" class="rounded">Roku</li>
                <li><input type="checkbox" class="rounded">HP</li>
                <li><input type="checkbox" class="rounded">Samsung</li>
                <li><input type="checkbox" class="rounded">Seagate</li>
                <li><input type="checkbox" class="rounded">Logitech</li>
                <li><input type="checkbox" class="rounded">Addatam</li>
                <li><input type="checkbox" class="rounded">SanDisk</li>
            </ul>

        <div class="text-black font-bold text-sm">Packaging Option</div>
            <ul class="p-2">
                <li><input type="checkbox" class="rounded">Frustration-Free Packaging</li>
            </ul>

        <div class="text-black font-bold text-sm">Avg. Customer Review</div>
            <ul class="p-2">
                <li>⭐⭐⭐⭐☆ & Up</li>
                <li>⭐⭐⭐☆☆ & Up</li>
                <li>⭐⭐☆☆☆ & Up</li>
                <li>⭐☆☆☆☆ & Up</li>
            </ul>

        <div class="text-black font-bold text-sm">New & Upcoming</div>
            <ul class="p-2">
                <li><a href="#">New Arrivals</a></li>
                <li><a href="#">Coming Soon</a></li>
            </ul>

        <div class="text-black font-bold text-sm">Certifications</div>
            <ul class="p-2">
                <li><input type="checkbox" class="rounded">Energy Star</li>
            </ul>

        <div class="text-black font-bold text-sm">Velon Global Store</div>
            <ul class="p-2">
                <li><input type="checkbox" class="rounded">Velzon Global Store</li>
            </ul>

        <div class="text-black font-bold text-sm">Condition</div>
            <ul class="p-2">
                <li><a href="#">New</a></li>
                <li><a href="#">Used</a></li>
                <li><a href="#">Renewed</a></li>
            </ul>

        <div class="text-black font-bold text-sm">Price</div>
            <ul class="p-2">
                <li><a href="#">Under $25</a></li>
                <li><a href="#">$25 to $100</a></li>
                <li><a href="#">$100 to $200</a></li>
                <li><a href="#">$200 to $Above</a></li>
            </ul>

        <div class="text-black font-bold text-sm">Deals</div>
            <ul class="p-2">
                <li><input type="checkbox" class="rounded">Today's Deals</li>
            </ul>

        <div class="text-black font-bold text-sm">Seller</div>
            <ul class="p-2">
                <li><input type="checkbox" class="rounded">Velzon Export Sales LLC.</li>
                <li><input type="checkbox" class="rounded">Velzon.com</li>
                <li><input type="checkbox" class="rounded">Fintie</li>
                <li><input type="checkbox" class="rounded">CWP Online</li>
                <li><input type="checkbox" class="rounded">Mosiso</li>
                <li><input type="checkbox" class="rounded">Tech Vendor</li>
                <li><input type="checkbox" class="rounded">Velzon Global Store UK</li>
                <li><input type="checkbox" class="rounded">Cable Matters</li>
                <li><input type="checkbox" class="rounded">❤️ OnlineEmart (We record SN)</li>
                <li><input type="checkbox" class="rounded">UGREEN GROUP LIMITED</li>
            </ul>

        <div class="text-black font-bold text-sm">Availability</div>
            <ul class="p-2">
                <li><input type="checkbox" class="rounded">Include Out of Stock</li>
            </ul>
    </nav>

    <article class="bg-gray-100 w-screen p-4">
        <div class="text-3xl font-bold">Computers, Tablets and IT Accessories</div>
        <span class="text-sm">
            Shop laptops, desktops, monitors, tablets, PC gaming, hard drives and storage, accessories and more
        </span>

        {{-- products card --}}
        <div class="h-64 grid grid-cols-3 gap-4 my-6">
            @foreach ($products as $product)
            <div class="p-2 mb-5">
                <a href="{{ route('product.details', ['slug'=>$product->slug]) }}" >
                    <img class="mb-2" src="{{ asset('assets/images/products/') }}/{{ $product->image }}" alt="{{ $product->name }}">
                        <div class="">{{ $product->name }}</div>
                </a>
                <div class="text-sm">
                    <div class=" text-gray-700">John Doe</div>
                    <div class="my-1">⭐⭐⭐⭐</div>
                    <div class="my-2 text-yellow-700"> <span class="align-top">$</span><span class="text-lg font-semibold">{{ $product->regular_price }}</span><span class="align-top">99</span></div>
                    <div class="mb-2">Arrives: <span class="font-semibold">Sunday, January 01</span> </div>
                    <a href="#" class=" text-sm absolute py-1 px-2 border border-black bg-gray-200"
                       wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})">Add to Cart</a>
                </div>
            </div>
            @endforeach
            {{ $products->links() }}
        </div>

    </article>
</section>
