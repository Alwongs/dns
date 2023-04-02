<ul class="nav-panel__left">
    <li> <a href="{{ route('welcome') }}"> DNS-shop </a> </li>
    <li @routeactive('categor*')> <a href="{{ route('categories') }}"> Категории </a> </li>
    <li @routeactive('product*')> <a href="{{ route('products') }}"> Товары </a> </li>
    <li @routeactive('basket*')> <a href="{{ route('basket') }}"> Корзина </a> </li>   
</ul>