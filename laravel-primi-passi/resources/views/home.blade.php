<style>
    #home {
        height: 100%;
        background-color: yellow
    }

    #home h1 {
        text-align: center;
        padding-top: 100px;
        color: green;
    }
</style>

@php
    @include_once __DIR__ . 'header.blade.php';
@endphp

@component('header')
@endcomponent

<div id="home">
    <h1>THIS IS THE HOME PAGE</h1>
</div>
