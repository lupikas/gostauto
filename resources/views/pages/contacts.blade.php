@extends('layouts.inner')

@section('content')
    <div class="single-page">
        <div class="bg-white py-60px">
            <div class="container">

                <div class="shadow-lg rounded-30px text-gray-450 overflow-hidden mb-45px">
                    <div class="flex flex-col md:flex-row bg-cover" style="background-image: url({{ asset('images/patern_1.jpeg') }})">
                        <div class="flex-1 flex flex-col items-center justify-center">
                            <div class="text-25px text-center text-white py-40px">
                                <div class="font-medium">Kontaktai</div>
                                <div class="w-45px border-b-3px border-white mt-2 mb-4 mx-auto"></div>
                                <div><strong>Telefonas:</strong> +370 650 69 100</div>
                                <div><strong>Adresas:</strong> a. Goštauto g. 4-10, Lt-01106, vilnius</div>
                                <div><strong>El. paštas:</strong> <a href="mailto:info@gostautoklinika.com">info@gostautoklinika.com</a></div>
                                <div class="font-medium mt-6">Darbo laikas</div>
                                <div class="w-45px border-b-3px border-white mt-2 mb-4 mx-auto"></div>
                                <div><strong>I-V</strong> 09:00 - 18:00</div>
                                <div><strong>VI-VII</strong> NEDIRBAME</div>
                            </div>
                        </div>
                        <div class="md:w-1/2 xl:w-3/5">
                            <div id="contacts_map" class="md:rounded-l-30px bg-white w-full h-full overflow-hidden" style="min-height: 400px;"></div>
                        </div>
                    </div>
                </div>

                <div class="shadow-lg rounded-30px text-gray-450 overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/2 xl:w-3/5">
                            <div class="px-8 xl:px-4 py-8 md:py-70px mx-auto flex flex-col justify-center relative z-40" style="max-width: 553px;">
                                <div class="text-30px xl:text-45px font-bold leading-xtight mb-4">
                                    Po darbo valandų ir savaitgaliais galite patogiai užsiregistruoti <span class="uppercase text-blue-850">internetu</span>
                                </div>
                                <div class="text-21px xl:text-30px font-light leading-xtight" style="max-width: 510px">
                                    Susisieksime su Jumis darbo dienomis kaip galima greičiau
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-100 relative flex-1 flex items-center justify-center py-8 md:py-0 md:rounded-l-30px">
                            <div class="hidden md:inline-block w-90px h-90px rounded-full bg-white absolute left-0 top-0 z-30 top-1/2 transform -translate-y-1/2 -ml-12"></div>
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center text-white py-3 px-40px lg:px-60px text-17px xl:text-25px font-bold rounded-15px bg-blue-850">
                                {{ __('REGISTRACIJA INTERNETU') }}
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
