<div class="section-hero bg-cover bg-center xl:h-1000px" style="background-image: url({{ asset('images/hero_bg.png') }});">
    <div class="container h-full">
        @include('partials.main-nav')

        <div class="swiper-container-hero-wrap rounded-30px" style="background-image: url({{ asset('images/patern_1.jpeg') }})">
            <div class="swiper-container swiper_container_hero h-full">
                <div class="swiper-wrapper">
                    @foreach($pages as $page)
        @if($page->in_menu == 2)
        <div class="swiper-slide text-white p-30px lg:p-50px">
        
                        <h2 class="text-24px lg:text-45px font-bold max-w-500px leading-tight lg:leading-xtight uppercase mb-6">{{ $page->name }}</h2>
                        <div class="text-21px lg:text-30px font-light max-w-530px leading-tight">{!! $page->content !!}</div>
                        @if($page->slug != '#')
                        <a href="{{ $page->slug }}" class="swiper-hero-button">
                {{ __('Daugiau') }}
            </a>
            @endif
                    </div>
                    @endif
        @endforeach
                    
                </div>
                <div class="swiper-container-hero-navigation">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            
        </div>

        <div class="mt-16 lg:mt-20 pb-16 xl:pb-0 lg:flex lg:flex-row">
            <div class="lg:flex-none relative w-full lg:w-274px mb-4 lg:mb-0">
                <div class="text-25px font-light text-gray-450 leading-tight">Faktai apie mūsų odontologijos klinika</div>
                <div class="hidden lg:block swiper-container-facts-navigation">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="swiper-container flex lg:flex-1 swiper_container_facts">
                <div class="swiper-wrapper flex-1">
                    @foreach($pages as $page)
        @if($page->in_menu == 3)
                        <div class="swiper-slide bg-white lg:text-20px text-gray-400 p-20px pb-45px rounded-2xl lg:rounded-30px opacity-95">
                            {!! $page->content !!}
                        </div>
                    @endif
        @endforeach
                </div>
            </div>
        </div>

        <img class="absolute bottom-0 right-0 hidden md:block md:max-h-680px lg:max-h-925px xl:mr-28 pointer-events-none" src="{{ asset('images/hero_figure.png') }}" alt="">
    </div>
</div>
