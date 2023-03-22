@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">
        {{ $product->name }}
    </h1>

    <div class="product-page">
        <p class="product-page__price">
            Цена: {{ $product->price }}
        </p>

        <div class="product-page__image">
            <img src="{{ Storage::url($product->image) }}" alt="">
        </div>

        <p class="product-page__description">
            {{ $product->description }}
        </p>  

        <a href="{{ route('basket') }}" class="app-btn btn-green">В корзину</a>  
    </div>

@endsection