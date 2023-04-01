@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">
        {{ $category->name }}
    </h1>

    <div class="container container__width-90">    
        <p class="app-page__description"> {{ $category->description }} </p>


            @include('my-components.product-filters')    

            <ul class="product-list">
                @foreach($products as $product)
                    @include('my-components.product-card')
                @endforeach 
            </ul>

            {{ $products->links('pagination.default') }}
        </div>
    </div>

@endsection