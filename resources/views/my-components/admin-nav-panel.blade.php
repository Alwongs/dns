<nav class="nav-admin-panel">
    <ul class="nav-admin-panel__left">
        <li> <a href="{{ route('welcome') }}"> Вернуться в магазин </a> </li>
        @auth        
            @admin
                <li> <a href="{{ route('categories.index') }}"> Категории </a> </li>
                <li> <a href="{{ route('products.index') }}"> Все товары </a> </li>      
                <li> <a href="{{ route('reset') }}"> Сбросить проект к начальному состоянию </a> </li>                 
            @endadmin
            {{-- <li> <a href="{{ route('basket') }}"> Корзина </a> </li> --}}
        @endauth       
    </ul>

    @if (Route::has('login'))
        <div class="nav-admin-panel__right">
            @auth
                <form method="POST" action="{{ route('logout') }}">           
                    @csrf
                    <a href="{{ url('/profile') }}">{{ Auth::user()->email }}</a>    
                    <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Выйти</a>
                </form>                       
            @else
                @if (!Route::currentRouteNamed('login'))
                    <a href="{{ route('login') }}">Войти</a> 
                @endif                    
                @if (!Route::currentRouteNamed('register'))
                    <a href="{{ route('register') }}">Регистрация</a>
                @endif
            @endauth
        </div>
    @endif  
</nav>


