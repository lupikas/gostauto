@if(!$doctors->isEmpty())
    <div class="container">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-14px">
            @foreach($doctors as $doctor)
                <?php $first_media_url = $doctor->getFirstMediaUrl('doctors', 'large'); ?>
                <div>
                    <a href="{{ route('doctor', $doctor) }}" class="doctor bg-center h-260px sm:h-350px lg:h-436px" style="background-image: url('{{ !empty($first_media_url) ? $first_media_url : 'https://via.placeholder.com/400x430' }}')">
                        <div class="hidden absolute bg-blue-850 text-white bottom-0 right-0 w-60px h-60px lg:flex lg:items-center lg:justify-center rounded-tl-20px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.658" height="18.316" viewBox="0 0 10.658 18.316"><path d="M1729.983,21.982l7.037,7.037,7.037-7.037" transform="translate(-19.86 1746.178) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
                        </div>
                        <div class="absolute lg:hidden bottom-0 left-0 w-full py-2 bg-blue-850 text-white flex flex-col items-center justify-center font-bold">
                            <div>{{ $doctor->title }}</div>
                            <div class="font-light">{{ $doctor->specialty }}</div>
                        </div>
                    </a>
                    <div class="hidden lg:block my-4">
                        <div class="text-blue-850 uppercase font-bold text-30px leading-tight">{{ $doctor->title }}</div>
                        <div class="text-20px font-light">{{ $doctor->specialty }}</div>
                    </div>
                    <a href="{{ route('doctor', $doctor) }}" class="hidden lg:flex items-center">
                        <span class="mr-2 text-15px italic text-gray-450">{{ __('Plačiau apie gydytoją') }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17"><g><g transform="rotate(-90 5 7.5)"><path fill="none" stroke="#0b4784" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="3" d="M-2.018 4.018v0l7.037 7.037v0l7.036-7.037v0"/></g></g></svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endif
