<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="app-page__title">
        Заказ № {{ $order->id }}
    </h1>

    <div class="container container__width-80">
    
        <p class="app-page__description">Заказчик: <b>{{ $order->name }}</b></p>
        <p class="app-page__description">Номер телефона: <b>{{ $order->phone }}</b></p>

        <table class="app-table mb-8">
            <thead>
                <tr>
                    <th>Назхвание</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    @include('my-components.admin.order.product-item')
                @endforeach
                <tr class="app-table__item">
                    <td colspan="3" class="app-table__actions">Общая стоимость</td>
                    <td class="app-table__price">{{ $order->calculateFullSum() }}</td>
                </tr>    
            </tbody>
        </table>

    </div>
</x-guest-layout>