<style>
    body {
        margin: 0;
        padding: 0;
    }

    #navbar {
        width: 100%;
        display: flex;
        justify-content: center;
        column-gap: 50px;
        background-color: bisque;
    }

    a {
        color: red;
        text-transform: capitalize;
        font-size: 2.5rem;
        padding: 10px 0px;
    }
</style>


@php

    $links = ['home', 'infos', 'credits'];

@endphp

<div id="navbar">
    @foreach ($links as $link)
        <a href=""> {{ $link }} </a>
    @endforeach
</div>
