@extends('layouts.app')

@section('judul')
Beranda
@endsection

@section('konten')
<div class="container mb-10 px-4 scroll-mt-24" id="profil">
    <div class="flex flex-col md:flex-row space-x-2">
        <div class="flex flex-col md:w-1/2">
            <div class="text-lg font-bold leading-relaxed mb-3 dark:text-white">Full-stack Web Developer & Penulis Blog
            </div>
            <div class="text-lg font-bold text-blue-500 leading-relaxed">Selamat datang di situs saya.</div>
        </div>
        <div class="md:w-1/2">
            <img src="/img/hero.png" alt="Hero" class="mx-auto">
        </div>
    </div>
</div>

<div class="container my-5 px-4">
    <div class="flex flex-col md:flex-row">
        <div class="flex flex-col">
            <p class="hero-text text-mode dark:text-white">
                Hai! Perkenalkan saya Achmed. Saya bekerja di bidang pembuatan website dan menulis blog.
                Saya saat ini menggunakan tools modern untuk membuat website yaitu <i>TALL Stack</i> yang terdiri dari
                <x-anchor target="_blank" href="https://tailwindcss.com">TailwindCSS</x-anchor> untuk <i>styling,</i>
                <x-anchor target="_blank" href="https://alpinejs.dev">AlpineJS</x-anchor> untuk interaktivitas di
                tampilan depan, <x-anchor href="https://laravel-livewire.com" target="_blank">Livewire</x-anchor> untuk
                interaktivitas dari <i>Backend</i> ke tampilan depan dan <x-anchor href="https://laravel.com"
                    target="_blank">Laravel</x-anchor> Framework untuk backend. Saya juga memiliki blog pribadi yaitu
                <x-anchor href="https://windowsku.com" target="_blank">Windowsku</x-anchor> dimana saya menulis tentang
                teknologi.
            </p>
        </div>
    </div>
</div>

<div class="container my-5 px-4 flex">
    <div class="h-32 sm:h-48 md:h-80 w-full bg-center dark:bg-ilustrasi-dark bg-ilustrasi bg-contain bg-no-repeat">
    </div>
</div>

<div class="container my-5 px-4 dark:text-white scroll-mt-24" id="proyek">
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
                    Ekspresikan hobi anda dengan menulis di blog yang memiliki fitur lengkap dengan multi-author dan
                    saya bisa bantu anda untuk menghasilkan uang melalui Google Adsense!
                </x-list-card>

                <x-list-card>
                    <x-slot name="title">Pembuatan Artikel & SEO Advisor</x-slot>
                    Tak perlu bingung dalam menulis artikel. Berikan saya rangkuman atau highlight artikel anda dan saya
                    siap bantu anda membuat artikel.
                    Saya juga siap membantu situs anda memiliki ranking tinggi di mesin pencari dengan pengalaman SEO
                    saya lebih dari 5 tahun di <x-anchor href="https://windowsku.com" target="_blank">Windowsku!
                    </x-anchor>
                </x-list-card>

                <x-list-card>
                    <x-slot name="title">Optimasi Situs Wordpress</x-slot>
                    Anda punya Website berbasis Wordpress? Dengan pengalaman menggunakan Wordpress lebih dari 5 tahun,
                    saya bisa membantu anda melakukan optimasi sehingga situs anda cepat diakses dan memiliki keamanan
                    yang lebih baik.
                </x-list-card>
            </ul>
        </div>
    </div>
</div>

<div class="container my-5 px-4 dark:text-white">
    <div class="flex">
        <div>
            <x-h2>Resume Tradisional</x-h2>
            <p class="text-mode">Bagi anda yang lebih menyukai Resume Tradisional seperti format Curriculum Vitae,
                <x-anchor href="{{ route('resume') }}">Klik disini untuk format HTML-nya</x-anchor> atau
                <x-anchor href="/document/curriculum-vitae-achmed-islamic-hernawan.pdf">klik disini untuk format PDF.
                </x-anchor>
            </p>

        </div>
    </div>
</div>

