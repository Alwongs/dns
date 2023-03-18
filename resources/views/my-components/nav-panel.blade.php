<nav class="nav-panel">
    <ul class="nav-panel__left">
        <li> <a style="color:yellow;" href="{{ route('home') }}"> DNS-shop </a> </li>
        <li> <a href="{{ route('categories') }}"> Категории </a> </li>
        <li> <a href="{{ route('products') }}"> Все товары </a> </li>
        <li> <a href="{{ route('basket') }}"> Корзина </a> </li>
    </ul>

    @if (Route::has('login'))
        <div class="nav-panel__right">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    <a href="{{ url('/dashboard') }}">Dashboard</a>                
                    @csrf
                    <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                </form>                       
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif  
</nav>


