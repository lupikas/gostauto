<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @include('partials.head')
</head>
<body class="antialiased">
@include('cookieConsent::index')

@yield('content')

@include('partials.foot')
</body>
</html>
