<div class="w-9/12 p-5 bg-white mt-10">
    <div class="mb-5 text-2xl">{{ Cart::instance('saveForLater')->count() }} item(s) Saved For Later</div>

 {{-- @dump(Cart::instance('saveForLater')->count()) --}}
    <div class="">
        @if (Session::has('success_message'))
            <div class="bg-green-400">
                <strong>Success</strong>
                {{ Session::get('success_message') }}
            </div>
        @endif

        @if (Cart::instance('saveForLater')->count() >= 0)
            <ul>
                @foreach (Cart::instance('saveForLater')->content() as $item)
                <li>
                    <hr class="border-gray-300">
                    <div class="flex checkoutProduct" style=" margin-bottom: 20px" >
                        <img src="{{ asset('assets/images/products') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}" class="object-contain checkoutproduct__image" style="width: 180px; height: 180px;" />

                        <div class="mt-8 checkoutproduct__info " style="padding-left: 20px;" >
                            <a href="{{ route('product.details', ['slug' => $item->model->slug ]) }}" class="checkoutproduct__title" style="" >{{ $item->model->name }}</a>
                            <p class="checkoutproduct__price">
                                <small> $</small>
                                <strong>{{ $item->model->regular_price}}</strong>
                            </p>
                            <div class="flex checkoutproduct__rating">
                                <p class="text-green-500">In Stock</p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="px-3 py-2 bg-blue-400 rounded" wire:click.prevent="switchToSaveForLater('{{ $item->rowId }}')">Move To Cart</a>
                            </div>
                            <div class="">
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        @else
            <div class="">No Item Saved For Later</div>
        @endif

        @if(Cart::instance('saveForLater')->content()->count() > 1)
            <button class="px-4 py-2 font-bold underline bg-red-600 rounded text-md" wire:click.prevent="destroyAll()">Delete All</button>
        @endif
    </div>
</div>
