@extends('layouts.inner')

@section('content')
    <div class="single-procedure">
        <main class="lg:relative bg-gray-100">
            <div class="mx-auto max-w-1640px w-full pt-16 pb-20 px-4 md:px-0 text-center lg:py-12 lg:text-left">
                <div class="lg:w-1/2 sm:px-4 xxl:px-0">
                    <h1 class="text-45px font-bold text-gray-450 leading-tight">{{ $procedure->title }}</h1>

                    <div class="text-20px font-light text-gray-450 leading-tight mt-20px pb-12 mb-12 border-b border-gray-450" style="text-align: justify;">
                        {!! $procedure->desc !!}
                    </div>

                    @if(!$procedure->list->isEmpty())
                        <div class="flex flex-col space-y-16 mb-20" style="text-align: justify;">
                            @foreach($procedure->list as $list_item)
                                <div>
                                    <div class="text-blue-850 text-25px font-medium mb-2">{{ getRepeaterTrans($list_item->title) }}</div>
                                    <div class="text-20px font-light text-gray-450 leading-tight" style="text-align: justify;">{!! getRepeaterTrans($list_item->desc) !!}</div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <div class="flex justify-around w-full space-x-12" style="max-width: 684px">
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center flex-1 text-white py-4 px-50px md:px-60px text-17px md:text-25px font-bold rounded-15px bg-blue-850">
                            <span class="text-15px font-medium">{{ __('Registruotis konsultacijai') }}</span>
                        </a>
                        <a href="{{ route('prices') }}" class="inline-flex items-center justify-center flex-1 text-white py-4 px-50px md:px-60px text-17px md:text-25px font-bold rounded-15px bg-gray-450">
                            <span class="text-15px font-medium">{{ __('Žiūrėti kainas') }}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-2/5 lg:h-full">
                <?php $first_media_url = $procedure->getFirstMediaUrl('procedures', 'large'); ?>
                <img class="absolute inset-0 object-cover" src="{{ !empty($first_media_url) ? $procedure->getFirstMediaUrl('procedures', 'large') : 'https://via.placeholder.com/960' }}" alt="">
            </div>
        </main>

        @if(!$procedure->possibilities->isEmpty())
            <div style="padding-top: 25px;">
                <div class="container">
                    <h2 class="text-30px md:text-45px font-bold text-gray-450 leading-tight mb-10">Galimybės</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
                        @foreach($procedure->possibilities as $possibility)
                           <!-- <div class="flex flex-col justify-between">
                                <div class="mb-8">
                                    <div class="text-blue-850 text-18px sm:text-25px font-medium mb-2">{{ getRepeaterTrans($possibility->title) }}</div>
                                    <div class="text-gray-450 sm:text-20px font-light">{!! getRepeaterTrans($possibility->desc) !!}</div>
                                </div>-->
                                <div x-data="{show:false}" class="mb-20px">
                                <button type="button" @click.prevent="show = !show" class="flex outline-none focus:outline-none relative bg-white z-20 items-center justify-between w-full text-left text-17px md:text-20px font-light border border-gray-450 rounded-20px py-3 pl-8">
                                    <span class="mr-4">{{ getRepeaterTrans($possibility->title) }}</span>
                                    <img x-show="!show" src="{{ asset('images/plus.svg') }}" class="mr-6 w-4 md:w-auto" alt="">
                                    <img x-show="show" src="{{ asset('images/minus.svg') }}" class="mr-6 w-4 md:w-auto" alt="">
                                </button>
                                <div x-show="show" class="bg-gray-100 p-8 pt-14 pb-16 text-17px md:text-20px font-light rounded-b-20px md:leading-tight -mt-8">
                                    <?php $test = getRepeaterTrans($possibility->desc); ?>
                                    <div>{!!html_entity_decode($test)!!} </div>
                                </div>
                                @if(!empty($possibility->video))
                                    <video class="w-full h-230px rounded-20px" controls loop muted>
                                        <source src="{{ \Illuminate\Support\Facades\Storage::url($possibility->video) }}" type="video/mp4">
                                    </video>
                                @endif
                            </div>
                            
                        @endforeach