<div class="container my-5 px-4 dark:text-white scroll-mt-24" id="ebook">
    <div class="flex">
        <div>
            <x-h2>E-Book</x-h2>
            <div class="flex flex-col justify-center md:flex-row w-full mt-8 md:space-x-3">
                <div class="w-full md:w-1/2 my-2">
                    <a href="https://windowsku.com/10-tips-cara-belajar-menggunakan-excel-cepat/" target="_blank">
                        <img src="{{ asset('img/excel.webp') }}" class="block w-full h-auto
                        bg-no-repeat bg-center
                        bg-cover bg-lighter
                        rounded-3xl
                        shadow-lg
                        transition-all
                        duration-300
                        hover:-translate-y-2
                      ">
                    </a>
                    <div class="flex flex-col mt-4 px-4">
                        <h2 class="text-xl sm:text-3xl font-bold font-heading text-center sm:text-left">12 Tips Cara
                            Belajar Menggunakan Excel Dengan Cepat</h2>
                        <p class="text-md sm:text-lg font-body text-center sm:text-left mt-2">E-book ini membahas cara
                            cepat belajar Excel dengan metode tercepat.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 my-2">
                    <a href="https://windowsku.com/langkah-belajar-microsoft-word-cepat/" target="_blank">
                        <img src="{{ asset('img/word.webp') }}" class="block w-full h-auto
                                            bg-no-repeat bg-center
                                            bg-cover bg-lighter
                                            rounded-3xl
                                            shadow-lg
                                            transition-all
                                            duration-300
                                            hover:-translate-y-2
                                          ">
                    </a>
                    <div class="flex flex-col mt-4 px-4">
                        <h2 class="text-xl sm:text-3xl font-bold font-heading text-center sm:text-left">10 Langkah
                            Belajar Microsoft Word Tercepat Untuk Semua</h2>
                        <p class="text-md sm:text-lg font-body text-center sm:text-left mt-2">Belajar fundamental
                            Microsoft Word dengan cepat dan siap praktek.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 px-4 dark:text-white">
    <x-h2>Kepo dengan saya?</x-h2>

    <div class="flex flex-col items-center justify-center sm:flex-row">
        <div class="flex-none align-items-center w-20 sm:mr-8">
            <img class="rounded-full" src="/img/achmed.jpg" alt="Foto Profil Achmed Islamic Hernawan">
        </div>
        <div class="flex-auto my-auto">
            <p>Anda bisa cari informasi tentang saya jika anda
                <x-anchor target="_blank"
                    href="https://www.google.com/search?source=hp&ei=8E_VX6P8G8HUrtoP7O-IoAw&iflsig=AINFCbYAAAAAX9VeACDjjPlyfmC2ELZrWsOXhiZCrvJR&q=achmed+islamic+hernawan&oq=achmed+islamic+hernawan&gs_lcp=CgZwc3ktYWIQAzIFCCEQoAE6BQguEJMCOgUIABCxAzoICC4QsQMQgwE6AggAOggIABCxAxCDAToLCC4QsQMQgwEQkwI6BQguELEDOggILhCxAxCTAjoCCC46BAgAEAo6BggAEBYQHjoICAAQFhAKEB46BAghEBU6BwghEAoQoAFQ_QdYrRpguhxoAXAAeACAAZwBiAG3FpIBBDIuMjGYAQCgAQGqAQdnd3Mtd2l6sAEA&sclient=psy-ab&ved=0ahUKEwijtJuYysntAhVBqksFHew3AsQQ4dUDCAY&uact=5">
                    mengetik nama lengkap saya di Google.</x-anchor> Seluruh jejak digital dan kontribusi saya di
                internet bisa anda temukan disana.
            </p>
        </div>
    </div>
</div>

<svg fill="currentColor" viewBox="0 0 1695 57" class="text-blue-500 dark:text-blue-800">
    <path d="M0 23c135.4 19 289.6 28.5 462.5 28.5C721.9 51.5 936.7 1 1212.2 1c183.6-.1 344.5 7.3 482.8 22v34H0V23z">
    </path>
</svg>

<div class="bg-blue-500 dark:bg-blue-800" id="kontak">
    <div class="w-full md:max-w-3xl mx-auto py-16 pb-8 text-center">
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
        <p class="mx-2">Situs ini Open Source. Anda bisa clone <x-anchor
                href="https://github.com/achmedislamic/achmedislamic" target="_blank"
                color="text-white hover:text-gray-300">repositorynya disini.</x-anchor>
        </p>
    </strong>
</div>
@endsection
