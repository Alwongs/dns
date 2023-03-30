<section class="space-y-6">
    <header>
        <h2 class="app-page__subtitle">
            Удалить аккаунт
        </h2>

        <p class="app-page__description">
            После удаления аккаунта, все связанные с ним данные будутбезвозвратно удалены. Перед удалением аккаунта, пожалуйста, загрузите все данные, котрые не хотите потерять.
        </p>
    </header>

    <x-btn-danger x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
        Удалить аккаунт
    </x-btn-danger>

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
                <x-btn-default x-on:click="$dispatch('close')">
                    Отмена
                </x-btn-default>

                <x-btn-danger> 
                    Удалить аккаунт
                </x-btn-danger>
            </div>
        </form>
    </x-modal>
</section>
