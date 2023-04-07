
<div class="nav-panel__right user-panel">
    @auth

        <div id="userMenuBtn" class="user-panel__user-name">
             {{ Auth::user()->name }}            
        </div>


        <form id="userMenuForm" method="POST" action="{{ route('logout') }}" class="user-panel__form">               
        @csrf
            <div class="user-panel__form-header">
                <div id="closeUserMenuBtn" class="user-panel__close-btn"></div>            
            </div>

            <ul>
                    <li><a href="{{ url('/profile') }}"> Настроить аккаунт </a></li>
                @admin
                    <li><a href="{{ route('orders') }}"> Админ панель </a></li>
                    <li><a href="{{ route('clear-config') }}"> Clear config </a></li>                   
                    <li><a href="{{ route('clear-route') }}"> Clear route </a></li>                   
                    <li><a href="{{ route('clear-view') }}"> Clear view </a></li>   
                    <li><a href="{{ route('make-sim-link') }}"> Make sim link </a></li>  
                    <li><a href="{{ route('session-flush') }}"> session()->flush() </a></li> 
                    <li><a href="{{ route('reset') }}"> Сброс-БД </a></li> 
                @else
                    <li><a href="{{ route('person-orders.index') }}"> Мои заказы </a></li> 
                @endadmin
                    <li><a style="color:yellow;" :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();"> Выйти </a></li>
                    
            </ul>
        </form>  



    @else
        <a href="{{ route('login') }}">Войти</a>
        <a href="{{ route('register') }}">Регистрация</a>
    @endauth
</div>
