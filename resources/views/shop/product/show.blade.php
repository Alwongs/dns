@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">
        {{ $product->name }}
    </h1>

    <main class="product-page">
        <p class="product-page__category">
            ( {{ $product->category->name }} )
        </p>
        <p class="product-page__price">
            Цена: {{ $product->price }}
        </p>

        <div class="product-page__image">
            <img src="{{ Storage::url($product->image) }}" alt="">
        </div>

        <p class="product-page__description">
            {{ $product->description }}
        </p>  
        @if($product->isAvailable())
            <a href="{{ route('basket-add', $product) }}" class="app-btn btn-green">В корзину</a> 
        @else
            <button type="button" class="app-btn btn-disabled">Не доступен</button>        
        @endif         
    </main>

@endsection