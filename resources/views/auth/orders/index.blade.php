<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="app-page__title">
        Заказы
    </h1>

    <div class="container container__width-80">
        <table class="app-table mb-8">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Когда отправлен</th>
                    <th>Сумма</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @if(count($orders) > 0)
                    @foreach($orders as $order)
                        @include('my-components.admin-order-item')
                    @endforeach
                @else
                    <tr class="app-table__item" style="text-align:center;">
                        <td class="app-table__name" colspan="6">Заказов нет </td>
                    </tr>                            
                @endif          
            </tbody>
        </table>

        {{ $orders->links('pagination.default') }}
    </div>
</x-guest-layout>
