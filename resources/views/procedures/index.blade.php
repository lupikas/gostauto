@extends('layouts.inner')

@section('content')
    <div class="bg-white pt-70px pb-100px">
        <div class="container">
            <h1 class="section-heading">{{ __('Paslaugos') }}</h1>
            <div class="text-20px font-light text-gray-450 mb-8">
                {{ __('Išklausę jūsų poreikius ir atlikę išsamius tyrimus, kartu sukursime praktišką gydymo planą. Naudodamiesi šiuolaikinėmis technologijomis, be skausmo ir malonioje aplinkoje. Mūsų tikslas – įsitikinti kad jūsų burna yra sveika ir graži.
') }}
            </div>
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach($procedures as $procedure)
                    <a href="{{ route('procedure', $procedure) }}" class="procedure-badge-wrap bg-cover bg-gray-100 text-gray-450 relative h-full text-gray-100 overflow-hidden rounded-20px items-center">
                        <div class="procedure-badge flex items-center justify-center lg:justify-start w-full font-light md:text-21px lg:text-25px leading-tight bg-gray-200 p-8 pl-6 py-4" style="min-height: 95px;">
                            <h3 style="max-width: 160px">
                                {{ $procedure->title }}
                            </h3>
                        </div>
                        @if(!empty($procedure->desc))
                            <div class="p-6 pb-16">
                                {!! $procedure->desc !!}
                            </div>
                        @endif
                        <div class="hidden badge-corner absolute bg-gray-450 text-white bottom-0 right-0 w-50px h-full sm:h-50px md:flex items-center justify-center sm:rounded-tl-20px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.658" height="18.316" viewBox="0 0 10.658 18.316"><path d="M1729.983,21.982l7.037,7.037,7.037-7.037" transform="translate(-19.86 1746.178) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
