@if(!$procedures->isEmpty())
    <section class="section section-procedures-slider relative bg-cover bg-center xl:h-1000px" style="background-image: url('{{ asset('images/paslaugos_bg.jpg') }}')">
        <div class="absolute lg:hidden left-0 top-0 w-full h-full bg-white opacity-75"></div>
        <div class="container h-full">
            <h2 class="section-heading">{{ __('Paslaugos') }}</h2>
            <div class="text-20px font-light text-gray-450 mb-8" style="max-width: 371px;">Išklausę jūsų poreikius ir atlikę išsamius tyrimus, kartu sukursime praktišką gydymo planą. Naudodamiesi šiuolaikinėmis technologijomis, be skausmo ir malonioje aplinkoje. Mūsų tikslas – įsitikinti kad jūsų burna yra sveika ir graži.
</div>

            <div class="xl:absolute xl:bottom-0 xl:left-0 w-full xl:px-4">
                <div class="swiper-container swiper_container_procedures">
                    <div class="block swiper-container-procedures-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="swiper-wrapper">
                        @foreach($procedures as $procedure)
                            <div class="swiper-slide">
                                <a href="{{ route('procedure', $procedure) }}" class="swiper-slide-inner">
                                    <h3 class="font-bold text-21px lg:text-25px">{{ $procedure->title }}</h3>
                                    <div class="slide-corner">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.658" height="18.316" viewBox="0 0 10.658 18.316"><path d="M1729.983,21.982l7.037,7.037,7.037-7.037" transform="translate(-19.86 1746.178) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <x-main-button url="{{ route('procedures') }}">
                    {{ __('Visos paslaugos') }}
                </x-main-button>
            </div>
        </div>
    </section>
@endif
