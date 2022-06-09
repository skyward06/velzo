<main class="bg-gray-200">
    <!-- Carousel -->
    <x-partials.carousel :sliders="$sliders" />

    {{-- <div class="">
        @include('layouts.partials.on-sale')
    </div> --}}

    <!-- Card Categories -->
    <x-partials.card  />

    <!-- Velzon Latest Products -->
    <x-partials.shopCard :latestProducts="$latestProducts" />

    <div class="w-full p-2 text-lg text-center text-white bg-gray-800">Back to Top</div>

    <!-- Footer -->
    <x-partials.footer />
</main>
