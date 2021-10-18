@extends('layouts.inner')

@section('content')
    <div class="single-page">
        <div class="bg-white py-60px">
            <div class="container mx-auto" style="max-width: 800px">
                <h2 class="section-heading">{{ __('Privatumo politika') }}</h2>
                <div class="prose lg:prose-xl my-12">
                    {!! getRepeaterTrans(json_decode(nova_get_setting('privacy_policy'))) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
