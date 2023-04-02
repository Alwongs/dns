@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">Все товары</h1>

    <div class="container container__width-90">
        @include('my-components.shop.product.filters')

        <ul class="product-list">
            @foreach($products as $product)
                @include('my-components.shop.product.card')
            @endforeach  
        </ul>  

        {{ $products->links('my-components.pagination.default') }}
    </div>
    
@endsection