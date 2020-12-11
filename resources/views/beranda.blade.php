@extends('layouts.app')

@section('judul')
Beranda
@endsection

@section('konten')
<div class="container my-5 animate__animated animate__fadeInDown">
    <div class="row">
        <div class="col-md-6">
            <div class="text-lg font-weight-bold">Full-stack web developer & Penulis Blog</div>
            <div class="text-primary text-lg font-weight-bold accent-color">Selamat datang di situs saya.</div>
        </div>
        <div class="col-md-6">
            <img src="/img/hero.png" alt="Hero" class="hero mx-auto">
        </div>
    </div>
</div>

<div class="container my-5 animate__animated animate__fadeInRight">
    <div class="row">
        <div class="col">
            <p class="hero-text">
                Assalamualaikum! Saya Achmed. Saya bekerja dalam bidang pembuatan website dan menulis blog.
                Saya ahli menggunakan CodeIgniter dan Laravel Framework untuk backend, Bootstrap dan
                jQuery untuk frontend. Saya juga memiliki blog pribadi yaitu
                <a href="https://windowsku.com" target="_blank">Windowsku</a> dimana saya membagikan pengetahuan saya
                akan teknologi.
            </p>
        </div>
    </div>
</div>

<div class="container-fluid my-5 animate__animated animate__fadeInLeft animate__delay-1s">
    <div class="row">
        <div class="col text-center">
            <img src="/img/responsif.png" class="img-fluid">
        </div>
    </div>
</div>

<div class="container my-5" id="proyek">
    <div class="row">
        <div class="col">
            <h2 class="mb-3"><strong>Anda butuh website?</strong> Saya bisa menerima proyek anda! Berikut daftar proyek yang bisa
                saya kerjakan:</h2>
            <ul class="list-unstyled">

                <li class="media mb-3">
                    <svg class="bi text-primary mr-3" width="32" height="32">
                        <use xlink:href="/icons/bootstrap-icons.svg#check-circle-fill" />
                    </svg>
                    <div class="media-body">
                        <h5 class="mt-0 mb-1 font-weight-bold">Sistem Informasi</h5>
                        Sistem pengelolaan Informasi perusahaan, keuangan, dan manajemen. 
                        Contoh proyek yang telah saya kerjakan adalah sistem informasi perencanaan 
                        <a href="https://e-planning.ntbprov.go.id" target="_blank">eNTeBePlan</a> dan 
                        <a href="https://e-kinerja.ntbprov.go.id" target="_blank">e-Kinerja.</a>
                    </div>
                </li>

                <li class="media mb-3">
                    <svg class="bi text-primary mr-3" width="32" height="32">
                        <use xlink:href="/icons/bootstrap-icons.svg#check-circle-fill" />
                    </svg>
                    <div class="media-body">
                        <h5 class="mt-0 mb-1 font-weight-bold">E-Commerce</h5>
                        Situs penjualan produk dengan pengiriman barang se-Indonesia dan pembayaran aman
                        serta dengan dukungan banyak Bank dan metode pembayaran. Contoh proyek yang saya
                        kerjakan adalah  
                        <a href="https://madurasabuah.com" target="_blank">Madurasabuah.com.</a>
                    </div>
                </li>

                <li class="media mb-3">
                    <svg class="bi text-primary mr-3" width="32" height="32">
                        <use xlink:href="/icons/bootstrap-icons.svg#check-circle-fill" />
                    </svg>
                    <div class="media-body">
                        <h5 class="mt-0 mb-1 font-weight-bold">Company Profile dan Portofolio</h5>
                        Situs Perusahaan yang dapat memperkenalkan produk, kegiatan, dan lain-lain seperti situs ini.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col">
            <h2>Resume Tradisional</h2>
            <p>Bagi anda yang lebih menyukai Resume Tradisional seperti format Curriculum Vitae, 
                <a href="{{ route('resume') }}">Klik disini untuk format HTML-nya</a> atau 
                <a href="{{ route('resume_pdf') }}">klik disini untuk format PDF</a></p>
            
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col">
            <h2>Eiittsss! Ingin tahu situs ini menggunakan teknologi web apa saja?</h2>
            <p>Ini dia teknologi yang dipakai di situs pribadi saya ini.</p>
            <ol>
                <li>Laravel sebagai Backend</li>
                <li>Bootstrap, jQuery dan Animate CSS untuk Frontend</li>
                <li>Livewire untuk form yang dinamis</li>
                <li>Bootstrap Icons</li>
                <li>PHP versi 7.4 terbaru</li>
                <li>Apache untuk web server</li>
            </ol>
            <p>Bahkan, saya dengan senang hati berbagi source code untuk situs ini.
                Anda bisa download atau clone repositorynya
                <a target="_blank" href="https://github.com/achmedislamic/achmedislamic">di Github saya.</a>
            </p>
        </div>
    </div>
</div>



<svg fill="currentColor" viewBox="0 0 1695 57" class="text-info">
    <path d="M0 23c135.4 19 289.6 28.5 462.5 28.5C721.9 51.5 936.7 1 1212.2 1c183.6-.1 344.5 7.3 482.8 22v34H0V23z">
    </path>
</svg>

<div class="container-fluid px-0 bg-info" id="kontak">
    <div class="row no-gutters">
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="pt-3"><strong>Kontak Saya!</strong></h2>
                        <p>Ada proyek kerjasama, pertanyaan atau apapun itu? Kontak saya lewat email atau
                            mengisi formulir dibawah ini.
                        </p>
                    </div>


                </div>

                <div class="row no-gutters">
                    <div class="col pb-3">
                        @livewire('formulir-kontak')
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid pt-4 bg-primary text-white py-4">
    <div class="row">
        <div class="col">
            <strong>
                <p>Situs ini Open Source. Anda bisa clone <a class="text-reset"
                        href="https://github.com/achmedislamic/achmedislamic" target="_blank">repositorynya disini</a>.
                </p>
            </strong>
        </div>
    </div>
</div>
@endsection
