@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">
        Подтвердите заказ:
    </h1>

    <p class="app-page__title">Общая стоимость заказа: <b>{{ $order->calculateFullSum() }} руб.</b></p>

    <p class="app-page__description">Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться</p>    

    <form class="app-form" action="{{ route('basket-confirm') }}" method="POST">

        <div class="app-form__element">
            <label for="name">Имя</label>
            <div class="app-form__input-block">
                <input id="name" type="text" name="name">
            </div>
        </div>

        <div class="app-form__element">
            <label for="phone">Телефон</label>
            <div class="app-form__input-block">
                <input id="phone" type="text" name="phone">
            </div>
        </div>

        @csrf

            <div class="app-form__btn-block">
            {{-- <input type="submit" class="app-btn btn-success" name="submit" value="Подтвердить"> --}}
            <x-btn-success>Подтвердить</x-btn-success>
        </div>

    </form>

@endsection