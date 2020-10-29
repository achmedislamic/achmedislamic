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

    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h2>Berikut beberapa proyek yang pernah saya kerjakan</h2>
                    <ul class="list-unstyled">
                        <li class="media">
                        <img src="..." class="mr-3" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                        </li>
                    <li class="media my-4">
                      <img src="..." class="mr-3" alt="...">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </div>
                    </li>
                    <li class="media">
                      <img src="..." class="mr-3" alt="...">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                      </div>
                    </li>
                  </ul>
            </div>
        </div>
    </div>
@endsection