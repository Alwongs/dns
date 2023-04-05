<ul id="menu" class="nav-panel__left navigation admin-version">
    <li> <div class="navigation__close-menu admin-version"></div> </li>
    <li> <a href="{{ route('welcome') }}"> В магазин </a> </li>
    @auth        
        @admin
            <li> <a href="{{ route('categories.index') }}"> Категории </a> </li>
            <li> <a href="{{ route('products.index') }}"> Все товары </a> </li>                 
        @endadmin
    @endauth       
</ul>