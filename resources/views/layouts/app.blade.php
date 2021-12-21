<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ Illuminate\Support\Facades\App::environment('local') == 'local' ? 'LOCAL ' : '' }}@yield('judul') - Achmed Islamic H. | Situs Pribadi</title>
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
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="bg-white dark:bg-gray-800">
        <nav class="fixed w-full flex bg-white dark:bg-gray-800 pt-3 mb-16 px-4 justify-between border-t-blue-600 border-b-black border-t-8 z-50 pb-3 backdrop-blur-md bg-white/30 border-b" x-data="{ menu:false }">
            <a class="pt-2" href="{{ route('beranda') }}">
                <img id="logo" width="224px" src="/img/nama.png" alt="Logo Achmed Islamic Hernawan">
            </a>

            <div @click.away="menu=false" class="relative md:hidden">
                <button type="button" @click="menu=true" class="md:hidden">
                    <a href="#" id="mode" title="Menu">
                        <svg class="mr-3" width="26" height="26">
                            <use id="mode-icon" xlink:href="{{ asset('css/bootstrap-icons.svg') }}#list" />
                        </svg>
                    </a>
                </button>

                <div x-show="menu" class="absolute mt-8 top-0 inset-y-0 -left-20 min-w-full w-32 z-30"
                x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                    <span class="absolute top-0 left-0 w-2 h-2 bg-white transform rotate-45 -mt-1 ml-[89px] border-gray-300 border-l border-t z-20"></span>
                    <div class="bg-white overflow-auto rounded-lg shadow-md w-full relative z-10 border border-gray-300 text-gray-800 text-xs">
                        <ul class="list-reset">
                            <li>
                                <x-dropdown-menu href="#profil">Profil</x-dropdown-menu>
                                <x-dropdown-menu href="#proyek">Proyek</x-dropdown-menu>
                                <x-dropdown-menu href="#kontak">Kontak</x-dropdown-menu>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <ul class="ml-auto mt-2 mt-lg-0 hidden md:flex md:space-x-8">
                <li class="nav-item active">
                    <a class="nav-link" href="#" id="mode" title="Hidupkan Dark Mode">
                        <svg class="dark:text-white mr-3" width="26" height="26">
                            <use id="mode-icon" xlink:href="{{ asset('css/bootstrap-icons.svg') }}#moon" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="dark:text-white font-bold text-md" href="#profil">Profil</a>
                </li>
                <li class="nav-item active">
                    <a class="dark:text-white font-bold text-md" href="#proyek">Proyek</a>
                </li>

                <li class="nav-item active">
                    <a class="dark:text-white font-bold text-md" href="#kontak">Kontak</a>
                </li>

            </ul>
        </nav>


        <!-- Page Content -->
        <main class="flex-grow pt-24">
            @yield('konten')
        </main>

        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
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
