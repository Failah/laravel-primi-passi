<style>
    #credits {
        height: 100%;
        background-color: purple;
    }

    #credits h1 {
        text-align: center;
        padding-top: 100px;
        color: orangered;
    }
</style>

@php
    @include_once __DIR__ . 'header.blade.php';
@endphp

@component('header')
@endcomponent

<div id="credits">
    <h1>THIS IS THE CREDITS ZONE</h1>
</div>
