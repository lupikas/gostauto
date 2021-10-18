<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.3.1/themes/algolia-min.css" integrity="sha256-HB49n/BZjuqiCtQQf49OdZn63XuKFaxcIHWf0HNKte8=" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" > -->

{!! \Artesaos\SEOTools\Facades\SEOMeta::generate() !!}
{!! \Artesaos\SEOTools\Facades\OpenGraph::generate() !!}

@stack('styles')
@livewireStyles

