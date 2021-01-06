@extends('layouts.resume')

@section('judul')
Resume
@endsection

@section('konten')
<div class="container py-4 bg-dark text-white">
    <div class="row">
        <div class="col">
            <h2 class="display-4">Achmed Islamic Hernawan</h2>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3>Web Developer, Blogger, Technology Enthusiast</h3>
        </div>
    </div>
</div>

<div class="container bg-white">
    <div class="row">
        <div class="col-4" style="background-color: #ecececff;">
            <x-h3>Kontak</x-h3>
            <x-h4>Alamat</x-h4>
            <p>Kramat Tunggal, Kel. Sayang2,
                Kec. Cakranegara, Kota
                Mataram, NTB</p>
            <x-h4>No. HP</x-h4>
            <p>082-230-925-988</p>
            <x-h4>Email</x-h4>
            <p>achmedislamic@outlook.com</p>
            <x-h4>LinkedIn</x-h4>
            <p>http://bit.ly/linkedin_achmed</p>
            <x-h4>Twitter, Facebook, Instagram</x-h4>
            <p>@achmedislamic</p>
            <x-h4>Blog Pribadi</x-h4>
            <p>https://windowsku.com</p>

            <x-h3>Keahlian</x-h3>
            <ul class="list-unstyled">
                <li>Pembuatan Web</li>
                <li>Microsoft Office</li>
                <li>Mengetik 10 Jari Cepat</li>
                <li>Ahli Sistem Operasi Windows</li>
                <li>Menulis</li>
                <li>Search Engine Optimization</li>
            </ul>

            <x-h3>Sertifikasi</x-h3>
            <ul class="list-unstyled">
                <li class="mb-3">Programming 6 dari 7
                    Kompetensi dari BNSP
                    (Badan Nasional Sertifikasi
                    Profesi)</li>
                <li>Instruktur Lab. Rekayasa
                    Perangkat Lunak untuk 4
                    Praktikum selama kuliah</li>
            </ul>
        </div>
        <div class="col-8">
            <p class="mt-2">Seorang multi-talenta dalam dunia IT yang selalu berpikir
                bagaimana cara agar dapat bekerja lebih efektif, cepat, dan
                tepat. Berpengalaman sebagai Web Developer selama 4 tahun
                menggunakan bahasa pemrograman PHP, mahir dalam membaca
                artikel bahasa Inggris dan suka tantangan & belajar hal baru.</p>
            <p>Juga seorang penulis blog berpengalaman selama 6 tahun.
                Menguasai pengetikan 10 jari dengan kecepatan 70 kata per menit
                dan akurasi sebesar 97%, dan sangat antusias dengan
                perkembangan teknologi.</p>
            
            <x-h3>Pengalaman Bekerja</x-h3>
            <div class="container px-0">
                <div class="row no-gutters">
                    <div class="col-2">
                        2018-01 - Sekarang
                    </div>
                    <div class="col-10">
                        <x-h4>Web Developer</x-h4>
                        <p class="mb-1"><i>Badan Perencanaan Pembangunan, Penelitian dan
                            Pengembangan Daerah, Mataram, NTB</i></p>
                        <p>Merancang, mendesain, dan membangun aplikasi
                            perencanaan APBD bernama eNTeBePlan serta
                            membangun aplikasi kinerja ASN bernama e-Kinerja</p>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-2">
                        2017-04 - 2017-12
                    </div>
                    <div class="col-10">
                        <x-h4>Web Developer</x-h4>
                        <p class="mb-1"><i>Teknologi KBSE, Sdn. Bhd, Shah Alam, Malaysia</i></p>
                        <p>Merancang, mendesain, dan membangun aplikasi
                            penunjang keahlian untuk rakyat Malaysia bernama
                            e-Mahir</p>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-2">
                        2016-09 - 2017-04
                    </div>
                    <div class="col-10">
                        <x-h4>Web Developer</x-h4>
                        <p class="mb-1"><i>Martinez Software House, Surabaya, Jawa Timur</i></p>
                        <p>Merancang, mendesain, dan membangun web
                            untuk perusahaan dan e-Commerce.</p>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-2">
                        2016-04 - 2017-08
                    </div>
                    <div class="col-10">
                        <x-h4>Android Developer</x-h4>
                        <p class="mb-1"><i>PT. Global Business Solution, Surabaya, Jawa Timur</i></p>
                        <p>Maintenance aplikasi yang sudah ada bernama
                            Omega POS (Point of Sales) dan memastikan aplikasi
                            berjalan dengan lancar.</p>
                    </div>
                </div>

                <x-h3>Pendidikan Terakhir</x-h3>

                <div class="row no-gutters">
                    <div class="col-2">
                        2012-09 - 2016-02
                    </div>
                    <div class="col-10">
                        <x-h4>Institut Teknologi Nasional Malang</x-h4>
                        <p>Teknik Informatika</p>
                        
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-2">
                        2009-07 - 2012-06
                    </div>
                    <div class="col-10">
                        <x-h4>SMKN 03 Mataram</x-h4>
                        <p>Teknik Informatika - Multimedia</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
