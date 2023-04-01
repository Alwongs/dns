<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="app-page__title">
        Продукты
    </h1>
    
    <div class="container container__width-110">
        <table class="app-table mb-8">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Код</th>
                    <th>Категория</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Кол-во</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>

                @if($products)
                    @foreach($products as $product)
                        @include('my-components.admin-product-item')
                    @endforeach
                @else
                    <tr class="app-table__item" style="text-align:center;">
                        <td class="app-table__name" colspan="4">Продуктов нет </td>
                    </tr>                            
                @endif          
            </tbody>
        </table>

        {{ $products->links('pagination.default') }}

        <div class="btn-group">
            <a href="{{ route('products.create') }}" class="app-btn btn-success">Добавить продукт</a>
        </div>    
    </div>    
</x-guest-layout>