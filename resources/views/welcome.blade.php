<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.jpeg') }}" type="image/x-icon"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
</head>
<body>
    <livewire:nav-bar>
    <div id="app" class="mt-32">
        <!-- <passport-clients></passport-clients> -->
        <!-- <passport-authorized-clients></passport-authorized-clients> -->
        <passport-personal-access-tokens></passport-personal-access-tokens>
    </div>
</body>
</html>
