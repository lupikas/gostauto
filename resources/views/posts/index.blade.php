@extends('layouts.inner')

@section('content')
    <div class="bg-white pt-70px pb-100px">
        <div class="container">
            <h2 class="section-heading">{{ __('Informatyvu') }}</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                @include('partials.content-posts')
            </div>
            <div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
