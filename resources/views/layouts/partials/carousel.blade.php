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
            slidesPerView: 1,
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
                <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
            </div>
            </div>
        </div>

        <div class="swiper-slide p-4">
            <div class="flex flex-col rounded shadow overflow-hidden">
            <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1598951092651-653c21f5d0b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="">
            </div>
            </div>
        </div>

        <div class="swiper-slide p-4">
            <div class="flex flex-col rounded shadow overflow-hidden">
            <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1598946423291-ce029c687a42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="">
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
