<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta_tags')
    @stack('schema_tags')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles()
    @stack('styles')
</head>

<body class='bg-white'>
    @if(!Crawler::isCrawler())
    @livewire('components.header')
    <div class='w-screen mt-24'>
        {{ $slot }}
    </div>
    @livewire('components.footer')
    @endif
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/share.js') }}"></script>
    @livewireScripts()
    @stack('scripts')
</body>

</html>
