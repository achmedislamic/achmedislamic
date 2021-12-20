@extends('layouts.app')

@section('judul')
Beranda
@endsection

@section('konten')
<div class="container mb-10 px-4 animate__animated animate__fadeInDown">
    <div class="flex flex-col md:flex-row space-x-2">
        <div class="flex flex-col md:w-1/2">
            <div class="text-lg font-bold leading-relaxed mb-3">Full-stack web developer & Penulis Blog</div>
            <div class="text-lg font-bold text-blue-500 leading-relaxed">Selamat datang di situs saya.</div>
        </div>
        <div class="md:w-1/2">
            <img src="/img/hero.png" alt="Hero" class="hero mx-auto">
        </div>
    </div>
</div>

<div class="container my-5 px-4 animate__animated animate__fadeInRight">
    <div class="flex flex-col md:flex-row">
        <div class="flex flex-col">
            <p class="hero-text text-mode">
                Assalamualaikum! Perkenalkan saya Achmed. Saya bekerja dalam bidang pembuatan
                website dan menulis blog.
                Saya ahli menggunakan <x-anchor href="https://laravel.com" target="_blank">Laravel</x-anchor>
                & <x-anchor href="https://codeigniter.com" target="_blank" >CodeIgniter</x-anchor> Framework untuk backend,
                <x-anchor href="https://getbootstrap.com" target="_blank">Bootstrap</x-anchor> & <x-anchor target="_blank" href="https://tailwindcss.com">TailwindCSS</x-anchor> untuk styling dan
                <x-anchor href="https://jquery.com" target="_blank">jQuery</x-anchor> & <x-anchor target="_blank" href="https://alpinejs.dev">AlpineJS</x-anchor> untuk frontend. Saya juga memiliki blog pribadi yaitu
                <x-anchor href="https://windowsku.com" target="_blank">Windowsku</x-anchor> dimana saya membagikan pengetahuan saya
                akan teknologi.
            </p>
        </div>
    </div>
</div>

<div class="container my-5 px-4 animate__animated animate__fadeInLeft animate__delay-1s">
    <div class="row">
        <div class="col text-center">
            <img src="/img/ilustrasi.png" class="img-fluid">
        </div>
    </div>
</div>

<div class="container my-5 px-4" id="proyek">
    <div class="flex flex-col">
        <div>
            <x-h2><strong>Anda butuh website?</strong> Saya bisa menerima proyek anda! Berikut daftar proyek yang bisa
                saya kerjakan:</x-h2>
            <ul>

                <x-list-card>
                    <x-slot name="title">Sistem Informasi</x-slot>
                    Sistem pengelolaan Informasi perusahaan, keuangan, dan manajemen.
                    Contoh proyek yang telah saya kerjakan adalah sistem informasi perencanaan
                    <x-anchor href="https://e-planning.ntbprov.go.id" target="_blank">eNTeBePlan</x-anchor> dan
                    <x-anchor href="https://e-kinerja.ntbprov.go.id" target="_blank">e-Kinerja.</x-anchor>
                </x-list-card>

                <x-list-card>
                    <x-slot name="title">E-Commerce</x-slot>
                    Situs penjualan produk dengan pengiriman barang se-Indonesia dan pembayaran aman
                    serta dengan dukungan banyak Bank dan metode pembayaran. Contoh proyek yang saya
                    kerjakan adalah
                    <x-anchor href="https://madurasabuah.com" target="_blank">Madurasabuah.com.</x-anchor>
                </x-list-card>

                <x-list-card>
                    <x-slot name="title">Company Profile dan Portofolio</x-slot>
                    Situs Perusahaan yang dapat memperkenalkan produk, kegiatan, dan lain-lain seperti situs ini.
                </x-list-card>

                <x-list-card>
                    <x-slot name="title">Blog</x-slot>
                    Ekspresikan hobi anda dengan menulis di blog yang memiliki fitur lengkap dengan multi-author dan saya bisa bantu anda untuk menghasilkan uang melalui Google Adsense!
                </x-list-card>

                 <x-list-card>
                    <x-slot name="title">Pembuatan Artikel & SEO Advisor</x-slot>
                    Tak perlu bingung dalam menulis artikel. Berikan saya rangkuman atau highlight artikel anda dan saya siap bantu anda membuat artikel.
                    Saya juga siap membantu situs anda memiliki ranking tinggi di mesin pencari dengan pengalaman SEO saya lebih dari 5 tahun!
                </x-list-card>

                <x-list-card>
                    <x-slot name="title">Optimasi Situs Wordpress</x-slot>
                    Anda punya Website berbasis Wordpress? Dengan pengalaman menggunakan Wordpress lebih dari 5 tahun, saya bisa membantu anda melakukan optimasi sehingga situs anda cepat diakses dan memiliki keamanan yang lebih baik.
                </x-list-card>
            </ul>
        </div>
    </div>
