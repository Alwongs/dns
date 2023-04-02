<div class="nav-admin-panel__right  admin-user-panel">
    @auth

        <div id="userMenuBtn" class="admin-user-panel__user-name">
             {{ Auth::user()->name }}            
        </div>

        <form id="userMenuForm" method="POST" action="{{ route('logout') }}" class="admin-user-panel__form">           
            @csrf
            <div class="admin-user-panel__form-header">
                <div id="userMenuCloseBtn" class="admin-user-panel__close-btn"></div>            
            </div>            

            <ul>
                <li><a href="{{ route('orders') }}"> Заказы </a></li>            
                <li><a href="{{ url('/profile') }}"> Настроить аккаунт </a></li>
                <li><a :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">Выйти</a></li>

                <li><a href="{{ url('/clear-config') }}"> Clear config </a></li>                   
                <li><a href="{{ url('/clear-route') }}"> Clear route </a></li>                   
                <li><a href="{{ url('/clear-view') }}"> Clear view </a></li>     
                <li><a href="{{ route('reset') }}"> Сброс-БД </a></li>               
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
