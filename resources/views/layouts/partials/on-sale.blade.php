{{-- @dump($sproducts); --}}
@if ($sproducts->count() > 0)
<div class="my-20 w-full p-2">
    <div class="w-full p-2 text-left">
        <div class="text-2xl">On Sale</div>
    </div>
    <div class="carousel" data-flickity='{"autoPlay": true, "groupCells": true }'>
        {{-- On Sale --}}
        @foreach ($sproducts as $sproduct)
        <div class="carousel-cell max-w-xs rounded overflow-hidden shadow-lg my-2 mx-2 p-4 bg-white">
            <a href="{{ route('product.details', ['slug'=>$sproduct->slug]) }}" title="{{ $sproduct->name }}" class="font-bold text-xl mb-2 mt-4">Computers & Accessories
            <figure><img class="w-full" src="{{ asset('assets/images/products') }}/{{ $sproduct->image }} " alt="Sunset in the mountains"></figure>
           </a>
           <div class="px-2 py-4">
                <a href="{{ route('product.details', ['slug'=>$sproduct->slug]) }}" class="inline-block bg-grey-lighter text-sm text-blue-500">{{ $sproduct->name  }}</a>
            </div>
            <div class="px-2 py-4">
                <a href="{{ route('product.details', ['slug'=>$sproduct->slug]) }}" class="inline-block bg-grey-lighter text-sm text-blue-500">{{ $sproduct->sale_price  }}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif

