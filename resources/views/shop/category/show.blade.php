@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">
        {{ $category->name }}
    </h1>
    
    <p class="app-page__description"> {{ $category->description }} </p>

    <div class="proucts-page__container">
        @include('my-components.product-filters')    

        <ul class="product-list">
            @foreach($products as $product)
                @include('my-components.product-card')
            @endforeach 
        </ul>

        {{-- {{ $category->products->links('pagination.default') }}         --}}
        {{ $products->links('pagination.default') }}
    </div>

@endsection