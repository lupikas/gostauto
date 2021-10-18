<!DOCTYPE html>
<html lang="LT">
<head>
    <!--<link rel="stylesheet" href="http://mariusm.lt/gostauto/css/app.css">-->
    <!--<link rel="stylesheet" href="{{ asset('css/style.css') }}" > -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    @include('partials.head')
</head>
<body class="antialiased">
@include('cookieConsent::index')

<div class="bg-gray-50 pb-50px relative z-50">
    <div class="container">
        @include('partials.main-nav')
    </div>
</div>

@yield('content')

@include('partials.footer')

@include('partials.foot')
</body>
</html>
