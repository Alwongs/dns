<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="app-page__title">
        Авторизация
    </h1>

    <form method="POST" action="{{ route('login') }}" class="app-form container container__width-55">
        @csrf
            <x-my-input-element 
                :type="'email'" :label="'Email'" :name="'email'" :value="old('email')" 
                :autocomplete="'username'" :required="'true'" :messages="$errors->get('email')"
            />

            <x-my-input-element :type="'password'" :label="'Пароль'" :name="'password'" 
                :autocomplete="'current-password'" :required="'true'" :messages="$errors->get('password')" 
            />

            <!-- Remember Me -->
            <div class="app-form__remember-block">
                <label for="remember_me">Remember me</label>
                <input id="remember_me" type="checkbox" name="remember">                 
            </div>

            <div class="app-form__btn-block">
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        Забыли пароль?
                    </a>
                @endif

                <x-btn-success>
                    Войти
                </x-btn-success>

            </div>
        </div>
    </form>

</x-guest-layout>
