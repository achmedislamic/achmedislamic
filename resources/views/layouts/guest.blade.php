<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ Illuminate\Support\Facades\App::environment('local') == 'local' ? 'LOCAL ' : '' }}@yield('judul') - Achmed
        Islamic H. | Situs Pribadi</title>
    <meta name="description"
        content="Web Developer yang berpengalaman selama 4 tahun yang sudah mengerjakan berbagai macam proyek yang siap membuat website untuk anda.." />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://achmedislamic.com/" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Situs Pribadi Achmed Islamic H." />
    <meta property="og:description"
        content="Web Developer yang berpengalaman selama 4 tahun yang sudah mengerjakan berbagai macam proyek yang siap membuat website untuk anda." />
    <meta property="og:url" content="https://achmedislamic.com/" />
    <meta property="og:site_name" content="Situs Pribadi Achmed Islamic H." />
    <meta property="og:image" content="https://achmedislamic.com/img/favicon.png" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <link rel="shortcut icon" href="/img/favicon.png">

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @livewireStyles
</head>

<body class="bg-white dark:bg-gray-800">
    @yield('nav')

    <!-- Page Content -->
    <main class="flex-grow pt-24">
        @yield('konten')
    </main>

    @vite(['resources/js/app.js'])
    @livewireScripts
</body>

</html>
