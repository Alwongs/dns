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
            @foreach($order->products()->with('category')->get() as $product)
                @include('my-components.product-item')
            @endforeach
            <tr class="app-table__sum">
                <td class="app-table__name" colspan="3">Общая стоимость: </td>
                <td class="app-table__price">{{ $order->getFullSum() }} руб.</td>
            </tr>           
        </tbody>
    </table>

    <div class="btn-group flex-end">
        <a href="{{ route('basket-place') }}" class="app-btn btn-green">Оформить заказ</a>
    </div>

@endsection