</div>

<div class="container my-5 px-4">
    <div class="flex">
        <div>
            <x-h2>Resume Tradisional</x-h2>
            <p class="text-mode">Bagi anda yang lebih menyukai Resume Tradisional seperti format Curriculum Vitae,
                <x-anchor href="{{ route('resume') }}">Klik disini untuk format HTML-nya</x-anchor> atau
                <x-anchor href="/document/curriculum-vitae-achmed-islamic-hernawan.pdf">klik disini untuk format PDF.</x-anchor></p>

        </div>
    </div>
</div>

<div class="container my-5 px-4">
    <div class="flex">
        <div>
            <x-h2>Eiittsss! Ingin tahu situs ini menggunakan teknologi web apa saja?</x-h2>
            <p class="mb-3">Ini dia teknologi yang dipakai di situs pribadi saya ini.</p>
            <ol class="ml-8 my-4 list-decimal">
                <li>Laravel sebagai Backend</li>
                <li>TailwindCSS, AlpineJS dan Animate CSS untuk Frontend</li>
                <li>Livewire untuk form yang dinamis</li>
                <li>Bootstrap Icons</li>
                <li>PHP versi 8.0 terbaru</li>
                <li>Apache untuk web server</li>
            </ol>
            <p>Bahkan, saya dengan senang hati berbagi source code untuk situs ini.
                Anda bisa download atau clone repositorynya
                <a target="_blank" href="https://github.com/achmedislamic/achmedislamic">di Github saya.</a>
            </p>
        </div>
    </div>
</div>

<div class="container my-5 px-4">
    <x-h2>Kepo dengan saya?</x-h2>

    <div class="flex">
        <div class="flex-none w-20 mr-8">
            <img class="rounded-full" src="/img/achmed.jpg" alt="Foto Profil Achmed Islamic Hernawna">
        </div>
        <div class="flex-auto my-auto">
            <p>Anda bisa cari informasi tentang saya jika anda
                <x-anchor target="_blank" href="https://www.google.com/search?source=hp&ei=8E_VX6P8G8HUrtoP7O-IoAw&iflsig=AINFCbYAAAAAX9VeACDjjPlyfmC2ELZrWsOXhiZCrvJR&q=achmed+islamic+hernawan&oq=achmed+islamic+hernawan&gs_lcp=CgZwc3ktYWIQAzIFCCEQoAE6BQguEJMCOgUIABCxAzoICC4QsQMQgwE6AggAOggIABCxAxCDAToLCC4QsQMQgwEQkwI6BQguELEDOggILhCxAxCTAjoCCC46BAgAEAo6BggAEBYQHjoICAAQFhAKEB46BAghEBU6BwghEAoQoAFQ_QdYrRpguhxoAXAAeACAAZwBiAG3FpIBBDIuMjGYAQCgAQGqAQdnd3Mtd2l6sAEA&sclient=psy-ab&ved=0ahUKEwijtJuYysntAhVBqksFHew3AsQQ4dUDCAY&uact=5">
                    mengetik nama lengkap saya di Google.</x-anchor> Seluruh jejak digital dan kontribusi saya di internet bisa anda temukan disana.</p>
        </div>
    </div>
</div>

<svg fill="currentColor" viewBox="0 0 1695 57" class="text-blue-500"><path d="M0 23c135.4 19 289.6 28.5 462.5 28.5C721.9 51.5 936.7 1 1212.2 1c183.6-.1 344.5 7.3 482.8 22v34H0V23z"></path></svg>

<div class="bg-blue-500">
    <div class="w-full md:max-w-3xl mx-auto py-16 pb-8 text-center textl-xl">
        <x-h2 class="text-white">Sudah pas? Saatnya berbisnis!</x-h2>
        <div class="w-4/5 mx-auto mb-8">
            <p class="mb-8 text-white">
                Ada proyek kerjasama, pertanyaan atau apapun itu? Kontak saya lewat email atau
                mengisi formulir dibawah ini.
            </p>
            @livewire('formulir-kontak')
        </div>
    </div>
</div>

<div class="pt-4 bg-blue-600 text-white py-4">
    <strong class="text-center">
        <p>Situs ini Open Source. Anda bisa clone <x-anchor
                href="https://github.com/achmedislamic/achmedislamic" target="_blank" color="text-white hover:text-gray-300">repositorynya disini</x-anch>.
        </p>
    </strong>
</div>
@endsection
