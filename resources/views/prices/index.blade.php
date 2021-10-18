@extends('layouts.inner')

@section('content')
    <div x-data="{active_procedure:0}" class="bg-white pt-70px pb-100px">
        <div class="container">
            <h1 class="section-heading">{{ __('Kainos') }}</h1>
            <div class="text-20px font-light text-gray-450 mb-8" style="max-width: 589px;">
                {{ __('Pateikiame preliminarias paslaugų kainas. Tiksli kaina nustatoma konsultacijos pas gydytoją ar procedūros metu, įvertinus konkretų paciento atvejį. Kainos tinklapyje gali nesutapti su klinikos kainoraščiu, todėl visais atvejais vadovautis klinikoje esančiu kainoraščiu.
') }}
            </div>
            <div class="flex flex-col lg:flex-row lg:items-stretch lg:space-x-4">
                <div class="w-full lg:max-w-536px lg:flex-none mb-4 lg:mb-0">
                    <div class="bg-gray-100 rounded-20px p-4">
                        <div id="prices_procedures" class="relative flex flex-col space-y-4 h-350px lg:h-674px">
                            @foreach($procedures as $index => $procedure)
                                <div @click="active_procedure = {{ $index }}" :class="{'bg-blue-850 text-white':active_procedure == {{ $index }}}" class="bg-gray-50 transition-all duration-200 hover:bg-blue-850 text-450px hover:text-white cursor-pointer lg:text-20px font-medium rounded-15px lg:rounded-20px relative py-4 lg:py-20px px-8">
                                    {{ $procedure->title }}
                                    <span class="absolute bg-gray-100 right-0 top-0 w-15px h-15px flex items-center justify-center p-1 rounded-full mt-5 lg:mt-7 mr-4">
                                        <span :class="{'hidden': active_procedure != {{ $index }}}" class="bg-blue-850 w-full h-full rounded-full"></span>
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="bg-gray-100 rounded-20px p-4 h-full flex flex-col justify-between">
                        <div class="text-gray-450 rounded-20px py-15px px-3">
                            <div class="">
                                @foreach($procedures as $index => $procedure)
                                    <div :class="{'hidden':active_procedure != {{ $index }} }">
                                        <div class="bg-white rounded-20px py-15px px-4" style="min-height: 391px">
                                            <div class="flex justify-between border-b border-gray-500 md:text-20px pb-2 mb-4">
                                                <div>{{ __('Pavadinimas') }}</div>
                                                <div>{{ __('Kaina') }}</div>
                                            </div>
                                            @foreach($procedure->prices as $price)
                                                <div class="flex justify-between border-b border-gray-300 md:text-20px pb-2 mb-4">
                                                    <div class="font-light pr-4">{{ getRepeaterTrans($price->title) }}</div>
                                                    <div class="text-right">{{ $price->price }}</div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="pb-6">
                                            <div class="text-18px font-light text-gray-450 mx-6 my-8 pb-8 border-b border-gray-450">
                                                {!! $procedure->desc !!}
                                            </div>
                                            <div class="text-right mr-6">
                                                <a href="{{ route('procedure', $procedure) }}" class="inline-flex items-center text-20px italic text-gray-450">
                                                    <span>{{ __('plačiau apie paslaugą') }}</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 mt-1" width="10" height="17" viewBox="0 0 10 17"><g><g transform="rotate(-90 5 7.5)"><path fill="none" stroke="#0b4784" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="3" d="M-2.018 4.018v0l7.037 7.037v0l7.036-7.037v0"></path></g></g></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
