<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('judul') - Achmed Islamic H. | Situs Pribadi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <style>
            body {
                background-color: #f2f2f2;
            }

            * { 
                font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; 
            }
        </style>
        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
    </head>
    <body>
        <!-- Page Content -->
        <main class="my-5">
            {{-- {{ $slot }} --}}
            @yield('konten')
        </main>

        {{-- @stack('modals') --}}

        <script src="{{ asset('js/app.js') }}"></script>
        @livewireScripts
        {{-- @stack('scripts') --}}
    </body>
</html>
