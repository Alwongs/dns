@extends('my-layouts.app')

@section('content')
    <div class="home-page">

        <h1 class="app-page__title">
            Выбери свой самолёт..
        </h1>

        @if($categories)
            <ul class="home-page__category-list">
                @foreach($categories as $category)
                    <li><a href="{{ route('category', $category->code) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        @endif

        <div class="container container__width-70">
            <img src="{{ Storage::url('static/main.jpg') }}" alt="home_image">
        </div>

    </div>
@endsection