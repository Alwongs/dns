@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">Категории</h1>

    <ul class="category-list">
        @foreach($categories as $category)
            <li>

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