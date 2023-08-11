@extends('layouts.guest')

@push('styles')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:600|quicksand:400" rel="stylesheet" />
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
        }
    </style>
@endpush

@section('judul')
    Jasa Pembuatan Situs Web
@endsection

@section('konten')
    <nav x-data="{ menu: false }" :class="menu ? '' : 'backdrop-blur-md bg-white/60'" class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://achmedislamic.com/" class="flex items-center">
                <img src="https://achmedislamic.com/img/favicon.png" class="h-8 mr-3" alt="Achmed Islamic Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">achmedislamic.com</span>
            </a>
            <div class="flex md:order-2 md:hidden">
                <button @click="menu = ! menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div :class="menu ? '' : 'hidden'" x-transition x-cloak class="items-center justify-between w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:border-gray-700">
                    <li>
                        <a href="#beranda" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#punya-situs-web" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Kenapa Harus Punya Situs Web?</a>
                    </li>
                    <li>
                        <a href="#pilih-kami" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Kenapa Memilih Kami?</a>
                    </li>
                    <li>
                        <a href="#paket-situs-web" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Paket Situs Web</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="beranda" class="bg-center bg-cover bg-no-repeat bg-digital-marketing bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Buat Situs Web Murah & Berkualitas!</h1>
            <p class="mb-8 text-xl/relaxed font-normal text-gray-300 lg:text-xl/10 sm:px-16 lg:px-48">
                Perkenalkan diri atau bisnis Anda ke seluruh dunia dengan situs web sekarang juga!
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Kenapa Harus Memiliki Situs Web?
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section id="punya-situs-web" class="mx-auto max-w-screen-2xl mb-10 px-4 scroll-mt-24 mt-8">
        <div class="flex flex-col space-y-3">
            <h2 class="my-4 text-center text-2xl font-bold text-gray-800 md:mb-8 lg:text-3xl xl:mb-12">Ada banyak alasan kenapa Anda harus memiliki situs web!
            </h2>
            <div class="flex flex-col md:space-y-3">
                <ol class="items-center sm:flex">
                    <x-vertical-timeline title="Meningkatkan Kredibilitas">
                        Kepercayaan orang atau pelanggan terhadap Anda dan bisnis Anda pastinya meningkat dengan adanya situs web
                    </x-vertical-timeline>

                    <x-vertical-timeline title="Media Promosi">
                        Karena situs web dapat diakses oleh semua orang, situs web menjadi cara yang tepat untuk melakukan promosi
                    </x-vertical-timeline>

                    <x-vertical-timeline title="Menghemat Waktu">
                        Anda tidak perlu menjelaskan panjang lebar ke konsumen, cukup berikan alamat situs web Anda dan selesai
                    </x-vertical-timeline>

                    <x-vertical-timeline title="Tampilan Menarik">
                        Anda atau bisnis Anda akan semakin mudah diingat berkat situs web yang tampilannya bisa diatur sesuai selera
                    </x-vertical-timeline>
                </ol>

                <ol class="items-center sm:flex">
                    <x-vertical-timeline title="Dapat Diakses 24 Jam">
                        Malam hari tentu waktunya untuk tidur, tapi tidak untuk situs web Anda.
                    </x-vertical-timeline>

                    <x-vertical-timeline title="Meningkatkan Penjualan">
                        Dengan berbagai keunggulan promosi yang ditawarkan situs web, penjualan toko offline maupun online menjadi meningkat
                    </x-vertical-timeline>

                    <x-vertical-timeline title="Meningkatkan Karir">
                        Seseorang yang memiliki situs web pribadi lebih dilihat oleh rekruter dibandingkan sebaliknya
                    </x-vertical-timeline>
                </ol>
            </div>
        </div>
    </section>

    <section id="pilih-kami" class="mx-auto mb-10 px-4 scroll-mt-24 mt-8 bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% text-white drop-shadow-lg">
        <div class="flex flex-col space-x-2 pb-5">
            <h2 class="my-6 text-center text-2xl text-white lg:text-3xl xl:mb-12">Kenapa Memilih Kami?
            </h2>
            <div class="flex flex-col space-y-3">
                <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-3 items-center justify-center">
                    {{-- card --}}
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pengalaman membuat situs web selama 5 tahun!</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Apapun perangkatnya: Smartphone, Tablet, Komputer Desktop, Laptop, Netbook, dan perangkat lainnya yang punya internet dan layar, pastinya bisa mengakses situs Anda!</p>
                            </p>
                        </div>
                    </div>
                    {{-- end card --}}

                    {{-- card --}}
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Web bisa dibuka di semua perangkat!</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Apapun perangkatnya: Smartphone, Tablet, Komputer Desktop, Laptop, Netbook, dan perangkat lainnya yang punya internet dan layar, pastinya bisa mengakses situs Anda!</p>
                            </p>
                        </div>
                    </div>
                    {{-- end card --}}

                    {{-- card --}}
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Situs Web yang Anda bayar milik Anda sepenuhnya!</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tidak seperti yang lain, Anda tidak perlu komitmen pembayaran bulanan atau tahunan. Beli sekali, situs web tersebut milik Anda sepenuhnya!</p>
                            </p>
                        </div>
                    </div>
                    {{-- end card --}}
                </div>

                <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-3 items-center justify-center">
                    {{-- card --}}
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tempat Hosting bisa pilih sendiri, di mulai dari Rp. 12.500 per bulan!</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Hosting berfungsi sebagai tempat Anda menyimpan situs agar bisa diakses orang di seluruh dunia. Tidak seperti yang lain, kami hanya mengambil jasa pembuatan situs saja sehingga harga sangat terjangkau!</p>
                            </p>
                        </div>
                    </div>
                    {{-- end card --}}

                    {{-- card --}}
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pelayanan 100% hingga situs web bisa diakses seluruh dunia dan bergaransi!</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Garansi selama 6 bulan untuk situs web standar dan 1 tahun untuk situs web berkebutuhan khusus yang meliputi perbaikan kesalahan maupun konfigurasi hosting!</p>
                            </p>
                        </div>
                    </div>
                    {{-- end card --}}
                </div>
            </div>
        </div>
    </section>

    <section id="paket-situs-web" class="mx-auto mb-10 px-4 scroll-mt-24 mt-8 text-white">
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-xl px-4 md:px-8">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-8 lg:text-3xl xl:mb-12">Yuk Pilih Paket Situs Web Anda!</h2>

                <div class="mb-6 flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-3 justify-center">
                    <!-- plan - start -->
                    <div class="w-full md:w-1/2 flex flex-col overflow-hidden rounded-lg border hover:bg-blue-100 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 duration-300">
                        <div class="h-2 bg-blue-500"></div>

                        <div class="flex flex-1 flex-col p-6 pt-8">
                            <div class="mb-12">
                                <div class="mb-2 text-center text-2xl font-bold text-gray-800">Situs Web Standar</div>

                                <p class="mb-8 px-8 text-center text-black">
                                    Cocok untuk situs web seperti blog pribadi, situs berita, pengenalan bisnis, katalog produk, profil perusahaan, dan semacamnya
                                </p>

                                <div class="space-y-4">
                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check />
                                        <span class="text-black">Membuat konten artikel/produk/barang tanpa batas</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check />
                                        <span class="text-black">Fitur multi pengguna sehingga Anda bisa mengajak orang lain mengelola situs web Anda</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check />
                                        <span class="text-black">Unggah gambar, video, dokumen dan lain-lain dengan mudah</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check />
                                        <span class="text-black">Teroptimasi agar dapat dicari di mesin pencari seperti Google, Yahoo, Bing, dll</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check />
                                        <span class="text-black">Sangat mudah digunakan dan dikelola serta memiliki sertifikat keamanan!</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check />
                                        <span class="text-black">Pengerjaan cepat. Hanya butuh waktu 7 hingga 14 hari, situs web dapat Anda akses!</span>
                                    </div>
                                    <!-- check - end -->
                                </div>
                            </div>

                            <div class="mt-auto">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=6282230925988&text=Hai!%20Saya%20ingin%20memesan%20situs%20web.%20Deskripsinya%20adalah" class="block rounded-lg bg-blue-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-blue-700 focus-visible:ring active:text-gray-700 md:text-base">Rp. 1.200.000 s/d Rp. 2.200.000</a>
                            </div>
                        </div>
                    </div>
                    <!-- plan - end -->

                    <!-- plan - start -->
                    <div class="w-full md:w-1/2 flex flex-col overflow-hidden rounded-lg border lg:mt-8 hover:bg-orange-100 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 duration-300">
                        <div class="h-2 bg-orange-600"></div>

                        <div class="flex flex-1 flex-col p-6 pt-8">
                            <div class="mb-12">
                                <div class="mb-2 text-center text-2xl font-bold text-gray-800">Situs Web Berkebutuhan Khusus</div>

                                <p class="mx-auto mb-8 px-8 text-center text-black">
                                    Cocok untuk situs sistem informasi manajemen seperti pengelolaan karyawan, pengelolaan barang/produk, e-commerce, dan lain-lain
                                </p>

                                <div class="space-y-4">
                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check text-color="text-orange-500" />
                                        <span class="text-black">Situs web yang dibuat akan didesain kasar terlebih dahulu dan diserahkan ke Anda untuk dikonfirmasi</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check text-color="text-orange-500" />
                                        <span class="text-black">Akses penuh terhadap situs web, skema pembayaran hanya 1x saja</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check text-color="text-orange-500" />
                                        <span class="text-black">Selain situs web, Anda juga mendapatkan buku panduan yang mudah dimengerti</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check text-color="text-orange-500" />
                                        <span class="text-black">Garansi 1 tahun untuk perbaikan situs web selama situs berjalan</span>
                                    </div>
                                    <!-- check - end -->
                                </div>
                            </div>

                            <div class="mt-auto">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=6282230925988&text=Hai!%20Saya%20ingin%20memesan%20situs%20web.%20Deskripsinya%20adalah" class="block rounded-lg bg-orange-600 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-orange-800 focus-visible:ring active:bg-gray-600 md:text-base">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                    <!-- plan - end -->
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto px-4 scroll-mt-24 mt-8 drop-shadow-lg bg-red-500 text-white">
        <div class="flex flex-col space-y-3 pb-5">
            <h2 class="my-4 text-center text-2xl font-bold md:mb-8 lg:text-3xl xl:mb-12">Tunggu Apa Lagi, Segera Pesan!</h2>
            <p class="text-center">Segera hubungi kami dengan menyentuh tombol di bawah ini</p>
            <div class="flex items-center justify-center">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=6282230925988&text=Hai!%20Saya%20ingin%20memesan%20situs%20web.%20Deskripsinya%20adalah" class="block rounded-lg bg-blue-600 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-orange-800 focus-visible:ring active:bg-gray-600 md:text-base w-52">Hubungi Kami</a>
            </div>
        </div>
    </section>
@endsection
