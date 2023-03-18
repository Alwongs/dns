<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="order-page__form form">
        @csrf
        <div class="form__container">
            <h1 class="form__title">Авторизация</h1>
            <!-- Email Address -->
            <div class="form__input-block">
                <label for="email">email</label>
                <div class="form__input">                
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form__input-block">
                <label for="password">password</label>
                <div class="form__input">
                    <input id="password" type="password" name="password" required autocomplete="current-password" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="form__remember-block">
                <label for="remember_me" class="">{{ __('Remember me') }}</label>
                <input id="remember_me" type="checkbox" name="remember">                 
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button>
                    Войти
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
