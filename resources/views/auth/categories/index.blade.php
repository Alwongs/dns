<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="app-page__title">
        Категории
    </h1>

    <table class="app-table mb-8">
        <thead>
            <tr>
                <th>#</th>
                <th>Код</th>
                <th>Название</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>

            @if($categories)
                @foreach($categories as $category)
                    @include('my-components.admin-category-item')
                @endforeach
            @else
                <tr class="app-table__item" style="text-align:center;">
                    <td class="app-table__name" colspan="4">Категорий нет </td>
                </tr>                            
            @endif          
        </tbody>
    </table>

    <div class="btn-group">
        <a href="{{ route('categories.create') }}" class="app-btn btn-green">Добавить категорию</a>
    </div>    
</x-guest-layout>