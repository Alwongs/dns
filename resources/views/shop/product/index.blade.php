@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">Все товары</h1>

    <ul class="product-list">
        @foreach($products as $product)
            @include('my-components.product-card')
        @endforeach  
    </ul>  
    
@endsection