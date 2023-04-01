<nav class="nav-panel">
    @include('my-components.nav-panel-left')

    <div class="nav-panel__center">
        @admin        
            <a href="{{ route('reset') }}"> *Сброс-БД* </a>
        @endadmin 
    </div>

    @include('my-components.nav-panel-right') 
</nav>


