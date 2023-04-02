<section>
    <header>
        <h2 class="app-page__subtitle">
            Обновление пароля
        </h2>

        <p class="app-page__description">
            Убедитесь, что аккаунт доступен только Вам, меняйте пароль для безопасности
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="app-form">
        @csrf
        @method('put')

        <div class="app-form__element">
            <x-input-label for="current_password" :value="'Текущий пароль:'" />
            <x-text-input id="current_password" name="current_password" type="password" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" />
        </div>

        <div class="app-form__element">
            <x-input-label for="password" :value="'Новый пароль:'" />
            <x-text-input id="password" name="password" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" />
        </div>

        <div class="app-form__element">
            <x-input-label for="password_confirmation" :value="'Подтвердить пароль:'" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
        </div>

        <div class="app-form__btn-block">
            <x-btn-success>Обновить</x-btn-success>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="alert__success"
                >Пароль обновлен</p>
            @endif
        </div>
    </form>
</section>
