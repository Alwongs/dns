@extends('my-layouts.app')

@section('content')
    <div class="home-page">

        <h1 class="app-page__title">
            Заходите, выбирайте..
        </h1>

        <div class="container container__width-70">
            <img src="{{ Vite::asset('resources/images/main.jpg') }}" alt="home_image">
        </div>

    </div>
@endsection