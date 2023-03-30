<x-guest-layout>

    <h1 class="app-page__title">
        Восстановление пароля
    </h1>

    <p class="app-page__description">
        Забыли пароль? Введите свой email и мы отправим Вам ссылку на восстановление пароля
    </p>    

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="app-form">
        @csrf

        <!-- Email Address -->
        <div class="app-form__element">
            <x-input-label for="email" :value="'Email:'" />
            <div class="app-form__input-block">             
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" />
            </div>
        </div>

        <div class="app-form__btn-block">
            <x-btn-success>
                Отправить
            </x-btn-success>
        </div>
    </form>
</x-guest-layout>
