@extends('my-layouts.app')

@section('content')

    <h1 class="app-page__title">
        Подтвердите заказ:
    </h1>

    <p class="order-page__price">Общая стоимость заказа: {{ $order->getFullPrice() }}</p>

    <form class="order-page__form form" action="{{ route('basket-confirm') }}" method="POST">
        <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться</p>
        <div class="form__container">

            <div class="form__input-block">
                <label for="name">Имя</label>
                <div class="form__input">
                    <input id="name" type="text" name="name">
                </div>
            </div>

            <div class="form__input-block">
                <label for="phone">Телефон</label>
                <div class="form__input">
                    <input id="phone" type="text" name="phone">
                </div>
            </div>

            @csrf

            <div class="form__btn-block">
                <input type="submit" class="app-btn btn-green" name="submit">
            </div>

        </div>
    </form>

@endsection