<section class="space-y-6">
    <header>
        <h2 class="app-page__subtitle">
            Удалить аккаунт
        </h2>

        <p class="app-page__description">
            После удаления аккаунта, все связанные с ним данные будутбезвозвратно удалены. Перед удалением аккаунта, пожалуйста, загрузите все данные, котрые не хотите потерять.
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="app-btn btn-red mb-32"
    >Удалить аккаунт</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="app-form">
            @csrf
            @method('delete')

            <h2 class="app-page__subtitle">
                Вы уверены, что хотите удалить аккаунт?
            </h2>

            <p class="app-page__description">
                После удаления аккаунта, все связанные с ним данные будутбезвозвратно удалены. Перед удалением аккаунта, пожалуйста, загрузите все данные, котрые не хотите потерять.
            </p>

        <div class="app-form__element">
                <x-input-label for="password" value="Пароль:" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Пароль"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')"  />
            </div>

        <div class="app-form__btn-block">
                <x-secondary-button x-on:click="$dispatch('close')" class="app-btn btn-default">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="app-btn btn-red">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
