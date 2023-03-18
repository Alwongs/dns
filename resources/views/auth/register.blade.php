<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="form">
        @csrf
        <div class="form__container">

            <h1 class="form__title">Регистрация</div>
            <!-- Name -->
            <div class="form__element">
                <label for="name">имя</label>
                <div class="form__input-block">  
                    <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')"  />
                </div>

            </div>

            <!-- Email Address -->
            <div class="form__element">
                <label for="email">email</label>
                <div class="form__input-block">                
                    <x-text-input id="email" class="" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="" />
                </div>
            </div>

            <!-- Password -->
            <div class="form__element">
                <label for="password">пароль</label>
                <div class="form__input-block">  
                    <x-text-input id="password" class="" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="" />
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="form__element">
                <label for="password_confirmation">подтвердите пароль</label>
                <div class="form__input-block"> 
                    <x-text-input id="password_confirmation" class="" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="" />
                </div>
            </div>

            <div class="form__btn-block">
                <a class="" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-green-button>Создать</x-green-button>
            </div>
        </div>
    </form>
</x-guest-layout>
