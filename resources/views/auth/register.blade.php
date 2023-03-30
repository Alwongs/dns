<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="app-page__title">
        Регистрация
    </h1>

    <form method="POST" action="{{ route('register') }}" class="app-form short-width">
        @csrf

            <!-- Name -->
            <div class="app-form__element">
                <label for="name">имя</label>
                <div class="app-form__input-block">  
                    <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" />
                </div>

            </div>

            <!-- Email Address -->
            <div class="app-form__element">
                <label for="email">email</label>
                <div class="app-form__input-block">                
                    <x-text-input id="email" class="" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" />
                </div>
            </div>

            <!-- Password -->
            <div class="app-form__element">
                <label for="password">пароль</label>
                <div class="app-form__input-block">  
                    <x-text-input id="password" class="" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" />
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="app-form__element">
                <label for="password_confirmation">подтвердите пароль</label>
                <div class="app-form__input-block"> 
                    <x-text-input id="password_confirmation" class="" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" />
                </div>
            </div>

            <div class="app-form__btn-block">
                <a href="{{ route('login') }}">
                    Уже есть аккаунт?
                </a>

                <x-btn-success>
                    Сохранить
                </x-btn-success>
            </div>
        </div>
    </form>
</x-guest-layout>
