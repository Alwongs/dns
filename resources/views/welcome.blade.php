@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">
        Заходите, выбирайте..
    </h1>

    <div class="home-page__image">
        <img src="{{ Vite::asset('resources/images/main.jpg') }}" alt="">
    </div>

@endsection