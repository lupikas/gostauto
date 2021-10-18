<section class="section section-registration bg-gray-200 bg-cover" style="background-image: url('{{ asset('images/register_bg.png') }}')">
    <div class="container relative">
        <img class="absolute bottom-0 hidden sm:block z-30 w-400px lg:w-700px xl:w-900px xxl:w-auto right-0 -mb-45px md:-mb-60px" src="{{ asset('images/register_figures.png') }}" alt="">
        <h2 class="section-heading">{{ __('Registracija') }}</h2>
        <div class="text-20px text-gray-450 mb-8">Pasirinkite jums patogiausią registracijos vizitui ar konsultacijai pas gydytoją būdą
</div>
        <div class="flex flex-col space-y-8">
            <div class="relative lg:w-530px lg:min-h-350px bg-gray-500 p-30px lg:p-50px rounded-30px text-white bg-cover" style="background-image: url('{{ asset('images/patern_1.jpeg') }}')">
                <h3 class="text-30px lg:text-50px font-bold">{{ __('Internetu') }}</h3>
                <div class="text-15px">Pasirinkite planuojamą procedūrą, patogų laiką bei mėgstamą dainą. Viskuo kitu pasirūpinsime mes 
</div>
                <a href="#" class="inline-block lg:absolute lg:left-0 lg:bottom-0 lg:ml-30px lg:ml-50px lg:mb-30px lg:mb-50px mt-4 lg:mt-0 bg-white text-blue-850 py-3 px-50px md:px-60px text-17px md:text-25px font-bold rounded-15px">{{ __('Registruotis') }}</a>
            </div>
            <div class="lg:w-530px lg:min-h-350px bg-gray-500 p-30px lg:p-50px rounded-30px text-white">
                <h3 class="text-30px lg:text-50px font-bold">{{ __('Telefonu') }}</h3>
                <div class="text-15px">Su malonumu atsakysime į visus klausimus, užregistruosime kitam vizitui ar padėsime rasti tinkamiausią gydytoją
</div>
                <div class="flex flex-col space-y-1 text-24px lg:text-30px font-bold mt-4">
                    <?php $main_phone_number = nova_get_setting('main_phone_number'); ?>
                    <a href="tel:{{ $main_phone_number }}">{{ $main_phone_number }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
