@extends('layouts.guest')

@section('meta-description')
    Buat situs web / website murah & berkualitas sekarang juga! Kami adalah tenaga profesional dari Mataram, Nusa Tenggara Barat siap membantu Anda!
@endsection

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
    <a href="https://api.whatsapp.com/send?phone=6282230925988&text=Hai!%20Saya%20ingin%20memesan%20situs%20web.%20Deskripsinya%20adalah"
       class="fixed z-20 bottom-5 md:bottom-10 right-4 md:right-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <div class="flex flex-row space-x-3 p-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <span class="text-white hidden md:inline-block">Hubungi Kami</span>
        </div>
    </a>

    <nav
         x-data="{ menu: false }" :class="menu ? '' : 'backdrop-blur-md bg-white/60'"
         @keydown.escape.window="menu = false"
         @click.outside="menu = false"
         class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
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
                        <a @click="menu = false" href="#beranda" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a @click="menu = false" href="#pilih-kami" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Kenapa Memilih Kami?</a>
                    </li>
                    <li>
                        <a @click="menu = false" href="#punya-situs-web" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Kenapa Harus Punya Situs Web?</a>
                    </li>
                    <li>
                        <a @click="menu = false" href="#paket-situs-web" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Paket Situs Web</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="beranda" class="bg-gradient-to-r from-blue-100 to-slate-200">
        <div class="hidden sm:block absolute left-0 bottom-2 lg:bottom-32">
            <div class="lg:-ml-20 -ml-36">
                <img src="{{ asset('img/arrow.webp') }}" alt="left-icon" class="w-full">
            </div>
        </div>
        <div class="px-4 mx-auto max-w-screen-xl text-center pt-36 pb-24 lg:py-56">
            <h1 class="mb-4 text-2xl/relaxed font-extrabold tracking-tight md:text-5xl lg:text-6xl">
                <p class="mb-4 text-3xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl">
                    Buat Situs Web
                </p>
                <span
                      x-data="{
                          startingAnimation: { opacity: 0, scale: 4 },
                          endingAnimation: { opacity: 1, scale: 1, stagger: 0.07, duration: 0.7, ease: 'expo.out' },
                          addCNDScript: true,
                          animateText() {
                              $el.classList.remove('invisible');
                              gsap.fromTo($el.children, this.startingAnimation, this.endingAnimation);
                          },
                          splitCharactersIntoSpans(element) {
                              text = element.innerHTML;
                              modifiedHTML = [];
                              for (var i = 0; i < text.length; i++) {
                                  attributes = '';
                                  if (text[i].trim()) { attributes = 'class=\'inline-block\''; }
                                  modifiedHTML.push('<span ' + attributes + '>' + text[i] + '</span>');
                              }
                              element.innerHTML = modifiedHTML.join('');
                          },
                          addScriptToHead(url) {
                              script = document.createElement('script');
                              script.src = url;
                              document.head.appendChild(script);
                          }
                      }"
                      x-init="splitCharactersIntoSpans($el);
                      if (addCNDScript) {
                          addScriptToHead('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js');
                      }
                      gsapInterval = setInterval(function() {
                          if (typeof gsap !== 'undefined') {
                              animateText();
                              clearInterval(gsapInterval);
                          }
                      }, 5);"
                      class="invisible px-2 text-[28px] md:text-5xl lg:text-6xl bg-gradient-to-r from-cyan-500 to-blue-500 text-white">Murah dan Berkualitas!</span>
            </h1>
            <p class="mb-8 text-xl/relaxed font-normal lg:text-xl/10 sm:px-16 lg:px-48">
                Perkenalkan diri atau bisnis Anda ke seluruh dunia dengan situs web sekarang juga!
            </p>
            <div class="flex items-center justify-center">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=6282230925988&text=Hai!%20Saya%20ingin%20memesan%20situs%20web.%20Deskripsinya%20adalah" class="flex flex-row space-x-3 rounded-lg bg-blue-600 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-blue-800 focus-visible:ring active:bg-gray-600 md:text-base w-52">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>Hubungi Kami</span>
                </a>
            </div>
        </div>
    </section>

    <section id="pilih-kami" class="mx-auto py-8 mb-10 px-4 scroll-mt-24 bg-gradient-to-b md:bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% text-white drop-shadow-lg">
        <div class="max-w-screen-lg mx-auto flex flex-col items-center justify-between space-y-3 md:space-y-0 md:flex-row md:space-x-3">
            <div class="flex flex-col space-y-3">
                <small class="text-base">Solusi Modern, Teknologi Modern, Jangkau Makin Banyak Orang</small>
                <h3 class="font-bold">
                    <span class="">
                        <p class="text-6xl/[4.5rem] text-white">Ide Anda</p>
                        <p class="text-6xl/[4.5rem] text-white">Menjadi Nyata</p>
                        <p class="text-6xl/[4.5rem] text-white">Dengan Kami</p>
                    </span>
                </h3>
                <ul class="max-w-md space-y-1 list-inside dark:text-gray-400 text-white font-bold">
                    <li class="flex items-center text-md">
                        <svg class="w-5 h-5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        Tenaga profesional berpengalaman lebih dari 5 tahun
                    </li>
                    <li class="flex items-center text-md">
                        <svg class="w-5 h-5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        Garansi situs web bebas masalah hingga 1 tahun
                    </li>
                    <li class="flex items-center text-md">
                        <svg class="w-5 h-5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        Harga terjangkau
                    </li>
                    <li class="flex items-center text-md">
                        <svg class="w-5 h-5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        Menggunakan perangkat lunak termutakhir
                    </li>
                    <li class="flex items-center text-md">
                        <svg class="w-5 h-5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        100% terima beres dan langsung online!
                    </li>
                </ul>
            </div>
            <img src="{{ asset('img/development.svg') }}" class="w-96 h-96">
        </div>
    </section>

    <section id="punya-situs-web" class="mx-auto max-w-screen-2xl mb-10 px-4 scroll-mt-24 mt-8">
        <div class="flex flex-col space-y-3">
            <h2 class="my-4 text-center text-2xl font-bold text-gray-800 md:mb-8 lg:text-3xl xl:mb-12">Ada banyak alasan kenapa Anda harus memiliki situs web!
            </h2>
            <div class="flex flex-col md:space-y-3">

                <ol class="items-center sm:flex">
                    <x-vertical-timeline title="Dapat Diakses 24 Jam">
                        Malam hari tentu waktunya untuk tidur, tapi tidak untuk situs web Anda.
                    </x-vertical-timeline>

                    <x-vertical-timeline title="Media Promosi">
                        Karena situs web dapat diakses oleh semua orang, situs web menjadi cara yang tepat untuk melakukan promosi
                    </x-vertical-timeline>

                    <x-vertical-timeline title="Meningkatkan Karir">
                        Seseorang yang memiliki situs web pribadi lebih dilihat oleh rekruter dibandingkan sebaliknya
                    </x-vertical-timeline>

                </ol>

                <ol class="items-center sm:flex">
                    <x-vertical-timeline title="Meningkatkan Kredibilitas">
                        Kepercayaan orang atau pelanggan terhadap Anda dan bisnis Anda meningkat dengan adanya situs web
                    </x-vertical-timeline>


                    <x-vertical-timeline title="Meningkatkan Penjualan">
                        Dengan berbagai keunggulan promosi yang ditawarkan situs web, penjualan toko offline maupun online menjadi meningkat
                    </x-vertical-timeline>

                </ol>

            </div>
        </div>
    </section>

    <section class="mx-auto mb-10 py-5 text-white px-4 scroll-mt-24 bg-gradient-to-b md:bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
        <div class="max-w-screen-lg mx-auto flex flex-col items-center justify-center space-y-3 md:space-y-0 md:flex-row md:space-x-3 pb-5">
            <div class="flex place-items-end">
                <img src="{{ asset('img/marketing.svg') }}" class="w-96 h-96">
            </div>
            <div class="flex flex-col space-y-3">
                <h3 class="font-bold text-3xl">
                    <p>Apa Yang Membuat Kami</p>
                    <p>Berbeda Dengan Yang Lain?</p>
                </h3>
                <ul class="max-w-md list-inside dark:text-gray-400 flex flex-col space-y-3">
                    <li class="flex items-start text-md">
                        <svg class="w-5 h-5 mt-1 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <p><span class="font-bold">Tak ada pembatasan</span> berapa banyak artikel / halaman / produk yang bisa dibuat</p>
                    </li>
                    <li class="flex items-start text-md">
                        <svg class="w-5 h-5 mt-1 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <p><span class="font-bold">Integrasi</span> <a target="_blank" href="https://analytics.google.com/analytics/web/" class="hover:text-gray-300 underline hover:cursor-pointer">Google Analytics</a> dan <a target="_blank" href="https://search.google.com/search-console/about" class="hover:text-gray-300 underline hover:cursor-pointer">Google Search Console</a> <span class="font-bold">Gratis!</span></p>
                    </li>
                    <li class="flex items-start text-md">
                        <svg class="w-5 h-5 mt-1 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <p>Tempat hosting terpercaya dengan <span class="font-bold">biaya mulai dari Rp. 26.400 per bulan.</span></p>
                    </li>
                    <li class="flex items-start text-md">
                        <svg class="w-5 h-5 mt-1 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <p><span class="font-bold">Tak ada batasan jumlah dokumen dan foto</span> yang bisa diunggah.</p>
                    </li>
                    <li class="flex items-start text-md">
                        <svg class="w-5 h-5 mt-1 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <p><span class="font-bold">Gratis Domain!</span> Silakan tentukan sendiri alamat situs web Anda. Misal: nama-anda-yang-paling-keren.com</p>
                    </li>
                </ul>

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

                                <p class="mb-8 px-1 md:px-8 text-center text-black">
                                    Cocok untuk situs web seperti blog pribadi, situs berita, pengenalan bisnis, katalog produk, profil perusahaan, dan semacamnya
                                </p>

                                <div class="space-y-4">

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check />
                                        <span class="text-black">Tambah pengguna baru tanpa batas untuk membantu mengelola situs</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check />
                                        <span class="text-black">Unggah file apapun dengan mudah</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check />
                                        <span class="text-black">Optimasi Mesin Pencari seperti Google, Yahoo, Bing, dll</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check />
                                        <span class="text-black">Sangat mudah digunakan dan dikelola!</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check />
                                        <span class="text-black">Pengerjaan cepat 7 hingga 14 hari & langsung Online!</span>
                                    </div>
                                    <!-- check - end -->
                                </div>
                            </div>

                            <div class="mt-auto">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=6282230925988&text=Hai!%20Saya%20ingin%20memesan%20situs%20web.%20Deskripsinya%20adalah" class="block rounded-lg bg-blue-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-blue-700 focus-visible:ring active:text-gray-700 md:text-base">Rp. 1.300.000</a>
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

                                <p class="mx-auto mb-8 px-1 md:px-8 text-center text-black">
                                    Cocok untuk situs sistem informasi manajemen seperti pengelolaan karyawan, pengelolaan barang/produk, e-commerce, dll
                                </p>

                                <div class="space-y-4">
                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check text-color="text-orange-500" />
                                        <span class="text-black">Pembuatan situs <i>Custom</i> dengan teknologi modern</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check text-color="text-orange-500" />
                                        <span class="text-black">Proses pengerjaan transparan dan bertahap</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check text-color="text-orange-500" />
                                        <span class="text-black">Mendapatkan buku panduan berbentuk PDF</span>
                                    </div>
                                    <!-- check - end -->

                                    <!-- check - start -->
                                    <div class="flex items-center gap-2">
                                        <x-icons.check text-color="text-orange-500" />
                                        <span class="text-black">Garansi 1 tahun di mulai dari hari pertama Online</span>
                                    </div>
                                    <!-- check - end -->
                                </div>
                            </div>

                            <div class="mt-auto">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=6282230925988&text=Hai!%20Saya%20ingin%20memesan%20situs%20web.%20Deskripsinya%20adalah" class="flex flex-row space-x-3 items-center justify-center rounded-lg bg-orange-600 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-orange-800 focus-visible:ring active:bg-gray-600 md:text-base">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span>Hubungi Kami</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- plan - end -->
                </div>
            </div>
        </div>
    </section>

    <section id="paket-hosting" class="mx-auto mb-10 px-4 scroll-mt-24 mt-8 border border-t-slate-300">
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-xl px-4 md:px-8 flex flex-col space-y-3">
                <h2 class="text-center text-2xl font-bold text-gray-800 lg:text-3xl">Durasi Hosting Yang Bisa Dipilih!</h2>
                <small class="bg-green-100 text-green-800 text-base font-medium text-center py-0.5 rounded dark:bg-green-900 dark:text-green-300">Semua Harga Sudah Termasuk Pajak!</small>

                <div class="flex flex-col-reverse md:flex-row space-y-8 md:space-y-0 md:space-x-3 justify-center">
                    <!-- plan - start -->
                    <div class="w-full md:w-1/2 flex flex-col overflow-hidden rounded-lg border bg-blue-100 hover:bg-blue-200 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 duration-300">
                        <div class="h-2 bg-blue-500"></div>

                        <div class="flex flex-1 flex-col p-6 pt-8">
                            <div class="mb-4 flex flex-col space-y-3">
                                <h3 class="mb-2 text-center text-2xl font-bold text-gray-800">1 Bulan</h3>

                                <p class="text-4xl font-bold text-black text-center">Rp. 122.000 / bulan</p>

                                <p class="text-center">Paket diperpanjang seharga Rp. 143.000 pada {{ now()->addMonth(1)->translatedFormat('d F Y') }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- plan - end -->

                    <!-- plan - start -->
                    <div class="w-full md:w-1/2 flex flex-col overflow-hidden rounded-lg border bg-emerald-100 hover:bg-emerald-200 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 duration-300">
                        <div class="h-2 bg-emerald-500"></div>

                        <div class="flex flex-1 flex-col p-6 pt-8">
                            <div class="mb-4 flex flex-col space-y-3">
                                <h3 class="mb-2 text-center text-2xl font-bold text-gray-800">12 Bulan (1 Tahun)</h3>

                                <p class="text-4xl font-bold text-black text-center">Rp. 44.000 / bulan</p>

                                <p class="text-center">Paket diperpanjang seharga Rp. 77.000 pada {{ now()->addMonth(12)->translatedFormat('d F Y') }}</p>

                                <p class="text-center mt-4">Harga Hosting selama 12 Bulan = <span class="font-bold">Rp. 924.000</span></p>

                                <p class="text-center"><span class="font-bold">Gratis Domain 1 Tahun!</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- plan - end -->

                    <!-- plan - start -->
                    <div class="w-full md:w-1/2 flex flex-col overflow-hidden rounded-lg border bg-purple-100 hover:bg-purple-200 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 duration-300">
                        <div class="h-2 bg-purple-500"></div>

                        <div class="flex flex-1 flex-col p-6 pt-8">
                            <div class="mb-4 flex flex-col space-y-3">
                                <h3 class="mb-2 text-center text-2xl font-bold text-gray-800">24 Bulan (2 Tahun)</h3>

                                <p class="text-4xl font-bold text-black text-center">Rp. 33.000 / bulan</p>

                                <p class="text-center">Paket diperpanjang seharga Rp. 66.000 pada {{ now()->addMonth(24)->translatedFormat('d F Y') }}</p>

                                <p class="text-center mt-4">Harga Hosting selama 24 Bulan = <span class="font-bold">Rp. 792.000</span></p>

                                <p class="text-center"><span class="font-bold">Gratis Domain 1 Tahun!</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- plan - end -->

                    <!-- plan - start -->
                    <div class="w-full md:w-1/2 flex flex-col overflow-hidden rounded-lg border bg-slate-100 hover:bg-slate-200 transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 duration-300">
                        <div class="h-2 bg-slate-500"></div>

                        <div class="flex flex-1 flex-col p-6 pt-8">
                            <div class="mb-4 flex flex-col space-y-3">
                                <h3 class="mb-2 text-center text-2xl font-bold text-gray-800">48 Bulan (4 Tahun)</h3>

                                <p class="text-4xl font-bold text-black text-center">Rp. 26.400 / bulan</p>

                                <p class="text-center">Paket diperpanjang seharga Rp. 55.000 pada {{ now()->addMonth(48)->translatedFormat('d F Y') }}</p>

                                <p class="text-center mt-4">Harga Hosting selama 48 Bulan = <span class="font-bold">Rp. 1.267.200</span></p>

                                <p class="text-center"><span class="font-bold">Gratis Domain 1 Tahun!</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- plan - end -->
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto scroll-mt-24 mt-8 drop-shadow-lg bg-emerald-500 text-white">
        <div class="flex flex-col space-y-3 pb-5">
            <h2 class="mt-4 mb-2 text-center text-2xl font-bold md:mb-8 lg:text-3xl xl:mb-12">Masih Belum Yakin?</h2>
            <p class="text-center">Berikut situs web yang pernah kami buat!</p>
            <div class="flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-3">
                <div class="flex flex-col space-y-3">
                    <img src="{{ asset('img/portofolio/kerja-sama-unram.webp') }}" alt="" loading="lazy">
                    <p class="text-center"><a href="https://kerjasama.unram.ac.id" target="_blank" class="hover:text-gray-200 hover:underline hover:cursor-pointer">Situs Web Kerja Sama Universitas Mataram</a></p>
                </div>

                <div class="flex flex-col space-y-3">
                    <img src="{{ asset('img/portofolio/si-tanak-ntb.webp') }}" alt="" loading="lazy">
                    <p class="text-center"><a href="https://lalinternak.disnakkeswan.ntbprov.go.id" target="_blank" class="hover:text-gray-200 hover:underline hover:cursor-pointer">Situs Web Lalu Lintas Ternak Provinsi NTB</a></p>
                </div>

                <div class="flex flex-col space-y-3">
                    <img src="{{ asset('img/portofolio/windowsku.webp') }}" alt="" loading="lazy">
                    <p class="text-center"><a href="https://windowsku.com" target="_blank" class="hover:text-gray-200 hover:underline hover:cursor-pointer">Blog Pribadi Windowsku.com</a></p>
                </div>
            </div>

            <div class="flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-3">
                <div class="flex flex-col space-y-3">
                    <img src="{{ asset('img/portofolio/importer-feeder.webp') }}" alt="" loading="lazy">
                    <p class="text-center"><a href="https://importer-feeder.unram.ac.id" target="_blank" class="hover:text-gray-200 hover:underline hover:cursor-pointer">Situs Web Importer Feeder Universitas Mataram</a></p>
                </div>

                <div class="flex flex-col space-y-3">
                    <img src="{{ asset('img/portofolio/entebeplan-ntb.webp') }}" alt="" loading="lazy">
                    <p class="text-center"><a href="https://e-planning.ntbprov.go.id" target="_blank" class="hover:text-gray-200 hover:underline hover:cursor-pointer">Situs Web Perencanaan APBD Provinsi NTB</a></p>
                </div>

                <div class="flex flex-col space-y-3">
                    <img src="{{ asset('img/portofolio/e-kinerja-ntb.webp') }}" alt="" loading="lazy">
                    <p class="text-center"><a href="https://e-kinerja.ntbprov.go.id" target="_blank" class="hover:text-gray-200 hover:underline hover:cursor-pointer">Situs Web Penilaian Kinerja Pegawai Provinsi NTB</a></p>
                </div>
            </div>
        </div>
    </section>

    @env('local')
    <section class="relative py-16 bg-white min-w-screen animation-fade animation-delay">
        <div class="container px-8 mx-auto sm:px-12 xl:px-5">
            <p class="text-xs font-bold text-left text-pink-500 uppercase sm:mx-6 sm:text-center sm:text-normal sm:font-bold" data-primary="pink-500">
                Got a Question? We’ve got answers.
            </p>
            <h3 class="mt-1 text-2xl font-bold text-left text-gray-800 sm:mx-6 sm:text-3xl md:text-4xl lg:text-5xl sm:text-center">
                Frequently Asked Questions
            </h3>
            <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl" data-primary="purple-500">How does it work?</h3>
                <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                    Our platform works with your content to provides insights and metrics on how you can grow your business and scale your infastructure.
                </p>
            </div>
            <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl" data-primary="purple-500">Do you offer team pricing?</h3>
                <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                    Yes, we do! Team pricing is available for any plan. You can take advantage of 30% off for signing up for team pricing of 10 users or more.
                </p>
            </div>
            <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl" data-primary="purple-500">How do I make changes and configure my site?</h3>
                <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                    You can easily change your site settings inside of your site dashboard by clicking the top right menu and clicking the settings button.
                </p>
            </div>
            <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl" data-primary="purple-500">How do I add a custom domain?</h3>
                <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                    You can easily change your site settings inside of your site dashboard by clicking the top right menu and clicking the settings button.
                </p>
            </div>
        </div>
    </section>
    @endenv
@endsection
