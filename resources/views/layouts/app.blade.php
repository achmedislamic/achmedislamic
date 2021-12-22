<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <nav class="fixed w-full flex justify-between bg-white dark:bg-gray-800 mb-16 border-t-blue-600 border-b-black border-t-8 z-50 backdrop-blur-md bg-white/30 dark:bg-black/30 border-b" x-data="{ menu:false }">
            <a href="{{ route('beranda') }}" class="ml-4 pt-4 md:py-3">
                <div class="h-8 w-32 md:w-60 dark:bg-nama-white bg-nama bg-contain bg-no-repeat"></div>
            </a>

            <div @click.away="menu=false" class="relative md:hidden">
                <button type="button" @click="menu=true" class="md:hidden">
                    <a id="mode" title="Menu">
                        <svg class="mr-3 mt-3 dark:text-white" width="26" height="26">
                            <use id="mode-icon" xlink:href="{{ asset('css/bootstrap-icons.svg') }}#list" />
                        </svg>
                    </a>
                </button>

                <div x-show="menu"
                x-transition:enter="transition ease duration-100 transform"
                x-transition:enter-start="opacity-0 scale-90 translate-y-1"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease duration-100 transform"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-90 translate-y-1"
                class="absolute mt-8 top-0 inset-y-0 -left-20 min-w-full w-32 z-30">
                    <span class="absolute top-0 left-0 w-2 h-2 bg-white transform rotate-45 -mt-1 ml-[89px] border-gray-300 border-l border-t z-20 dark:bg-gray-700"></span>
                    <div class="bg-white overflow-auto rounded-lg shadow-md w-full relative z-10 border border-gray-300 text-gray-800 text-xs dark:bg-gray-700 dark:text-white">
                        <ul>
                            <li>
                                <x-dropdown-menu href="#profil">Profil</x-dropdown-menu>
                                <x-dropdown-menu href="#proyek">Proyek</x-dropdown-menu>
                                <x-dropdown-menu href="#kontak">Kontak</x-dropdown-menu>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <ul class="mt-lg-0 hidden md:flex md:flex-row md:items-center">
                <li class="hover:dark:bg-gray-700 h-full flex md:items-center px-3 hover:rounded-md">
                    <a class="dark:text-white font-bold text-md" href="#profil">Profil</a>
                </li>
                <li class="hover:dark:bg-gray-700 h-full flex md:items-center px-3 hover:rounded-md">
                    <a class="dark:text-white font-bold text-md" href="#proyek">Proyek</a>
                </li>

                <li class="hover:dark:bg-gray-700 h-full flex md:items-center px-3 hover:rounded-md">
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
    </body>
</html>
