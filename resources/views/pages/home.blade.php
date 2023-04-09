@extends('my-layouts.app')

@section('content')
    <div class="home-page">

        <div class="home-page__image-block">
            <img src="{{ Storage::url('static/main.jpg') }}" alt="home_image">
        </div>

        <main class="home-page__main">
            <h1 class="home-page__title">
                Выбери свой самолёт..
            </h1>

            @if($categories)
                <ul class="home-page__category-list">
                    @foreach($categories as $category)
                        <li><a href="{{ route('category', $category->code) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            @endif
        </main>



    </div>
@endsection