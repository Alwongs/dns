@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">
        Корзина
    </h1>

    <table class="app-table mb-8">
        <thead>
            <tr>
                <td>Название</td>
                <td>Кол-во</td>
                <td>Цена</td>
                <td>Стоимость</td>
            </tr>
        </thead>
        <tbody>
            @if($order)
                @foreach($order->products as $product)
                    @include('my-components.product-item')
                @endforeach
                <tr class="app-table__sum">
                    <td class="app-table__name" colspan="3">Общая стоимость: </td>
                    <td class="app-table__price">{{ $order->getFullPrice() }} руб.</td>
                </tr> 
            @else
                <tr class="app-table__item" style="text-align:center;">
                    <td class="app-table__name" colspan="4">В корзине нет товаров </td>
                </tr>                            
            @endif           
        </tbody>
    </table>

    <div class="btn-group flex-end">
        <a href="{{ route('basket-place') }}" class="app-btn btn-green">Оформить заказ</a>
    </div>

@endsection