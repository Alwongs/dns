@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">Категории</h1>

    <ul class="category-list container container__width-110">
        @foreach($categories as $category)
            <li class="category-list__item">
                <div class="category-list__item-image">
                    <img src="{{ Storage::url($category->image) }}" alt="image">
                </div>

                <a href="{{ route('category', $category->code) }}">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>

@endsection