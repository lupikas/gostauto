@extends('layouts.home')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper@6.4.10/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script src="https://unpkg.com/swiper@6.4.10/swiper-bundle.min.js"></script>
@endpush

@section('content')
    @include('partials.hero')
    @include('partials.doctors')
    @include('partials.procedures-slider')
    @include('partials.feedback')
    @include('partials.registration')
    @include('partials.blog')
    @include('partials.footer')
@endsection