</div></div>


                <div class="container">
                    <div class="text-20px text-gray-450 md:leading-tight" style="text-align: justify;">
                        @foreach($procedure->list as $list_items)
                        {!! getRepeaterTrans($list_items->long_title) !!}
                        
                            {!! getRepeaterTrans($list_items->long_text) !!}
                        
                        
                        @endforeach
                        </div>
<div style="padding-top: 25px;">
                <div class="container">
                        @if(!$procedure->after_procedure->isEmpty())
                            <div class="bg-gray-100 rounded-20px col-span-1 sm:col-span-2 flex flex-col lg:flex-row overflow-hidden">
                                    <div class="flex-none p-12 lg:w-2/5">
                                        <div class="text-blue-850 text-25px font-medium">{{ __('Po procedūros') }}</div>
                                        <div class="border-b-2 border-blue-850 w-45px my-4"></div>
                                        <div class="flex flex-col space-y-2 text-20px font-light text-gray-450">
                                            <ol>
                                            @foreach($procedure->after_procedure as $line)
                                                <li>{{ getRepeaterTrans($line->title) }}</li><br>
                                            @endforeach
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <img class="object-cover w-full h-full" src="{{ asset('images/Straumann_Group_661778503.jpg') }}" alt="">
                                    </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endif

        @if(!$procedure->faq->isEmpty())
            <div style="padding-top: 25px;">
                <div class="container">
                    <h2 class="text-30px md:text-45px font-bold text-gray-450 leading-tight">Turite klausimu? mes jums atsakysime</h2>
                    <div class="text-20px text-gray-450 md:leading-tight" style="max-width:500px;">
                        
                    </div>
                    <div class="my-8">
                        @foreach($procedure->faq as $faq)
                            <div x-data="{show:false}" class="mb-20px">
                                <button type="button" @click.prevent="show = !show" class="flex outline-none focus:outline-none relative bg-white z-20 items-center justify-between w-full text-left text-17px md:text-20px font-light border border-gray-450 rounded-20px py-3 pl-8">
                                    <span class="mr-4">{{ getRepeaterTrans($faq->question) }}</span>
                                    <img x-show="!show" src="{{ asset('images/plus.svg') }}" class="mr-6 w-4 md:w-auto" alt="">
                                    <img x-show="show" src="{{ asset('images/minus.svg') }}" class="mr-6 w-4 md:w-auto" alt="">
                                </button>
                                <div x-show="show" class="bg-gray-100 p-8 pt-14 pb-16 text-17px md:text-20px font-light rounded-b-20px md:leading-tight -mt-8">
                                    {!! getRepeaterTrans($faq->answer) !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        
      <!--  @if(!$procedure->list->isEmpty())
        <main class="lg:relative">
            <div class="mx-auto max-w-1640px ">
                @foreach($procedure->list as $list_item)
                <div class="sm:px-4 xxl:px-0">
                    <h1 class="text-45px font-bold text-gray-450 leading-tight">{!! getRepeaterTrans($list_item->long_title) !!}</h1>
                    <div class="text-20px font-light text-gray-450 leading-tight mt-20px pb-12 mb-12">
                        {!! getRepeaterTrans($list_item->long_text) !!}
                    </div>
                </div>
                @endforeach
            </div>
        </main>
        @endif-->

 <div style="">
            <div class="container">
                <h2 class="text-30px md:text-45px font-bold text-gray-450 leading-tight mb-10">Paslaugą atlieka šie gydytojai</h2>
            
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-14px">
            @foreach($doctors as $doctor)
                <?php $first_media_url = $doctor->getFirstMediaUrl('doctors', 'large'); ?>
                <a href="{{ route('doctor', $doctor) }}"
                    @mouseenter="activeDoctorName='{{ $doctor->title }}'; activeDoctorSpec='{{ $doctor->specialty }}'"
                    class="doctor bg-center h-260px sm:h-350px lg:h-436px"
                    style="background-image: url('{{ !empty($first_media_url) ? $doctor->getFirstMediaUrl('doctors', 'large') : 'https://via.placeholder.com/400x430' }}')">
                    <div class="hidden absolute bg-blue-850 text-white bottom-0 right-0 w-60px h-60px lg:flex lg:items-center lg:justify-center rounded-tl-20px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.658" height="18.316" viewBox="0 0 10.658 18.316"><path d="M1729.983,21.982l7.037,7.037,7.037-7.037" transform="translate(-19.86 1746.178) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full py-2 bg-blue-850 text-white flex flex-col items-center justify-center font-bold">
                        <div>{{ $doctor->title }}</div>
                        <div class="font-light">{{ $doctor->specialty }}</div>
                    </div>
                </a>
            @endforeach
            </div>
        </div>
        </div>

        @if(!$procedure->prices->isEmpty())
            <div style="padding-top: 25px;">
                <div class="container">
                    <h2 class="text-30px md:text-45px font-bold text-gray-450 leading-tight">Kainos</h2>
                    <div class="text-20px text-gray-450 md:leading-tight">
                        Pateikiame preliminarias paslaugų kainas. Tiksli kaina nustatoma konsultacijos pas gydytoją ar procedūros metu, įvertinus konkretų paciento atvejį. Kainos tinklapyje gali nesutapti su klinikos kainoraščiu, todėl visais atvejais vadovautis klinikoje esančiu kainoraščiu.

                    </div>
                    <div class="bg-gray-100 text-gray-450 rounded-20px p-6 md:p-8 mt-8">
                        <div class="flex justify-between border-b border-gray-500 md:text-20px pb-2 mb-4">
                            <div>{{ __('Pavadinimas') }}</div>
                            <div>{{ __('Kaina') }}</div>
                        </div>

                        <div class="mb-16">
                            @foreach($procedure->prices as $price)
                                <div class="flex justify-between border-b border-gray-300 md:text-20px pb-2 mb-4">
                                    <div class="font-light pr-4">{{ getRepeaterTrans($price->title) }}</div>
                                    <div class="text-right">{{ $price->price }}</div>
                                </div>
                            @endforeach
                        </div>

                       
                    </div>
                </div>
            </div>
        @endif

        <div class="lg:relative bg-gray-100 min-h-490px">
            <div class="relative w-full md:h-96 lg:absolute lg:inset-y-0 lg:left-0 lg:w-2/5 lg:h-full bg-cover flex items-center justify-center lg:justify-end lg:pr-16 xxl:pr-0" style="background-image: url({{ asset('images/patern_1.jpeg') }})">
                <div class="max-w-550px px-4 py-50px lg:py-100px">
                    <div class="text-30px xl:text-45px font-bold text-white leading-tight mb-3">Pasikonsultuokite dėl tinkamiausio gydymo būdo su mūsų <br>gydytojais</div>
                    <div class="text-20px font-light text-white mb-50px" style="max-width:430px">Užsiregistruokite vizitui ar konsultacijai pas odontologą Goštauto klinikoje </div>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center flex-1 text-white py-4 px-50px md:px-60px text-17px md:text-25px font-bold rounded-15px bg-blue-850">
                        <span class="text-15px font-medium">{{ __('Registruotis vizitui') }}</span>
                    </a>
                </div>
                <div class="section-circle right-0" style="background-color:#fafafa;margin-right: -52.5px"></div>
            </div>
            <div class="mx-auto max-w-1640px w-full text-center lg:text-left flex justify-end">
                <div class="w-full lg:w-1/2 bg-cover">
                    <img class="lg:absolute inset-0 left-auto right-0 w-full lg:w-3/5 h-full object-cover" src="{{ asset('images/register_block_bg.jpg') }}" alt="">
                </div>
            </div>
        </div>

        @include('partials.recomended-doctors')
    </div>
@endsection
