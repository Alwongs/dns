
<div class="nav-panel__right user-panel">
    @auth


        <div id="userMenuBtn" class="user-panel__user-name">
             {{ Auth::user()->name }}            
        </div>


        <form id="userMenuForm" method="POST" action="{{ route('logout') }}" class="user-panel__form">               
        @csrf

            <ul>
                    <li><a href="{{ url('/profile') }}"> Настроить аккаунт </a></li>
                @admin
                    <li><a href="{{ route('orders') }}"> Админ панель </a></li>
                @else
                    <li><a href="{{ route('person-orders.index') }}"> Мои заказы </a></li> 
                @endadmin
                    <li><a :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();"> Выйти </a></li>
                    
            </ul>
        </form>  





    @else
        <a href="{{ route('login') }}">Войти</a>
        <a href="{{ route('register') }}">Регистрация</a>
    @endauth
</div>
