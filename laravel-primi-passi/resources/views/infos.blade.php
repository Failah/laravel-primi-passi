<style>
    #infos {
        height: 100%;
        background-color: darkcyan;
    }

    #infos h1 {
        text-align: center;
        padding-top: 100px;
        color: white;
    }
</style>

@php
    @include_once __DIR__ . 'header.blade.php';
@endphp

@component('header')
@endcomponent

<div id="infos">
    <h1>THIS IS THE INFOS SECTION</h1>
</div>
