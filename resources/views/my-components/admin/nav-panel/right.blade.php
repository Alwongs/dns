<div class="nav-panel__right  user-panel">
    @auth

        <div id="userMenuBtn" class="user-panel__user-name admin-version">
             {{ Auth::user()->name }}            
        </div>

        <form id="userMenuForm" method="POST" action="{{ route('logout') }}" class="user-panel__form admin-version">           
            @csrf
            <div class="user-panel__form-header">
                <div id="userMenuCloseBtn" class="user-panel__close-btn admin-version"></div>            
            </div>            

            <ul>
                <li><a href="{{ route('orders') }}"> Заказы </a></li>            
                <li><a href="{{ url('/profile') }}"> Настроить аккаунт </a></li>
            @admin
                <li><a href="{{ route('clear-config') }}"> Clear config </a></li>                   
                <li><a href="{{ route('clear-route') }}"> Clear route </a></li>                   
                <li><a href="{{ route('clear-view') }}"> Clear view </a></li>   
                <li><a href="{{ route('make-sim-link') }}"> Make sim link </a></li> 
                <li><a href="{{ route('session-flush') }}"> session()->flush() </a></li> 
                <li><a href="{{ route('reset') }}"> Сброс-БД </a></li>    
            @endadmin    
                <li><a style="color:red;" :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">Выйти</a></li>       
            </ul>

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
