<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1>Template Classe 89</h1>
        <img src="{{ Vite::asset('resources/img/pluto.webp') }}" alt="" srcset="">
    </div>

</body>

</html>-->

@extends('layouts.app')

@section('page.title')
Home Page Comics
@endsection

@section('page.main')
<div class=" home-img">img</div>


<h1 class="title">Current Series</h1>

<main>
    <div class="container d-flex bd-highlight mb-3 flex-wrap">
        <div class="p-6 bd-highlight carta">img</div>
        <div class="p-6 bd-highlight carta">img</div>
        <div class="p-6 bd-highlight carta">img</div>
        <div class="p-6 bd-highlight carta">img</div>
        <div class="p-6 bd-highlight carta">img</div>
        <div class="p-6 bd-highlight carta">img</div>
        <div class="p-6 bd-highlight carta">img</div>
        <div class="p-6 bd-highlight carta">img</div>
        <div class="p-6 bd-highlight carta">img</div>
        <div class="p-6 bd-highlight carta">img</div>
        <div class="p-6 bd-highlight carta">img</div>
        <div class="p-6 bd-highlight carta">img</div>
    </div>
</main>

@endsection