@extends('layouts.inner')

@section('content')
    <div x-data="{active_type:'all'}" class="bg-white pt-70px pb-100px">
        <div class="container">
            <h1 class="section-heading">{{ __('Atsiliepimai') }}</h1>
            <div class="text-20px font-light text-gray-450 mb-8" style="max-width: 589px;">
                {{ __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.') }}
            </div>
            <div class="bg-gray-100 rounded-20px mb-50px flex flex-col lg:flex-row sm:text-20px text-gray-450 font-medium">
                <button @click="active_type = 'all'" :class="{'bg-blue-850 text-white':active_type === 'all'}" class="outline-none focus:outline-none flex-1 py-6 rounded-20px">
                    {{ __('Visi atsiliepimai') }}
                </button>
                <button @click="active_type = 'fb'" :class="{'bg-blue-850 text-white':active_type === 'fb'}" class="flex items-center justify-center outline-none focus:outline-none flex-1 py-6 rounded-20px">
                    <span>{{ __('Facebook atsiliepimai') }}</span>
                    <img class="ml-4" src="{{ asset('images/fb.svg') }}" alt="">
                </button>
                <button @click="active_type = 'google'" :class="{'bg-blue-850 text-white':active_type === 'google'}" class="flex items-center justify-center outline-none focus:outline-none flex-1 py-6 rounded-20px">
                    {{ __('Google atsiliepimai') }}
                    <img class="ml-4" src="{{ asset('images/google.svg') }}" alt="">
                </button>
            </div>
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($feedback as $feedback_item)
                    <div x-show="active_type === 'all' || active_type === '{{ $feedback_item->type }}'" class="relative bg-gray-100 rounded-20px p-24px text-gray-450">
                        @if($feedback_item->type == 'google')
                            <img class="absolute top-0 right-0 mt-24px mr-24px" src="{{ asset('images/google.svg') }}" alt="">
                        @elseif($feedback_item->type == 'fb')
                            <img class="absolute top-0 right-0 mt-24px mr-24px" src="{{ asset('images/fb.svg') }}" alt="">
                        @endif
                        <div class="uppercase text-blue-850 text-30px font-bold leading-tight">{{ $feedback_item->title }}</div>
                        <div class="text-20px font-light">{{ $feedback_item->subtitle }}</div>
                        <div class="border-b border-blue-850 w-45px mt-2 mb-3"></div>
                        <div class="text-17px leading-tight">
                            {!! $feedback_item->body !!}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="my-50px">
                {{ $feedback->links() }}
            </div>
        </div>
    </div>
@endsection
