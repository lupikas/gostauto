@extends('layouts.inner')

@section('content')
    <div class="bg-white pt-70px pb-100px">
        <div class="container">
            @livewire('register', ['procedures' => $procedures])
        </div>
    </div>
@endsection
