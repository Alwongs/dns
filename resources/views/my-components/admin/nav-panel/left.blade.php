<ul class="nav-admin-panel__left">
    <li> <a href="{{ route('welcome') }}"> Вернуться в магазин </a> </li>
    @auth        
        @admin
            <li> <a href="{{ route('categories.index') }}"> Категории </a> </li>
            <li> <a href="{{ route('products.index') }}"> Все товары </a> </li>                 
        @endadmin
        {{-- <li> <a href="{{ route('basket') }}"> Корзина </a> </li> --}}
    @endauth       
</ul>