@extends('layouts.inner')

@section('content')
    <div class="single-post">
        <main class="lg:relative bg-gray-100">
            <div class="mx-auto max-w-1640px w-full pt-16 pb-20 px-4 md:px-0 text-center lg:py-12 lg:text-left">
                <div class="lg:w-3/5 sm:px-4 xxl:px-0">
                    <h1 class="text-45px font-bold text-gray-450 leading-xtight">{{ $post->title }}</h1>

                    <div class="prose max-w-full text-20px font-light text-gray-450 leading-tight mt-20px pb-12 mb-12">
                        {!! $post->desc !!}
                    </div>

                    <div class="flex w-full space-x-12" style="max-width: 684px">
                        <a href="#" class="inline-flex items-center justify-center text-white py-4 px-50px md:px-60px text-17px md:text-25px font-bold rounded-15px bg-blue-850">
                            <span class="text-15px font-medium">{{ __('Registruotis konsultacijai') }}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-2/5 lg:h-full">
                <?php $first_media_url = $post->getFirstMediaUrl('posts', 'large'); ?>
                <img class="absolute inset-0 w-full h-full object-cover" src="{{ !empty($first_media_url) ? $post->getFirstMediaUrl('posts', 'large') : 'https://via.placeholder.com/960' }}" alt="">
            </div>
        </main>
        <div class="bg-white py-50px text-gray-450">
            <div class="container">
                <div class="wysiwyg-content">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
        
        <div class="my-50px md:my-100px">
            <div class="container">
                <h2 class="text-30px md:text-45px font-bold text-gray-450 leading-tight mb-10">Susiję gydytojai</h2>
            
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
                    <div class="absolute lg:hidden bottom-0 left-0 w-full py-2 bg-blue-850 text-white flex flex-col items-center justify-center font-bold">
                        <div>{{ $doctor->title }}</div>
                        <div class="font-light">{{ $doctor->specialty }}</div>
                    </div>
                </a>
            @endforeach
            </div>
        </div>
        </div>
        @include('partials.recomended-doctors')
    </div>
@endsection
