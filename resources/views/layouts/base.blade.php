<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velzon</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- flickty -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @livewireStyles
</head>
<style>

body { font-family: sans-serif; }

.carousel-cell {
  width: 66%;
  height: 200px;
  margin-right: 10px;
  border-radius: 5px;
}

</style>
<body class="p-0 m-0">

{{-- Navbar --}}
<div class="sticky top-0 flex items-center" style=" height:60px; z-index: 100; background-color: #131921;">
    <a href="/" class="">
        <img class="object-contain" style="width: 100px; margin: 0 20px; margin-top: 18px;"
            src="http://pngimg.com/uploads/amazon/amazon_PNG11.png" alt="amazon-logo" class="header__logo">
    </a>

    @livewire('header-search-component')

    <div class="flex justify-evenly">
        @if (Route::has('login'))
            @auth
                @if (Auth::user()->utype === 'ADM')
                <div class="flex flex-col mx-3 text-white">
                    <span class="text-sm">Hello, {{ Auth::user()->name }}</span>
                    <a href="{{ route('admin.dashboard') }}" class="text-md" >Dashboard</a>
                    <a href="{{ route('admin.categories') }}" class="text-md" >Categories</a>
                    <a href="{{ route('admin.products') }}" class="text-md" >All Products</a>
                    <a href="{{ route('admin.homeslider') }}" class="text-md" >Manage Home Slider</a>
                    <a href="{{ route('admin.homecategories') }}" class="text-md" >Manage Home Category</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit(); "
                        class="font-bold text-md">Logout</a>

                    <form action="{{ route('logout') }}" id="logout-form" method="POST">
                        @csrf
                    </form>
                </div>
                @else
                <div class="flex flex-col mx-3 text-white">
                    <span class="" style="font-size: 12px" >Hello, {{ Auth::user()->name }}</span>
                    <a href="{{ route('user.dashboard') }}" style="font-size: 12px" >Dashboard</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit(); "
                        class=""
                        style="font-size: 14px; font-weight: 800;" >Logout</a>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST">
                        @csrf
                    </form>
                </div>
                @endif
                @else
                <div class="mx-3 text-white">
                    <span  class="mx-3 cursor-pointer" style="font-size: 14px; font-weight: 800;" > <a href="{{ route('login') }}">Sign In</a> </span>
                    <span href="{{ route('logout') }}" class="mx-3 cursor-pointer" style="font-size: 14px; font-weight: 800" > <a href="{{ route('register') }}"> Sign Up</a></span>
                </div>
                @endif
        @endif

        <div class="flex flex-col mx-3 text-white">
            <span class="" style="font-size: 12px" >Returns</span>
            <span class="" style="font-size: 14px; font-weight: 800;" >& Orders</span>
        </div>

        <a href="{{ ('cart') }}"  class="flex items-center" style="color: white">
            <x-heroicon-o-shopping-cart class="w-8 h-8" />
            <div class="" style="font-size: 14px; font-weight: 800; margin-left: 10px; margin-right: 10px">
                @if ( Cart::count() > 0 )
               <span> {{ Cart::count() }} </span>
               @endif
               <span>Cart</span>
            </div>
        </a>

    </div>
</div>

    {{ $slot }}

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script></body>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @livewireScripts

    @stack('scripts')
</body>
</html>
