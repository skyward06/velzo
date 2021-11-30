<main class="bg-gray-200">
{{-- @dump($sliders) --}}
    {{-- Main Slide --}}
    <div class="">
        @include('layouts.partials.carousel')
    </div>

    {{-- Main Card --}}
    <div class="">
        @include('layouts.partials.card')
    </div>

    {{-- Shop Card Carousel --}}
    <div class="">
        @include('layouts.partials.shopCard')
    </div>

    <div  class="w-full bg-gray-800 p-2 text-lg text-white text-center">Back to Top</div>

    {{-- Footer --}}
    <div class="">
        @include('layouts.partials.footer')
    </div>


</main>
