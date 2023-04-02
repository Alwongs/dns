<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="app-page__title">
        Продукт: {{ $product->name }}
    </h1>

    <div class="container container__width-70">
        <table class="app-table mb-8">
            <thead>
                <tr>
                    <th>Поле</th>
                    <th>Значение</th>
                </tr>
            </thead>
            <tbody>

                <tr class="app-table__item">   
                    <td>Id</td> 
                    <td>{{ $product->id }}</td>
                </tr>

                <tr class="app-table__item">   
                    <td>Код</td>
                    <td>{{ $product->code }}</td>
                </tr>

                <tr class="app-table__item">   
                    <td>Название</td>
                    <td>{{ $product->name }}</td>
                </tr>

                <tr class="app-table__item">   
                    <td>Описание</td>
                    <td>{{ $product->description }}</td>
                </tr>

                <tr class="app-table__item">   
                    <td>Цена</td>
                    <td>{{ $product->price }}</td>
                </tr>

                <tr class="app-table__item">   
                    <td>Кол-во</td>
                    <td>{{ $product->count }}</td>
                </tr>

                <tr class="app-table__item">   
                    <td>Картинка</td>
                    <td>
                        <div class="app-table__image">
                            <img src="{{ Storage::url($product->image) }}" alt="image">
                        </div>
                    </td>
                </tr>

                <tr class="app-table__item">   
                    <td>Категория:</td> 
                    <td>{{ $product->category->name }}</td>
                </tr>
        
            </tbody>
        </table>
    </div>   
</x-guest-layout>