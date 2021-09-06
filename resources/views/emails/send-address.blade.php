@component('mail::message')
# Informace o adrese

@foreach(array_keys($address->toArray()) as $item)

{{$item}} : {{$address->$item}}

@endforeach

Děkujeme,<br>
{{ config('app.name') }}
@endcomponent
