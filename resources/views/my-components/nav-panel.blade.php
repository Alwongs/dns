<nav class="nav-panel">
    <ul class="nav-panel__left">
        <li> <a href="{{ route('welcome') }}"> DNS-shop </a> </li>
        <li> <a href="{{ route('categories') }}"> Категории </a> </li>
        <li> <a href="{{ route('products') }}"> Все товары </a> </li>
        <li> <a href="{{ route('basket') }}"> Корзина </a> </li>
    </ul>

    @if (Route::has('login'))
        <div class="nav-panel__right">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    <a href="{{ route('orders') }}">Административная панель</a>                
                    @csrf
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


