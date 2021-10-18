@foreach($posts as $post)
    <?php $first_media_url = $post->getFirstMediaUrl('posts', 'large'); ?>
    <div class="flex flex-col justify-end lg:justify-between">
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
