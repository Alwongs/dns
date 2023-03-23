<nav class="nav-panel">
    <ul class="nav-panel__left">
        <li> <a href="{{ route('welcome') }}"> DNS-shop </a> </li>
        <li @routeactive('categor*')> <a href="{{ route('categories') }}"> Категории </a> </li>
        <li @routeactive('product*')> <a href="{{ route('products') }}"> Товары </a> </li>
        <li @routeactive('basket*')> <a href="{{ route('basket') }}"> Корзина </a> </li>
    </ul>

    @if (Route::has('login'))
        <div class="nav-panel__right">
            @auth
                <form method="POST" action="{{ route('logout') }}">               
                    @csrf

                    @admin
                        <a href="{{ route('orders') }}">Админ панель</a> 
                    @else
                        <a href="{{ route('person-orders.index') }}">Мои заказы</a> 
                    @endadmin


                    <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Выйти</a>

                </form>                       
            @else
                <a href="{{ route('login') }}">Войти</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Регистрация</a>
                @endif
            @endauth
        </div>
    @endif  
</nav>


