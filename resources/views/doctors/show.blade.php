@extends('layouts.inner')

@section('content')
    <div class="single-doctor">
        <main class="lg:relative bg-gray-100">
            <div class="mx-auto max-w-1640px w-full pt-16 pb-20 px-4 md:px-0 text-center lg:py-12 lg:text-left">
                <div class="lg:w-1/2 sm:px-4 xxl:px-0">
                    <a href="{{ route('doctors') }}" class="flex items-center mb-20">
                        <img src="{{ asset('images/arrow_left.svg') }}" class="mr-2" alt="">
                        {{ __('Grįžti atgal') }}
                    </a>
                    <h1 class="text-55px font-bold uppercase text-blue-850 leading-tight">{{ $doctor->title }}</h1>
                    <h2 class="text-gray-450 font-light text-30px">{{ $doctor->specialty }}</h2>

                    @if(!empty($doctor->about))
                        <div class="text-20px font-light text-gray-450 leading-tight mt-40px">
                            {!! $doctor->about !!}
                        </div>
                    @endif

                    @if(!empty($doctor->quote))
                        <div class="border-t border-b border-gray-450 text-gray-450 py-4 my-8">
                            <div class="text-20px italic mb-8">{!! $doctor->quote !!}</div>
                            <div class="text-blue-850 text-17px">{{ $doctor->specialty }} {{ $doctor->title }}</div>
                        </div>
                    @endif

                    @if(!$doctor->qualification->isEmpty())
                        <div class="p-8 bg-white bg-cover rounded-20px shadow-lg" style="background-image: url('{{ asset('images/gyditojai_bg.png') }}')">
                            <h3 class="text-blue-850 text-23px">{{ __('Kvalifikacijos kėlimo kursai') }}:</h3>
                            <div class="h-1 w-30px border-b-2 border-blue-850 my-1 mx-auto lg:mx-0"></div>
                            <div class="text-20px font-light text-gray-450 mt-4">
                                <ul>
                                @foreach($doctor->qualification as $qualification)
                                    <li>{{ getRepeaterTrans($qualification->title) }}</li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    @if(!$doctor->scientific_activity->isEmpty())
                        <div class="p-8 bg-white bg-cover rounded-20px shadow-lg my-8" style="background-image: url('{{ asset('images/gyditojai_bg.png') }}')">
                            <h3 class="text-blue-850 text-23px">{{ __('Vykdoma mokslinė veikla') }}:</h3>
                            <div class="h-1 w-30px border-b-2 border-blue-850 my-1 mx-auto lg:mx-0"></div>
                            <div class="text-20px font-light text-gray-450 mt-4">
                                <ul>
                                @foreach($doctor->scientific_activity as $scientific_activity)
                                    <li>{{ getRepeaterTrans($scientific_activity->title) }}</li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-2/5 lg:h-full">
                <?php $first_media_url = $doctor->getFirstMediaUrl('doctors', 'large'); ?>
                <img class="absolute inset-0 w-full  object-cover" src="{{ !empty($first_media_url) ? $doctor->getFirstMediaUrl('doctors', 'large') : 'https://via.placeholder.com/960' }}" alt="">
            </div>
        </main>

        @if(!$doctor->procedures->isEmpty())
            <div class="bg-white py-60px">
                <div class="container">
                    <h2 class="section-heading">{{ __('Gydytojos atliekamos procedūros') }}</h2>
                   <!-- <div class="text-18px lg:text-20px font-light text-gray-450 mb-8" style="max-width: 589px;">
                        {{ __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.') }}
                    </div> -->
                    <div class="grid gap-4 grid-cols-2 lg:grid-cols-4">
                        @foreach($doctor->procedures as $procedure)
                            <a href="{{ route('procedure', $procedure) }}" class="procedure-badge bg-cover bg-gray-100 relative h-full text-gray-450 hover:text-white flex overflow-hidden rounded-20px items-center bg-white pl-6 py-4" style="min-height: 72px;">
                                <h3 class="font-light md:text-21px lg:text-25px leading-tight max-w-100px sm:max-w-150px">{{ $procedure->title }}</h3>
                                <div class="badge-corner absolute bg-gray-450 text-white bottom-0 right-0 w-50px h-full sm:h-50px flex items-center justify-center sm:rounded-tl-20px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.658" height="18.316" viewBox="0 0 10.658 18.316"><path d="M1729.983,21.982l7.037,7.037,7.037-7.037" transform="translate(-19.86 1746.178) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        
        <section class="section section-blog bg-cover" style="background-image: url('{{ asset('images/gyditojai_bg.png') }}')">
            
            <div class="container">
                <h2 class="text-30px md:text-45px font-bold text-gray-450 leading-tight mb-10">Susiję straipsniai</h2>
                
                @php 
                    $postai = count($doctor->posts);
                    
                    
                @endphp
                @if($postai > 3)
                
               <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                                    @foreach($posts as $post)
                                        <?php $first_media_url = $post->getFirstMediaUrl('posts', 'large'); ?>
                                        <div class="flex flex-col justify-end lg:justify-between" >
                                            @if(!empty($first_media_url))
                                                <a href="{{ route('post', $post) }}" class="block w-full bg-cover bg-center h-195px sm:h-328px rounded-30px" style="background-image: url('{{ $first_media_url }}')"></a>
                                            @endif
                                            <div class="my-8">
                                                <a href="{{ route('post', $post) }}">
                                                    <h3 class="blog-post-heading">{{ $post->title }}</h3>
                                                </a>
                                                <div class="md:text-20px text-gray-450 leading-tight mb-30px overflow-ellipsis overflow-hidden">{!! \Illuminate\Support\Str::words(strip_tags($post->desc), 20) !!}</div>
                                                        <a href="{{ route('post', $post) }}" class="inline-flex items-center md:text-20px text-gray-450">
                                                            {{ __('Skaityti daugiau') }}
                                                            <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="10.658" height="18.316" viewBox="0 0 10.658 18.316"><path d="M1729.983,21.982l7.037,7.037,7.037-7.037" transform="translate(-19.86 1746.178) rotate(-90)" fill="none" stroke="#0B4784" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
                                                        </a>
                                                </div>
                                            </div>  
                                    @endforeach
                                </div>
                                
                
                <div x-data="{show:false}" class="mb-20px">
                                <button type="button" @click.prevent="show = !show" class="flex outline-none focus:outline-none relative bg-white z-20 items-center justify-between w-full text-left text-17px md:text-20px font-light border border-gray-450 rounded-20px py-3 pl-8">
                                    <span class="mr-4">Daugiau susijusių straipsnių</span>
                                    <img x-show="!show" src="{{ asset('images/plus.svg') }}" class="mr-6 w-4 md:w-auto" alt="">
                                    <img x-show="show" src="{{ asset('images/minus.svg') }}" class="mr-6 w-4 md:w-auto" alt="">
                                </button>
                                <div x-show="show" class="bg-gray-100 p-8 pt-14 pb-16 text-17px md:text-20px font-light rounded-b-20px md:leading-tight -mt-8">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                                    @foreach($doctor->posts as $post)
                                        <?php $first_media_url = $post->getFirstMediaUrl('posts', 'large'); ?>
                                        <div class="flex flex-col justify-end lg:justify-between" >
                                            @if(!empty($first_media_url))
                                                <a href="{{ route('post', $post) }}" class="block w-full bg-cover bg-center h-195px sm:h-328px rounded-30px" style="background-image: url('{{ $first_media_url }}')"></a>
                                            @endif
                                            <div class="my-8">
                                                <a href="{{ route('post', $post) }}">
                                                    <h3 class="blog-post-heading">{{ $post->title }}</h3>
                                                </a>
                                                <div class="md:text-20px text-gray-450 leading-tight mb-30px overflow-ellipsis overflow-hidden">{!! \Illuminate\Support\Str::words(strip_tags($post->desc), 20) !!}</div>
                                                        <a href="{{ route('post', $post) }}" class="inline-flex items-center md:text-20px text-gray-450">
                                                            {{ __('Skaityti daugiau') }}
                                                            <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="10.658" height="18.316" viewBox="0 0 10.658 18.316"><path d="M1729.983,21.982l7.037,7.037,7.037-7.037" transform="translate(-19.86 1746.178) rotate(-90)" fill="none" stroke="#0B4784" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
                                                        </a>
                                                </div>
                                            </div>  
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                                    @foreach($doctor->posts as $post)
                                        <?php $first_media_url = $post->getFirstMediaUrl('posts', 'large'); ?>
                                        <div class="flex flex-col justify-end lg:justify-between" >
                                            @if(!empty($first_media_url))
                                                <a href="{{ route('post', $post) }}" class="block w-full bg-cover bg-center h-195px sm:h-328px rounded-30px" style="background-image: url('{{ $first_media_url }}')"></a>
                                            @endif
                                            <div class="my-8">
                                                <a href="{{ route('post', $post) }}">
                                                    <h3 class="blog-post-heading">{{ $post->title }}</h3>
                                                </a>
                                                <div class="md:text-20px text-gray-450 leading-tight mb-30px overflow-ellipsis overflow-hidden">{!! \Illuminate\Support\Str::words(strip_tags($post->desc), 20) !!}</div>
                                                        <a href="{{ route('post', $post) }}" class="inline-flex items-center md:text-20px text-gray-450">
                                                            {{ __('Skaityti daugiau') }}
                                                            <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="10.658" height="18.316" viewBox="0 0 10.658 18.316"><path d="M1729.983,21.982l7.037,7.037,7.037-7.037" transform="translate(-19.86 1746.178) rotate(-90)" fill="none" stroke="#0B4784" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
                                                        </a>
                                                </div>
                                            </div>  
                                    @endforeach
                                </div>
                @endif
            </div>
        </section>
<!--
        <div class="lg:relative bg-gray-100">
            <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:left-0 lg:w-2/5 lg:h-full bg-cover flex items-center justify-center lg:justify-end lg:pr-16" style="background-image: url({{ asset('images/patern_1.jpeg') }})">
                <div class="px-4">
                    <div class="text-30px xl:text-45px font-bold text-white leading-tight mb-3" style="max-width:430px">Parašyti tiesiogiai gydytojui atsiliepimą</div>
                    <div class="text-20px font-light text-white" style="max-width:430px">Lorem Ipsum is simply dummy text of
                        the printing and typesetting.</div>
                </div>
                <div class="section-circle right-0" style="margin-right: -58.5px"></div>
            </div>
            <div class="mx-auto max-w-1640px w-full pt-16 pb-20 px-4 md:px-0 text-center md:py-12 lg:text-left flex justify-end">
                <div class="w-full lg:w-1/2 sm:px-4 xxl:px-0 py-100px">
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center text-white py-3 px-40px lg:px-60px text-17px xl:text-25px font-bold rounded-15px bg-blue-850">
                        {{ __('REGISTRACIJA INTERNETU') }}
                    </a>
                </div>
            </div>
        </div>
-->
        @include('partials.recomended-doctors')

    </div>
   <script>
</script>
@endsection
