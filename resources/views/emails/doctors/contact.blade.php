@component('mail::message')
# Užklausa daktarui: {{ $doctor->title }}

<strong>Užklausos duomenys:</strong>
Kliento vardas: {{ $data['name'] }}<br>
Kliento el.paštas: {{ $data['email'] }}<br>
Žinutė: {{ $data['message'] }}<br>

Dėkojame,<br>
{{ config('app.name') }}
@endcomponent
