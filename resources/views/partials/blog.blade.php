@if(!$posts->isEmpty())
    <section class="section section-blog bg-cover" style="background-image: url('{{ asset('images/gyditojai_bg.png') }}')">
        <div class="container">
            <h2 class="section-heading">{{ __('Informatyvu') }}</h2>
            

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                @include('partials.content-posts')
            </div>

            <div class="text-center">
                <x-main-button url="{{ route('posts') }}">
                    {{ __('Sužinoti daugiau') }}
                </x-main-button>
            </div>
        </div>
    </section>
@endif
