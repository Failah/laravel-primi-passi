<style>
    body {
        margin: 0;
        padding: 0;
    }

    #navbar {
        width: 100%;
        display: flex;
        justify-content: center;
        column-gap: 20px;
        background-color: bisque;
    }

    h2 {
        color: red;
    }
</style>

@php

    $links = ['Home', 'Infos', 'Credits'];

@endphp

<div id="navbar">
    @foreach ($links as $item)
        <h2> {{ $item }} </h2>
    @endforeach
</div>
