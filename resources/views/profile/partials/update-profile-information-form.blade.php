<section>
    <header>
        <h2 class="app-page__subtitle">
            Информация пользователя
        </h2>

        <p class="app-page__description">
            Обновите свои личные данные
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="app-form">
        @csrf
        @method('patch')

        <div class="app-form__element">
            <x-input-label for="name" :value="'Имя:'" />
            <x-text-input id="name" name="name" type="text" class="" :value="old('name', $user->name)" required autocomplete="name" />
            <x-input-error class="" :messages="$errors->get('name')" />
        </div>

        <div class="app-form__element">
            <x-input-label for="email" :value="'Email:'" />
            <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="app-form__btn-block">
            <x-btn-success>Обновить</x-btn-success>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="alert__success"
                >Профиль обновлен</p>
            @endif
        </div>
    </form>
</section>
