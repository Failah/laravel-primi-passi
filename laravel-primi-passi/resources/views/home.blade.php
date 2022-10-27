@php

    $links = ['Home', 'Credits', 'Infos'];

@endphp

@foreach ($links as $item)
    <h2> {{ $item }} </h2>
@endforeach
