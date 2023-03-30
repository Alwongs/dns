<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="app-page__title">
        {{ $category->name }}
    </h1>

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
                <td>{{ $category->id }}</td>
            </tr>

            <tr class="app-table__item">   
                <td>Код</td>
                <td>{{ $category->code }}</td>
            </tr>

            <tr class="app-table__item">   
                <td>Название</td>
                <td>{{ $category->name }}</td>
            </tr>

            <tr class="app-table__item">   
                <td>Описание</td>
                <td>{{ $category->description }}</td>
            </tr>

            <tr class="app-table__item">   
                <td>Картинка</td>
                <td>
                    <div class="app-table__image">
                        <img src="{{ Storage::url($category->image) }}" alt="image">
                    </div>
                </td>
            </tr>

            <tr class="app-table__item">   
                <td>Количество товаров</td>
                <td>{{ $category->products->count() }}</td>
            </tr>       
        </tbody>
    </table>
   
</x-guest-layout>