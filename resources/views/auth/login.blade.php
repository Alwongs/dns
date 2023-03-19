<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="guest-layout__modal">
        <form method="POST" action="{{ route('login') }}" class="order-page__form form">
            @csrf
            <div class="form__container">
                <h1 class="form__title">Авторизация</h1>
                <!-- Email Address -->
                <div class="form__element">
                    <label for="email">email</label>
                    <div class="form__input-block">                
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <!-- Password -->
                <div class="form__element">
                    <label for="password">password</label>
                    <div class="form__input-block">
                        <input id="password" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />                    
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="form__remember-block">
                    <label for="remember_me" class="">{{ __('Remember me') }}</label>
                    <input id="remember_me" type="checkbox" name="remember">                 
                </div>

                <div class="form__btn-block">
                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-green-button>Войти</x-green-button>
                </div>
            </div>
        </form>
    </div>

</x-guest-layout>
