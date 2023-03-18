@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">
        {{ $category->name }}
    </h1>
    
    <p class="app-page__description"> {{ $category->description }} </p>

    <ul class="product-list">
        @foreach($category->products as $product)
            @include('my-components.product-card')
        @endforeach 
    </ul>

@endsection