@if(nova_get_setting('show_feedback'))
    <section class="section section-feedback bg-cover" style="background-image: url('{{ asset('images/gyditojai_bg.png') }}')">
    <div class="container">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="section-heading">{{ __('Atsiliepimai') }}</h2>
                <div class="text-18px lg:text-20px font-light text-gray-450 mb-8" style="max-width: 589px;">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's.</div>
            </div>
            <div class="flex items-center">
                <a href="{{ route('feedback') }}" class="text-20px font-medium text-gray-450 italic">{{ __('Palikite atsiliepimą apie mus') }}</a>
                <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="10.658" height="18.316" viewBox="0 0 10.658 18.316"><path d="M1729.983,21.982l7.037,7.037,7.037-7.037" transform="translate(-19.86 1746.178) rotate(-90)" fill="none" stroke="#0B4784" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path></svg>
            </div>
        </div>

        <div class="swiper-container swiper_container_feedback">
            <div class="swiper-wrapper">
                @foreach($feedback as $feedback_item)
                    <?php $first_media_url = $feedback_item->getFirstMediaUrl('feedback', 'large'); ?>
                    <div class="swiper-slide">
                        <div class="swiper-slide-inner flex flex-col lg:flex-row">
                            <div class="w-full lg:w-2/5 h-auto rounded-t-30px lg:rounded-t-none lg:rounded-l-30px overflow-hidden">
                                <img class="object-fill lg:h-full w-full lg:w-auto" src="{{ !empty($first_media_url) ? $first_media_url : 'https://via.placeholder.com/400x430' }}" alt="" style="width:100%;max-height: 666px;">
                            </div>
                            <div class="bg-gray-100 rounded-b-30px lg:rounded-b-none lg:rounded-r-30px p-6 lg:p-50px w-full lg:w-3/5 relative">
                                <div class="feedback-circle hidden lg:inline-block"></div>
                                <div class="flex flex-col sm:flex-row justify-between">
                                    <div class="feedback-heading mb-6 pb-6">
                                        <h3 class="text-30px lg:text-45px font-bold text-blue-850 leading-none uppercase">{{ $feedback_item->title }}</h3>
                                        <div class="text-21px lg:text-30px font-light text-gray-450">{{ $feedback_item->subtitle }}</div>
                                    </div>
                                    <div class="text-gray-450 sm:text-right mb-4">
                                        <div class="text-21px lg:text-30px">
                                            <span class="text-blue-850">{{ $feedback_item->rating }}</span> / 10
                                        </div>
                                        <div class="text-18px lg:text-20px">
                                            {{ __('Įvertino klinika') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="relative z-30 lg:text-23px text-gray-450 lg:leading-tight font-light lg:mb-24">
                                    {!! $feedback_item->body !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="relative text-center sm:py-8 my-6">
                <div class="swiper-feedback-pagination flex justify-center space-x-6 sm:space-x-50px"></div>
                <div class="swiper-container-feedback-navigation hidden sm:block">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <x-main-button url="{{ route('feedback') }}">
                {{ __('Žiūrėti visus atsiliepimus') }}
            </x-main-button>
        </div>
    </div>
</section>
@endif
