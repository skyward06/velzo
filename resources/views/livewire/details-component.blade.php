{{-- @dump($popular_product) --}}
@dump($related_products)

<div class="p-11 inline-flex space-x-3 w-full">
    <div class="bg-green-400 w-2/6">
        <img src="{{ asset('assets/images/products/') }}/{{ $product->image }}" alt="" class="w-full h-80">
    </div>

    <div class="text-sm w-3/6 px-2">
        <div class="text-2xl font-bold">{{ $product->name }}</div>
        <div class=" text-green -600 leading-9">Visit the store</div>
        <div class="my-1">⭐⭐⭐⭐</div>
        <hr class="bg-gray-300 h-0.5 my-2">
        <div class="my-2">
            <span class="align-top">Price: </span>
            <span class="text-lg font-semibold text-yellow-600">${{ $product->regular_price }}</span>
        </div>

        <hr class="bg-gray-300 h-0.5 my-2">
        <div class="text-xl font-bold">About this item</div>
        <div class="">{{ $product->description }}</div>
    </div>

    <div class="w-1/6 p-2 border border-1 border-gray-500">
        <div class="text-lg font-semibold text-yellow-600">${{ $product->regular_price }}</div>
        <div class="text-gray-600 text-sm">+ $29.12 Shipping & Import Fees Deposit to Indonesia Details </div>
        <div class="text-sm leading-10">Arrives: <span class="font-semibold">Sunday, January 01</span> </div>
        <div class="text-xl text-green-600 font-bold">{{ $product->stock_status }}</div>

        <form>
        <div class="block bg-yellow-300 p-2 border cursor-pointer border-black text-sm w-full mt-1 focus:outline-none">
                Add to Cart
        </div>
    </form>
        <a href="#" class="block bg-yellow-500 p-2 border border-black text-sm w-full mt-2 focus:outline-none">Buy Now</a>
    </div>

    </div>

    {{-- popular products --}}
    <div class="mx-2 bg-white p-2">
        <h2 class="text-lg antialiased font-bold tracking-wide mt-4 mb-2 mx-2">
            Popular Products
        </h2>

        {{-- carousel 1 --}}
        <div x-data="{swiper: null}"
        x-init="swiper = new Swiper($refs.container, {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 0,

            breakpoints: {
                640: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
                768: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
                1024: {
                slidesPerView: 6,
                spaceBetween: 0,
                },
            },
            })"
        class="relative w-full mx-auto flex flex-row">

        <div class="absolute z-10 inset-y-0 left-0 flex items-center">
            <button @click="swiper.slidePrev()"
                    class="ml-2 lg:ml-4 flex justify-center items-center w-16 h-16 rounded shadow focus:outline-none">
                    <x-heroicon-o-chevron-left  class="ml-1" />
            </button>
        </div>

        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide p-4">
                <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="https://images.pexels.com/photos/3184454/pexels-photo-3184454.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
                </div>
                </div>
            </div>

            @foreach ($popular_product as $pop_product)
            <div class="swiper-slide p-4">
                <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="{{ asset('assets/images/products/') }}/{{ $pop_product->image }}" alt="">
                </div>
                <h1>{{ $pop_product->name }}</h1>
                </div>
            </div>
            @endforeach

            <div class="swiper-slide p-4">
                <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="https://images.pexels.com/photos/3184454/pexels-photo-3184454.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="absolute inset-y-0 right-0 z-10 flex items-center">
            <button @click="swiper.slideNext()"
                    class="mr-2 lg:mr-4 flex justify-center items-center w-16 h-16 rounded shadow focus:outline-none">
                <x-heroicon-o-chevron-right class="" />
            </button>
        </div>
    </div>

        {{-- popular products --}}
        <div class="mx-2 bg-white p-2">
            <h2 class="text-lg antialiased font-bold tracking-wide mt-4 mb-2 mx-2">
                Related Products
            </h2>

            {{-- carousel 1 --}}
            <div x-data="{swiper: null}"
            x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,

                breakpoints: {
                    640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    },
                    768: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    },
                    1024: {
                    slidesPerView: 6,
                    spaceBetween: 0,
                    },
                },
                })"
            class="relative w-full mx-auto flex flex-row">

            <div class="absolute z-10 inset-y-0 left-0 flex items-center">
                <button @click="swiper.slidePrev()"
                        class="ml-2 lg:ml-4 flex justify-center items-center w-16 h-16 rounded shadow focus:outline-none">
                        <x-heroicon-o-chevron-left  class="ml-1" />
                </button>
            </div>

            <div class="swiper-container" x-ref="container">
                <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide p-4">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="https://images.pexels.com/photos/3184454/pexels-photo-3184454.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
                    </div>
                    </div>
                </div>

                @foreach ($related_products as $related_product)
                <div class="swiper-slide p-4">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="{{ asset('assets/images/products/') }}/{{ $related_product->image }}" alt="">
                    </div>
                    <h1>{{ $related_product->name }}</h1>
                    </div>
                </div>
                @endforeach

                <div class="swiper-slide p-4">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="https://images.pexels.com/photos/3184454/pexels-photo-3184454.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 z-10 flex items-center">
                <button @click="swiper.slideNext()"
                        class="mr-2 lg:mr-4 flex justify-center items-center w-16 h-16 rounded shadow focus:outline-none">
                    <x-heroicon-o-chevron-right class="" />
                </button>
            </div>
        </div>

    </div>
