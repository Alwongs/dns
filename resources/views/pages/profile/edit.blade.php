<x-guest-layout>

    <h1 class="app-page__title">
        Личный кабинет
    </h1>

    <div class="profile-page container container__width-65">

        @include('pages.profile.partials.update-profile-information-form')

            <hr class="profile-page__devider">

        @include('pages.profile.partials.update-password-form')

            <hr class="profile-page__devider">

        @include('pages.profile.partials.delete-user-form')

            <hr class="profile-page__devider">

    </div>

</x-guest-layout>
