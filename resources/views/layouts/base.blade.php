<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velzon</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
</head>
<body class="p-0 m-0">

    {{-- Header --}}
<div class="sticky top-0 flex items-center" style=" height:60px; z-index: 100; background-color: #131921;">
    <img class="object-contain" style="width: 100px; margin: 0 20px; margin-top: 18px;"
        src="http://pngimg.com/uploads/amazon/amazon_PNG11.png" alt="" class="header__logo">

    <div class="flex items-center" style=" flex: 1; ">
        <input type="text" class="w-full border-none rounded-l-md" style="height: px; padding: 10px" >
        <x-heroicon-o-search class="rounded-r-md" style="padding: 5px; height: 45px !important; background-color:#cd9042; " />
    </div>

    <div class="flex justify-evenly">
        <div class="flex flex-col mx-3 text-white">
            <span class="" style="font-size: 12px" >Hello, Guest</span>
            <span class="" style="font-size: 14px; font-weight: 800;" >Sign In</span>
        </div>

        <div class="flex flex-col mx-3 text-white">
            <span class="" style="font-size: 12px" >Returns</span>
            <span class="" style="font-size: 14px; font-weight: 800;" >& Orders</span>
        </div>

        <div class="flex flex-col mx-3 text-white">
            <span class="" style="font-size: 12px">Your</span>
            <span class="" style="font-size: 14px; font-weight: 800" >Prime</span>
        </div>

        <div class="flex items-center" style="color: white">
            <x-heroicon-o-shopping-cart class="w-8 h-8" />
            <a href="/cart" class="" style="font-size: 14px; font-weight: 800; margin-left: 10px; margin-right: 10px">0 Cart</a>
        </div>

    </div>
</div>

    {{ $slot }}
</body>
</html>
