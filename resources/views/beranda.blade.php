@extends('layouts.app')

@section('judul')
    Beranda
@endsection

@section('konten')
    <div class="container my-5">
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

    <div class="container my-5">
        <div class="row">
            <div class="col">
                <p class="hero-text">
                    Assalamualaikum! Saya Achmed. Saya bekerja dalam bidang pembuatan website dan menulis blog.
                    Saya ahli menggunakan CodeIgniter dan Laravel Framework untuk backend, Bootstrap dan 
                    jQuery untuk frontend. Saya juga memiliki blog pribadi yaitu 
                    <a href="https://windowsku.com" target="_blank">Windowsku</a> dimana saya membagikan pengetahuan saya akan teknologi.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col text-center">
                <img src="/img/responsif.png" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">Berikut beberapa proyek yang pernah saya kerjakan</h2>
                    <ul class="list-unstyled">
                        <li class="media">
                            <svg class="bi text-primary mr-3" width="32" height="32">
                                <use xlink:href="/icons/bootstrap-icons.svg#check-circle-fill"/>
                            </svg>
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">eNTeBePlan</h5>
                                <p>Merupakan sistem perencanaan APBD untuk Provinsi NTB.</p>
                            </div>
                        </li>
                  </ul>
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
                    <li>Bootstrap dan jQuery untuk Frontend</li>
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
@endsection