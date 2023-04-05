<ul id="menu" class="nav-panel__left navigation">
    <li> <div class="navigation__close-menu"></div> </li>
    <li> <a href="{{ route('welcome') }}"> Главная </a> </li>
    <li @routeactive('categor*')> <a href="{{ route('categories') }}"> Категории </a> </li>
    <li @routeactive('product*')> <a href="{{ route('products') }}"> Товары </a> </li>
    <li @routeactive('basket*')> <a href="{{ route('basket') }}"> Корзина </a> </li>   
</ul>