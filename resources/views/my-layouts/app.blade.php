<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
{{-- 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"> --}}

        <!-- Scripts -->
        @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])        
    </head>
    <body>
        @include('my-components.nav-panel')

        <div class="container">

            <div class="app-page">
                @if(session()->has('success'))
                    <div class="alert alert__success">{{ session()->get('success') }}</div>
                @endif
                @if(session()->has('warning'))
                    <div class="alert alert__warning">{{ session()->get('warning') }}</div>
                @endif

                @yield('content')
            </div>

        </div>
    </body>
</html>
