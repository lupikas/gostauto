@extends('layouts.inner')

@section('content')
    <div class="bg-white pt-70px pb-100px">
        <div class="container">
            <h2 class="section-heading">{{ __('Visi gydytojai') }}</h2>
            <div class="text-20px font-light text-gray-450 mb-8" style="max-width: 589px;">
                {{ __('Pasikonsultuokite dėl tinkamiausio gydymo būdo su mūsų gydytojais
') }}
            </div>
        </div>
        @include('partials.content-doctors')
    </div>
@endsection
