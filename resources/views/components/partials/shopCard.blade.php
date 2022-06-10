@props(['latestProducts'])

<section class="p-2 mx-2 bg-white">
    <h2 class="mx-2 mt-4 mb-2 text-lg antialiased font-bold tracking-wide">
        Velzon Latest Products
        <a href="{{ route('shop') }}" class="inline-block text-sm font-normal text-blue-500 bg-grey-lighter">Shop now</a>
    </h2>

    <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }'>
        @foreach ($latestProducts as $latestProduct)
        @dump($latestProduct)
        {{-- <a href="{{ route('product.details', ['slug' => $latestProduct->slug]) }}" class="p-4">
            <img class="h-48" src="{{ asset('assets/images/products') }}/{{ $latestProduct->image }}" alt="">
        </a> --}}
        @endforeach
    </div>
</section>
