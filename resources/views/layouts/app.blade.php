<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('judul') - Achmed Islamic H. | Situs Pribadi</title>
        <meta name="description" content="Laravel/CodeIgniter dan Bootstrap Web Developer. Programmer berpengalaman selama 4 tahun yang sudah mengerjakan berbagai macam proyek yang siap membuat website untuk anda.." />
        <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <link rel="canonical" href="https://achmedislamic.com/" />
        <meta property="og:locale" content="id_ID" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Situs Pribadi Achmed Islamic H." />
        <meta property="og:description" content="Laravel/CodeIgniter dan Bootstrap Web Developer. Programmer berpengalaman selama 4 tahun yang sudah mengerjakan berbagai macam proyek yang siap membuat website untuk anda." />
        <meta property="og:url" content="https://achmedislamic.com/" />
        <meta property="og:site_name" content="Situs Pribadi Achmed Islamic H." />
        <meta property="og:image" content="https://achmedislamic.com/img/favicon.png" />
        <meta property="og:image:width" content="200" />
        <meta property="og:image:height" content="200" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <link rel="shortcut icon" href="/img/favicon.png">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        @livewireStyles
        <style>
            body, nav {
                background: rgb(29, 29, 29);
                transition: 1s;
                -webkit-transition: 1s;
                -moz-transition: 1s;
                -ms-transition: 1s;
                -o-transition: 1s;
                }
        </style>
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
    </head>
    <body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}"><img id="logo" width="224px" src="/img/nama.png" alt="Logo Achmed Islamic Hernawan"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" id="mode" title="Hidupkan Dark Mode">
                            <svg class="bi mr-3" width="26" height="26">
                                <use id="mode-icon" xlink:href="{{ asset('css/bootstrap-icons.svg') }}#moon" />
                            </svg>
                        </a>
                    </li>
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
        <script>
            $('#mode').click(function (e) {
                e.preventDefault();
                let icon = '{{ asset("css/bootstrap-icons.svg") }}';
                $('.text-mode, label').toggleClass('text-white')
                if($('body').attr('class') === 'bg-dark'){
                    $('body').attr('class', 'bg-light')

                    $('nav').removeClass('navbar-dark')
                    $('nav').removeClass('bg-dark')
                    $('nav').addClass('navbar-light')
                    $('nav').addClass('bg-light')

                    $('#curve').attr('class', 'text-info')
                    $('#kontak').removeClass('bg-secondary')
                    $('#kontak').addClass('bg-info')
                    $('#mode-icon').attr('xlink:href', icon + '#moon')
                    $('#logo').attr('src', '/img/nama.png')
                } else {
                    $('body').attr('class', 'bg-dark')

                    $('nav').removeClass('navbar-light')
                    $('nav').removeClass('bg-light')
                    $('nav').addClass('navbar-dark')
                    $('nav').addClass('bg-dark')

                    $('#curve').attr('class', 'text-secondary')
                    $('#kontak').removeClass('bg-info')
                    $('#kontak').addClass('bg-secondary')
                    $('#mode-icon').attr('xlink:href', icon + '#lamp')
                    $('#logo').attr('src', '/img/nama-white.png')
                }

            });
        </script>
    </body>
</html>
