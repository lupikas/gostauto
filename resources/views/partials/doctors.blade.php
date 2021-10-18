@if(!$doctors->isEmpty())
    <section
    x-data="{
        'activeDoctor':0,
        'activeDoctorName': '{{ $doctors->first()->title }}',
        'activeDoctorSpec': '{{ $doctors->first()->specialty }}',
    }"
    class="section section-doctors bg-cover"
    style="background-image: url('{{ asset('images/gyditojai_bg.png') }}')">
    <div class="container">
        <h2 class="section-heading">{{ __('Gydytojai') }}</h2>

        <div class="my-30px md:my-50px">
            <div class="hidden lg:flex align-bottom justify-between relative mb-8">
                <div>
                    <div class="uppercase text-30px md:text-45px font-bold text-blue-850 leading-none" x-html="activeDoctorName"></div>
                    <div class="text-30px font-light text-gray-450" x-html="activeDoctorSpec"></div>
                </div>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-14px">
                @foreach($doctors as $i => $doctor)
                    <?php $first_media_url = $doctor->getFirstMediaUrl('doctors', 'large'); ?>
                    <a href="{{ route('doctor', $doctor) }}"
                       @mouseenter="activeDoctor={{ $i }}; activeDoctorName='{{ $doctor->title }}'; activeDoctorSpec='{{ $doctor->specialty }}'"
                       class="doctor bg-center h-260px sm:h-350px lg:h-436px"
                       x-bind:class="{'active':activeDoctor==<?php echo $i ?>}"
                       style="background-image: url('{{ !empty($first_media_url) ? $doctor->getFirstMediaUrl('doctors', 'large') : 'https://via.placeholder.com/400x430' }}')">
                        <div class="hidden absolute bg-blue-850 text-white bottom-0 right-0 w-60px h-60px lg:flex lg:items-center lg:justify-center rounded-tl-20px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.658" height="18.316" viewBox="0 0 10.658 18.316"><path d="M1729.983,21.982l7.037,7.037,7.037-7.037" transform="translate(-19.86 1746.178) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
                        </div>
                        <div class="absolute lg:hidden bottom-0 left-0 w-full py-2 bg-blue-850 text-white flex flex-col items-center justify-center font-bold">
                            <div>{{ $doctor->title }}</div>
                            <div class="font-light">{{ $doctor->specialty }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="md:text-20px font-light text-gray-450 my-6" style="max-width: 1000px">
                Siekiant suteikti ilgalaikę burnos sveikatą, kruopščiai su pacientu aptariame poreikius ir sudarome detalų gydymo planą. Susipažinkite su Goštauto klinikos gydytojais odontologais.
            </div>
        </div>

        <x-main-button url="{{ route('doctors') }}">
            {{ __('Visi gydytojai') }}
        </x-main-button>
    </div>
</section>
@endif
