<div>
    <div class="flex flex-col lg:flex-row items-center justify-between mb-8 lg:mb-0">
        <div class="text-center lg:text-left">
            <h1 class="section-heading">{{ __('Registracija internetu') }}</h1>
            <div class="text-20px font-light text-gray-450 mb-8" style="max-width: 589px;">
                {{ __('Pasirinkite planuojamą procedūrą, patogų laiką bei mėgstamą dainą. Viskuo kitu pasirūpinsime mes ') }}
            </div>
        </div>
        <div>
            <nav aria-label="Progress">
                <ol class="flex items-center text-20px font-bold text-white">
                    <li class="relative pr-8 sm:pr-20">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="h-1 w-full bg-blue-850"></div>
                        </div>
                        <a href="#" wire:click.prevent="next(1)" class="relative w-50px h-50px flex items-center justify-center bg-blue-850 rounded-full hover:bg-blue-900">
                            1
                            <span class="sr-only">1 {{ __('Žingsnis') }}</span>
                        </a>
                    </li>
                    <li class="relative pr-8 sm:pr-20">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            @if(in_array($currentStep, [2,3,4]))
                                <div class="h-1 w-full bg-blue-850"></div>
                            @else
                                <div class="h-1 w-full bg-gray-100"></div>
                            @endif
                        </div>
                        @if(in_array($currentStep, [2,3,4]))
                            <a href="#" wire:click.prevent="next(2)" class="relative w-50px h-50px flex items-center justify-center bg-blue-850 rounded-full hover:bg-blue-900">
                        @else
                            <a href="#" wire:click.prevent="next(2)" class="relative w-50px h-50px flex items-center justify-center bg-gray-100 text-gray-300 rounded-full border-2 border-gray-100">
                        @endif
                            2
                            <span class="sr-only">2 {{ __('Žingsnis') }}</span>
                        </a>
                    </li>
                    <li class="relative pr-8 sm:pr-20">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            @if(in_array($currentStep, [3,4]))
                                <div class="h-1 w-full bg-blue-850"></div>
                            @else
                                <div class="h-1 w-full bg-gray-100"></div>
                            @endif
                        </div>
                        @if(in_array($currentStep, [3,4]))
                            <a href="#" wire:click.prevent="next(3)" class="relative w-50px h-50px flex items-center justify-center bg-blue-850 rounded-full hover:bg-blue-900">
                        @else
                            <a href="#" wire:click.prevent="next(3)" class="relative w-50px h-50px flex items-center justify-center bg-gray-100 text-gray-300 rounded-full border-2 border-gray-100">
                        @endif
                            3
                            <span class="sr-only">3 {{ __('Žingsnis') }}</span>
                        </a>
                    </li>
                    <li class="relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            @if(in_array($currentStep, [4]))
                                <div class="h-1 w-full bg-blue-850"></div>
                            @else
                                <div class="h-1 w-full bg-gray-100"></div>
                            @endif
                        </div>
                        @if(in_array($currentStep, [4]))
                            <a href="#" class="relative w-50px h-50px flex items-center justify-center bg-green-1 rounded-full">
                        @else
                            <a href="#" class="group relative w-50px h-50px flex items-center justify-center bg-gray-100 text-gray-300 border-2 border-gray-100 rounded-full">
                        @endif
                            4
                            <span class="sr-only">4 {{ __('Žingsnis') }}</span>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div>
        <div class="rounded-30px text-gray-450 shadow-lg overflow-hidden">
            @if($currentStep == 1)
                <div class="px-8 pt-16 pb-8 lg:py-50px lg:px-70px">
                    <div class="flex flex-col lg:flex-row lg:space-x-70px mb-8 lg:mb-100px">
                        <div class="flex-1">
                            <h3 class="inline-block text-20px lg:text-35px font-bold leading-none">{{ __('Pasirinkite paslaugą') }}</h3>
                            <span class="block border-b-2 border-blue-850 w-50px my-3"></span>
                            
                            <div>
                                <div>
                                    <select name="procedure" wire:model="selectedProcedure" class="mt-1 block w-full pl-3 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                        <option value="">{{ __('Pasirinkite paslaugą') }}</option>
                                        @foreach($procedures as $procedure)
                                            <option value="{{ $procedure->title }}">{{ $procedure->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="w-3/5 mt-8 lg:mt-0">
                            <h3 class="inline-block text-20px lg:text-35px font-bold leading-none">{{ __('Jums patogiausias vizito laikas') }}</h3>
                            <span class="block border-b-2 border-blue-850 w-50px my-3"></span>
                            <div class="lg:text-20px font-light mb-8">
                                <div>Nurodykite jums patogiausią laiką, kurį suderinsime su jumis susisiekę
</div>
                            </div>
                            <div class="lg:text-20px text-gray-450 font-light flex flex-col space-y-3">
                                <div class="flex items-center">
                                    <input id="time_1" name="time" value="{{ __('Rytas (8:00 - 12:00)') }}" wire:model="selectedTime" type="radio" class="focus:ring-blue-850 h-15px w-15px text-indigo-600 border-gray-300">
                                    <label for="time_1" class="ml-3">
                                        <span class="block">{{ __('Rytas (8:00 - 12:00)') }}</span>
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="time_2" name="time" value="{{ __('Popietė (13:00 - 16:00)') }}" wire:model="selectedTime" type="radio" class="focus:ring-blue-850 h-15px w-15px text-indigo-600 border-gray-300">
                                    <label for="time_2" class="ml-3">
                                        <span class="block">{{ __('Popietė (13:00 - 16:00)') }}</span>
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="time_3" name="time" value="{{ __('Vakaras (16:00 - 20:00)') }}" wire:model="selectedTime" type="radio" class="focus:ring-blue-850 h-15px w-15px text-indigo-600 border-gray-300">
                                    <label for="time_3" class="ml-3">
                                        <span class="block">{{ __('Vakaras (16:00 - 20:00)') }}</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button wire:click.prevent="next(2)" class="inline-flex items-center justify-center text-white py-2 px-50px md:px-60px text-17px md:text-25px font-bold rounded-15px bg-blue-850 text-white">
                        {{ __('Toliau') }}
                    </button>
                </div>
            @endif

            @if($currentStep == 2)
                <div class="px-8 pt-16 pb-8 lg:py-50px lg:px-70px">
                    <div class="flex flex-col lg:flex-row lg:justify-between mb-8 lg:mb-100px">
                        <div class="flex-1 mb-8 lg:mb-0" style="max-width: 569px">
                            <h3 class="inline-block text-20px lg:text-35px font-bold leading-none">{{ __('Mano vizito tikslas') }}</h3>
                            <span class="block border-b-2 border-blue-850 w-50px my-3"></span>
                            
                            <div class="lg:text-20px text-gray-450 font-light flex flex-col space-y-3 mb-4">
                                <div class="flex items-center">
                                    <input id="purpose_1" name="purpose" value="{{ __('Esu naujas (-a) pacientas (-ė)') }}" wire:model="selectedPurpose" type="radio" class="focus:ring-blue-850 h-15px w-15px text-indigo-600 border-gray-300">
                                    <label for="purpose_1" class="ml-3">
                                        <span class="block">{{ __('Esu naujas (-a) pacientas (-ė)') }}</span>
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="purpose_2" name="purpose" value="{{ __('Tęsiu gydymą') }}" wire:model="selectedPurpose" type="radio" class="focus:ring-blue-850 h-15px w-15px text-indigo-600 border-gray-300">
                                    <label for="purpose_2" class="ml-3">
                                        <span class="block">{{ __('Tęsiu gydymą') }}</span>
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="purpose_3" name="purpose" value="{{ __('Periodiškas pasitikrinimas') }}" wire:model="selectedPurpose" type="radio" class="focus:ring-blue-850 h-15px w-15px text-indigo-600 border-gray-300">
                                    <label for="purpose_3" class="ml-3">
                                        <span class="block">{{ __('Periodiškas pasitikrinimas') }}</span>
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="purpose_4" name="purpose" value="{{ __('Norėčiau pasikonsultuoti') }}" wire:model="selectedPurpose" type="radio" class="focus:ring-blue-850 h-15px w-15px text-indigo-600 border-gray-300">
                                    <label for="purpose_4" class="ml-3">
                                        <span class="block">{{ __('Norėčiau pasikonsultuoti') }}</span>
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="purpose_4" name="purpose" value="{{ __('Skubi pagalba ') }}" wire:model="selectedPurpose" type="radio" class="focus:ring-blue-850 h-15px w-15px text-indigo-600 border-gray-300">
                                    <label for="purpose_4" class="ml-3">
                                        <span class="block">{{ __('Skubi pagalba ') }}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="flex my-6 lg:text-20px text-gray-450">
                                <span class="mr-3">{{ __('Gydymo metu per Spotify gali skambėti Jūsų mėgiama daina!') }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"><g><g><path fill="#00d95f" d="M20.906 12.07a1.26 1.26 0 0 1-.638-.173C13.82 8.128 5.454 10.369 5.37 10.392a1.266 1.266 0 1 1-.673-2.441c.097-.027 2.404-.654 5.613-.76 1.89-.062 3.709.07 5.406.392 2.15.408 4.112 1.124 5.83 2.128a1.266 1.266 0 0 1-.64 2.36zm-.996 3.06a1.032 1.032 0 0 1-1.412.37c-2.713-1.585-5.846-1.84-7.998-1.775-2.384.073-4.132.544-4.149.548a1.033 1.033 0 0 1-.547-1.99c.079-.022 1.96-.533 4.575-.62 1.54-.05 3.024.057 4.408.32 1.753.332 3.352.916 4.753 1.735.492.287.658.92.37 1.412zm-1.62 3.365a.871.871 0 0 1-1.192.312c-2.29-1.338-4.936-1.553-6.752-1.498-2.013.061-3.488.458-3.503.463a.872.872 0 0 1-.462-1.681c.067-.018 1.655-.45 3.863-.522 1.3-.043 2.553.047 3.72.269 1.48.28 2.83.773 4.013 1.465a.871.871 0 0 1 .313 1.192zM12.744 0C5.706 0 0 5.706 0 12.744c0 7.038 5.706 12.743 12.744 12.743 7.038 0 12.743-5.705 12.743-12.743S19.782 0 12.744 0z"/></g></g></svg>
                            </div>
                            <div class="relative">
                                <label>
                                    <input type="text" name="name" wire:model="selectedSong" class="w-full px-4 py-3 rounded-20px border border-gray-450" placeholder="{{ __('Įrašykite dainos pavadinimą arba URL kodą (neprivalomas)') }}">
                                </label>
                            </div>
                        </div>
                        <div class="lg:w-3/5">
                            <div class="flex flex-col mx-auto" style="max-width: 536px">
                                <h3 class="inline-block text-20px lg:text-35px font-bold leading-none">{{ __('Kontaktinė informacija apie Jus') }}</h3>
                                <span class="block border-b-2 border-blue-850 w-50px my-3"></span>
                                <div class="lg:text-20px font-light mb-8">
                                    <div>Nurodykite savo kontaktinius duomenis, kad galėtumėme suderinti jūsų vizito detales
</div>
                                </div>
                                <div class="flex flex-col space-y-4">
                                    <div class="relative">
                                        <label>
                                            <input type="text" name="song" wire:model="customerName" class="w-full px-4 py-3 rounded-20px border border-gray-450" placeholder="{{ __('Vardas pavardė') }}">
                                        </label>
                                    </div>
                                    <div class="relative">
                                        <label>
                                            <input type="text" name="phone" wire:model="customerPhone" class="w-full px-4 py-3 rounded-20px border border-gray-450" placeholder="{{ __('Telefono numeris') }}">
                                        </label>
                                    </div>
                                    <div class="relative">
                                        <label>
                                            <input type="email" name="phone" wire:model="customerEmail" class="w-full px-4 py-3 rounded-20px border border-gray-450" placeholder="{{ __('El. paštas (neprivalomas)') }}">
                                        </label>
                                        <div class="text-15px font-light mt-1">{{ __('Į Jūsų elektroninį paštą bus siunčiamas priminimas apie Jūsų vizitą.') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button wire:click.prevent="next(1)" class="inline-flex items-center justify-center text-white py-2 px-50px md:px-60px text-17px md:text-25px font-bold rounded-15px bg-gray-450 text-white">
                            {{ __('Atgal') }}
                        </button>
                        <button wire:click.prevent="next(3)" class="inline-flex items-center justify-center text-white py-2 px-50px md:px-60px text-17px md:text-25px font-bold rounded-15px bg-blue-850 text-white">
                            {{ __('Toliau') }}
                        </button>
                    </div>
                </div>
            @endif

            @if($currentStep == 3)
                <div class="flex flex-col lg:flex-row">
                    <div class="lg:flex-1 py-50px px-70px">
                        <h3 class="inline-block text-20px lg:text-35px font-bold leading-none">{{ __('Pasitikrinkite ar informacija - teisinga
') }}</h3>
                        <span class="block border-b-2 border-blue-850 w-50px my-3"></span>
                        <div>
                            <div class="border-b border-gray-450 pb-2 mb-2">
                                <div class="lg:text-20px font-bold text-blue-850">{{ __('Paslauga') }}</div>
                                <div class="text-15px font-light">{{ $selectedProcedure }}</div>
                            </div>
                            <div class="border-b border-gray-450 pb-2 mb-2">
                                <div class="lg:text-20px font-bold text-blue-850">{{ __('Jums patogiausias vizito laikas') }}</div>
                                <div>{{ $selectedTime }}</div>
                            </div>
                            <div class="border-b border-gray-450 pb-2 mb-2">
                                <div class="lg:text-20px font-bold text-blue-850">{{ __('Mano vizito tikslas ') }}</div>
                                <div>
                                    <div>{{ $selectedPurpose }}</div>
                                    <div>{{ __('Pasirinkita spotify Jums patinkanti daina:') }} {{ $selectedSong }}</div>
                                </div>
                            </div>
                            <div class="pb-2 mb-2">
                                <div class="lg:text-20px font-bold text-blue-850">{{ __('Kontaktinė informacija apie Jus') }}</div>
                                <div>
                                    <div>{{ $customerName }}</div>
                                    <div>{{ __('Telefono numeris') }}: {{ $customerPhone }}</div>
                                    @if(!empty($customerEmail))
                                        <div>{{ __('El. paštas') }}: {{ $customerEmail }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 mt-90px">
                            <button wire:click.prevent="next(2)" class="inline-flex items-center justify-center text-white py-2 px-50px md:px-60px text-17px md:text-25px font-bold rounded-15px bg-gray-450 text-white">
                                {{ __('Atgal') }}
                            </button>
                            <button wire:click.prevent="next(4)" class="inline-flex items-center justify-center text-white py-2 px-50px md:px-60px text-17px md:text-25px font-bold rounded-15px bg-blue-850 text-white">
                                {{ __('Patvirtinti') }}
                            </button>
                        </div>
                    </div>
                    <div class="h-328px lg:h-auto lg:flex-1 bg-cover" style="background-image: url({{ asset('images/shutterstock_1733476862.jpg') }})">

                    </div>
                </div>
            @endif

            @if($currentStep == 4)
                <div class="flex flex-col lg:flex-row">
                    <div class="flex flex-col justify-center lg:flex-1 py-50px px-70px text-center">
                        <div class="lg:pt-140px">
                            <div class="text-45px leading-tight lg:text-60px text-blue-850 font-bold mb-4">{{ __('Jūsų registracija') }} <span class="text-green-1">{{ __('priimta') }}</span></div>
                            <div class="text-20px font-light">Netrukus su jumis susisieksime jūsų nurodytu kontaktu, suderinti vizito detalių</div>
                            <div class="mt-100px lg:mt-200px italic text-20px">
                                <a href="{{ url('/') }}" class="flex items-center justify-center">
                                    <span>{{ __('Grįžti į pradinį puslapį') }}</span>
                                    <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="10.658" height="18.316" viewBox="0 0 10.658 18.316"><path d="M1729.983,21.982l7.037,7.037,7.037-7.037" transform="translate(-19.86 1746.178) rotate(-90)" fill="none" stroke="#0B4784" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="h-328px lg:h-auto lg:flex-1 bg-cover" style="background-image: url({{ asset('images/shutterstock_1775154089.jpeg') }})">

                    </div>
                </div>
            @endif

            @if($hasErrors)
                <div class="px-8 pb-4 lg:pb-50px lg:px-70px text-red-500">
                    {{ __('Klaida: užpildykite visus privalomus laukus.') }}
                    @foreach($errorMessages as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
