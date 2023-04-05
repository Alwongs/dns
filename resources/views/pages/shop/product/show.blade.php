@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">
        {{ $product->name }}
    </h1>

    <main class="product-page container container__width-70">
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
            <form action="{{ route('basket-add', $product) }}" method="POST">
            @csrf
                <button type="submit" class="app-btn btn-success">В корзину</button>
            </form> 
        @else       
            <x-btn-disabled>Не доступен</x-btn-disabled>        
        @endif         
    </main>

@endsection