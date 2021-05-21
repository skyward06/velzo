<div class="mx-2 bg-white p-2">
    <h2 class="text-lg antialiased font-bold tracking-wide mt-4 mb-2 mx-2">
        Velzon Top Sellers
        <a href="#" class="inline-block bg-grey-lighter font-normal text-sm text-blue-500">Shop now</a>
    </h2>

    {{-- carousel 1 --}}

    {{-- carousel 2 --}}
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

        <div class="swiper-slide p-4">
            <div class="flex flex-col rounded shadow overflow-hidden">
            <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover" src="https://images.pexels.com/photos/3184454/pexels-photo-3184454.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
            </div>
            </div>
        </div>

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
