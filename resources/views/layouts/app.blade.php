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

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
    </head>
    <body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}"><img width="224px" src="/img/nama.png" alt="Logo Achmed Islamic Hernawan"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#proyek">Proyek</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        

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
