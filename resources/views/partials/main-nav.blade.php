<div x-data="{'show_mobile_menu':false, 'show_phones':false, 'show_search':false, 'show_lang': false}">
    <div class="main-menu flex items-center justify-between pt-4 md:pt-35px">
        <div class="flex-none w-185px md:w-auto lg:pt-4">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="">
            </a>
        </div>
        <div class="flex items-end justify-between space-x-8">
            <div class="mb-1 hidden xl:block">
                <nav class="flex text-17px space-x-8 xxl:space-x-55px">
                    <a href="{{ route('doctors') }}" class="font-medium text-gray-450 hover:text-blue-850">
                        {{ __('Gydytojai') }}
                    </a>
                    <a href="{{ route('procedures') }}" class="font-medium text-gray-450 hover:text-blue-850">
                        {{ __('Paslaugos') }}
                    </a>
                    <a href="{{ route('prices') }}" class="font-medium text-gray-450 hover:text-blue-850">
                        {{ __('Kainos') }}
                    </a>
                    @if(nova_get_setting('show_feedback'))
                        <a href="{{ route('feedback') }}" class="font-medium text-gray-450 hover:text-blue-850">
                            {{ __('Atsiliepimai') }}
                        </a>
                    @endif
                    <a href="{{ route('posts') }}" class="font-medium text-gray-450 hover:text-blue-850">
                        {{ __('Informatyvu') }}
                    </a>
                    <div x-data="{ kontaktaiOpen: false }" @click.away="kontaktaiOpen = false" class="relative">
                        <a href="{{ route('contacts') }}" @mouseenter="kontaktaiOpen = true" x-bind:class="{'text-blue-850':kontaktaiOpen}" class="group bg-transparent text-gray-450 inline-flex items-center font-medium hover:text-blue-850 focus:outline-none">
                            <span>Kontaktai</span>
                            <svg x-bind:class="{'text-gray-450':kontaktaiOpen}" class="ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-450" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <div x-show="kontaktaiOpen"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-1"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-1"
                             @mouseleave="kontaktaiOpen = false"
                             class="absolute z-10 -left-1/2 transform -translate-x-1/3 w-200px mt-3 px-2 sm:px-0">
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-6 text-right">
                                    
                                    @foreach($pages as $page)
                                    @if($page->in_menu == 1)
                                        <a href="/{{$page->slug}}" class="-m-3 block">
                                            <p class="font-medium text-gray-450 hover:text-blue-850">
                                                {{$page->name}}
                                            </p>
                                        </a>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="hidden lg:block">
                <div class="text-gray-450 font-light text-12px text-center mb-1">{{ __('Registruotikitės vizitui') }}</div>
                @include('partials.register-buttons')
            </div>
            <div class="hidden relative lg:flex items-center space-x-30px">
                <button @click.prevent="show_search = !show_search;" id="trigger_search" x-bind:class="{'bg-gray-450':!show_search, 'bg-blue-850':show_search}" class="w-36px h-36px transition-all hover:bg-blue-850 rounded-lg outline-none focus:outline-none inline-flex items-center justify-center">
                    <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19"><g><g><path d="M8.472.764a7.095 7.095 0 0 1 7.086 7.087c0 1.719-.615 3.297-1.637 4.526l4.543 4.511a.675.675 0 0 1-.951.958l-4.55-4.518a7.054 7.054 0 0 1-4.491 1.61 7.09 7.09 0 0 1-3.47-.906.675.675 0 1 1 .662-1.177 5.738 5.738 0 0 0 8.545-5.004 5.743 5.743 0 0 0-5.737-5.737A5.743 5.743 0 0 0 2.735 7.85c0 .996.259 1.978.75 2.838a.675.675 0 0 1-1.173.668A7.088 7.088 0 0 1 8.472.764z"/><path stroke-miterlimit="20" stroke-width=".4" d="M8.472.764a7.095 7.095 0 0 1 7.086 7.087c0 1.719-.615 3.297-1.637 4.526l4.543 4.511a.675.675 0 0 1-.951.958l-4.55-4.518a7.054 7.054 0 0 1-4.491 1.61 7.09 7.09 0 0 1-3.47-.906.675.675 0 1 1 .662-1.177 5.738 5.738 0 0 0 8.545-5.004 5.743 5.743 0 0 0-5.737-5.737A5.743 5.743 0 0 0 2.735 7.85c0 .996.259 1.978.75 2.838a.675.675 0 0 1-1.173.668A7.088 7.088 0 0 1 8.472.764z"/></g></g></svg>
                </button>
                <div class="relative text-12px" @click.away="show_lang = false">
                    <button @click.prevent="show_lang = !show_lang" x-bind:class="{'bg-gray-450':!show_lang,'bg-blue-850':show_lang}" class="z-30 relative transition-all hover:bg-blue-850 w-36px h-36px outline-none focus:outline-none text-white rounded-lg inline-flex items-center justify-center">
                        <span class="uppercase">{{ LaravelLocalization::getCurrentLocale() }}</span>
                        <svg class="h-3 w-3 text-white group-hover:text-gray-450" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul x-show="show_lang" class="absolute w-full bg-white text-center text-gray-450 rounded-b-lg py-2 pt-3 -mt-2 uppercase">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                @if(LaravelLocalization::getCurrentLocale() != $localeCode)
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $localeCode }}
                                    </a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{-- Mobile menu trigger --}}
            <button type="button"
                    @click.prevent="show_mobile_menu = true"
                    class="xl:hidden p-2 inline-flex items-center justify-center text-gray-400 focus:outline-none"
                    id="mobile_menu_trigger" aria-haspopup="true"
                    x-bind:aria-expanded="show_mobile_menu">
                <span class="sr-only">{{ __('Atidaryti meniu') }}</span>
                <svg class="h-6 w-6" x-description="Heroicon name: menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            {{-- end Mobile menu trigger --}}
        </div>
    </div>
    {{-- Mobile menu --}}
    <div x-cloak
         x-bind:class="{'top-0':show_mobile_menu, 'opacity-100':show_mobile_menu, '-top-full':!show_mobile_menu, 'pointer-events-none':!show_mobile_menu, 'pointer-events-auto':show_mobile_menu}"
         class="xl:hidden fixed z-50 opacity-0 bg-blue-850 text-white left-0 top-0 w-screen h-screen transition-all duration-300">
        <div class="text-center mt-4">
            <button type="button"
                    @click="show_mobile_menu = false"
                    class="p-2 inline-flex items-center justify-center text-white focus:outline-none"
                    id="mobile_menu_close_trigger"
                    aria-haspopup="true"
                    x-bind:aria-expanded="show_mobile_menu">
                <span class="sr-only">{{ __('Atidaryti meniu') }}</span>
                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="my-4">
            <div class="text-white font-light text-12px text-center mb-1">{{ __('Pasirinkite Jums patogia registracija') }}</div>
            <div class="relative w-260px mx-auto my-1">
                <div class="relative flex text-white text-center text-15px font-medium">
                    <a href="#" @click.prevent="show_phones = !show_phones" :class="{'bg-blue-850 text-white': show_phones}" class="inline-block py-2 flex-1 border rounded-l-md border-white border-r-0">{{ __('Telefonu') }}</a>
                    <a href="{{ route('register') }}" class="inline-block py-2 flex-1 border rounded-r-md bg-white text-blue-850 border-white">
                        {{ __('Internetu') }}
                    </a>
                </div>
                <div x-show="show_phones" @click.away="show_phones = false" style="display: none" class="absolute left-0 w-260px bg-gray-100 rounded-b-md p-4 text-blue-850 text-20px font-bold flex flex-col items-center space-y-1 -mt-1">
                    <a href="tel:+37067777777">+37067777777</a>
                    <a href="tel:+37067777777">+37067777777</a>
                    <a href="tel:+37067777777">+37067777777</a>
                </div>
            </div>
        </div>
        <div class="my-8 flex flex-col space-y-4">
            <a href="{{ route('doctors') }}" class="block text-center font-medium text-white">
                {{ __('Gydytojai') }}
            </a>
            <a href="{{ route('procedures') }}" class="block text-center font-medium text-white">
                {{ __('Paslaugos') }}
            </a>
            <a href="{{ route('prices') }}" class="block text-center font-medium text-white">
                {{ __('Kainos') }}
            </a>
            <a href="{{ route('feedback') }}" class="block text-center font-medium text-white">
                {{ __('Atsiliepimai') }}
            </a>
            <a href="{{ route('posts') }}" class="block text-center font-medium text-white">
                {{ __('Informatyvu') }}
            </a>
            <div x-data="{ kontaktaiMobileOpen: false }" @click.away="kontaktaiMobileOpen = false" class="relative text-center">
                <button @click.prevent="kontaktaiMobileOpen = !kontaktaiMobileOpen" type="button" x-bind:class="{'text-gray-100':kontaktaiMobileOpen}" class="group bg-transparent text-white inline-flex items-center font-medium hover:text-gray-100 focus:outline-none">
                    <span>Kontaktai</span>
                    <svg x-bind:class="{'text-gray-100':kontaktaiMobileOpen}" class="ml-2 h-5 w-5 text-white group-hover:text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="kontaktaiMobileOpen"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-y-1"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 translate-y-1"
                     class="absolute z-10 w-2/3 left-0 right-0 mx-auto mt-3 px-2 sm:px-0">
                    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-6 text-center">
                            
                                <a href="#" class="-m-3 block">
                                    <p class="font-medium text-gray-450 hover:text-blue-850">
                                        
                                    </p>
                                </a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="flex justify-center space-x-4 uppercase">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $localeCode }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- end Mobile menu --}}

    {{-- Search modal --}}
    <div x-show="show_search" class="fixed top-0 left-0 w-screen h-screen bg-transparent flex flex-col items-center justify-start" style="z-index: 2000">
        <div @click="show_search = false" class="absolute w-full h-full bg-white opacity-95"></div>
        <div class="relative z-50 mt-8 bg-gray-100 px-20px pt-4 pb-0 rounded-20px shadow-lg w-5/6 sm:w-3/4" style="max-width: 800px">
            <div id="searchbox"></div>
            <div class="overflow-scroll mt-4" style="max-height: 800px">
                <div id="search_res" class="mt-4 px-4 pb-12">
                    <div class="mb-4">
                        <div class="text-18px font-medium mb-2">{{ __('Proceduros') }}</div>
                        <div id="hits-1"></div>
                    </div>
                    <div class="mb-4">
                        <div class="text-18px font-medium mb-2">{{ __('Gydytojai') }}</div>
                        <div id="hits-2"></div>
                    </div>
                    <div>
                        <div class="text-18px font-medium mb-2">{{ __('Naujienos') }}</div>
                        <div id="hits-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end Search modal --}}
</div>