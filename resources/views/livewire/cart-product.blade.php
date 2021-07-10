{{-- @dump(Cart::content()) --}}
<main id="main">
    <div class="text-2xl">Shopping Cart</div>
    <hr class=" ">

    <div class="">
    @if (Session::has('success_message'))
        <div class="bg-green-400">
            <strong>Success</strong>
            {{ Session::get('success_message') }}
        </div>
    @endif

    @if (Cart::count() > 0)
    <ul>
        @foreach (Cart::content() as $item)
        <li>
            <div class="flex checkoutProduct" style="margin-top: 20px; margin-bottom: 20px" >
                <img src="{{ asset('assets/images/products') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}" class="object-contain checkoutproduct__image" style="width: 180px; height: 180px;" />

                <div class="checkoutproduct__info" style="padding-left: 20px;" >
                    <a href="{{ route('product.details', ['slug' => $item->model->slug ]) }}" class="checkoutproduct__title" style="" >{{ $item->model->name }}</a>
                    <p class="checkoutproduct__price">
                        <small> $</small>
                        <strong>{{ $item->model->regular_price}}</strong>
                    </p>
                    <div class="flex checkoutproduct__rating">
                        <p>🌟🌟🌟🌟</p>
                    </div>
                    <button class="" style="background-color: #f0c14b; border: 1px solid; margin-top: 10px; border-color: #a88734 #9c7e31 #846a29; color: #111" >Remove from Basket</button>
                </div>
            </div>
        </li>
        @endforeach
    </ul>

    @else
        <div class="">No Item in Cart</div>
    @endif

    </div>
</main>
