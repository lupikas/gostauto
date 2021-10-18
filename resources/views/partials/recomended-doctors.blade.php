@if(nova_get_setting('show_recommended_doctors'))
    <div class="bg-white pt-70px pb-100px">
        <div class="container">
            <h2 class="section-heading">{{ __('Rekomenduojami gydytojai') }}</h2>
            <div class="text-20px font-light text-gray-450 mb-8" style="max-width: 589px;">
                {{ __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.') }}
            </div>
        </div>
        @include('partials.content-doctors')
        <div class="container my-8">
            <x-main-button url="{{ route('doctors') }}">
                {{ __('Visi gydytojai') }}
            </x-main-button>
        </div>
    </div>
@endif
