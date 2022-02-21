<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles()
</head>

<body class='bg-white'>
    @livewire('components.header')
    <div class='w-screen mt-24'>
        {{ $slot }}
    </div>
    @livewire('components.footer')
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireScripts()
</body>

</html>
