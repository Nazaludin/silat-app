<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <title>Home</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <script src="https://unpkg.com/scrollreveal"></script>

</head>
<!-- header -->
<header class="font-primary flex justify-center w-full bg-white py-5 px-10  fixed top-0 transition-all duration-200 z-[99999]">
  <div class="container flex justify-between items-center">
    <div class="z-[999]">LOGO</div>
    <div>
      <nav id="nav-menu" class="navigation md:flex md:static md:bg-transparent md:shadow-none shadow-lg bg-white fixed w-full left-0 top-0 -translate-y-[30rem] md:translate-y-0 md:pt-0 pt-[5rem] z-[99] md:pb-0 pb-[2rem] rounded-b-2xl transition-all duration-500">
        <ul class="flex nav-hover md:flex-row flex-col justify-center items-center w-full">
          <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3  text-center">
            <a href="#">Beranda</a>
          </li>
          <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3 text-center ">
            <a href="#profilView" class=" cursor-pointer">Profil</a>
          </li>
          <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3 text-center ">
            <a href="#tokohView" class=" cursor-pointer">Tokoh</a>
          </li>
          <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3 text-center ">
            <a href="#sejarahView" class=" cursor-pointer">Sejarah</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="flex items-center">
      <a href="{{ __('login') }}" class="btn-main"> Login </a>
      <button id="hamburger" class="md:hidden z-[999]">
        <span class="hamburger-line transition-all duration-500 ease-in-out"></span>
        <span class="hamburger-line transition-all duration-500 ease-in-out"></span>
        <span class="hamburger-line transition-all duration-500 ease-in-out"></span>
      </button>
    </div>
  </div>
</header>

<!-- header -->

<body style="margin: 0;" class="font-primary">

  <!-- Slider -->
  <div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "isAutoPlay": true
  }' class="relative">
    <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
      <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
        <div class="hs-carousel-slide">
          <div class="flex justify-center h-full bg-gray-100 p-6">
            <span class="self-center text-4xl text-gray-800 transition duration-700">First slide</span>
          </div>
        </div>
        <div class="hs-carousel-slide">
          <div class="flex justify-center h-full bg-gray-200 p-6">
            <span class="self-center text-4xl text-gray-800 transition duration-700">Second slide</span>
          </div>
        </div>
        <div class="hs-carousel-slide">
          <div class="flex justify-center h-full bg-gray-300 p-6">
            <span class="self-center text-4xl text-gray-800 transition duration-700">Third slide</span>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-s-lg">
      <span class="text-2xl" aria-hidden="true">
        <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m15 18-6-6 6-6"></path>
        </svg>
      </span>
      <span class="sr-only">Previous</span>
    </button>
    <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-e-lg">
      <span class="sr-only">Next</span>
      <span class="text-2xl" aria-hidden="true">
        <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6"></path>
        </svg>
      </span>
    </button>

    <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
      <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
      <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
      <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
    </div>
  </div>
  <!-- End Slider -->

  <section id="beritaView" class="lg:block flex flex-col-reverse mt-[5rem]">
    <aside class="lg:sticky top-[8rem] flex flex-col  lg:w-fit float-right h-[40rem]  ">
      <h1 class="text-3xl mb-3 text-center lg:text-left font-bold text-main">
        Berita Lainnya
      </h1>
      <div class="divider">
        Terbaru
      </div>
      <div class="webkit-box-mobile lg:block overflow-x-scroll lg:overflow-y-scroll lg:overflow-x-hidden lg:h-[50rem]">

        <a class=" m-4 flex flex-col w-[20rem] group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out" href="#">
          <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden"><img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="http://127.0.0.1:8000/view-image/1715768212_mengalir.png" alt="Image Description"></div>
          <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800">Judul Dummy</h3>
            <div class="font-bold text-xs uppercase text-slate-400">15/05/2024 17:16 WIB</div>
            <div class="mt-1 text-gray-500 line-clamp-3">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</div>
          </div>
        </a>
        <a class=" m-4 flex flex-col w-[20rem] group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out" href="#">
          <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden"><img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="http://127.0.0.1:8000/view-image/1715768212_mengalir.png" alt="Image Description"></div>
          <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800">Judul Dummy</h3>
            <div class="font-bold text-xs uppercase text-slate-400">15/05/2024 17:16 WIB</div>
            <div class="mt-1 text-gray-500 line-clamp-3">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</div>
          </div>
        </a>
        <a class=" m-4 flex flex-col w-[20rem] group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out" href="#">
          <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden"><img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="http://127.0.0.1:8000/view-image/1715768212_mengalir.png" alt="Image Description"></div>
          <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800">Judul Dummy</h3>
            <div class="font-bold text-xs uppercase text-slate-400">15/05/2024 17:16 WIB</div>
            <div class="mt-1 text-gray-500 line-clamp-3">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</div>
          </div>
        </a>
        <a class=" m-4 flex flex-col w-[20rem] group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out" href="#">
          <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden"><img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="http://127.0.0.1:8000/view-image/1715768212_mengalir.png" alt="Image Description"></div>
          <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800">Judul Dummy</h3>
            <div class="font-bold text-xs uppercase text-slate-400">15/05/2024 17:16 WIB</div>
            <div class="mt-1 text-gray-500 line-clamp-3">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</div>
          </div>
        </a>
        <a class=" m-4 flex flex-col w-[20rem] group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out" href="#">
          <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden"><img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="http://127.0.0.1:8000/view-image/1715768212_mengalir.png" alt="Image Description"></div>
          <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800">Judul Dummy</h3>
            <div class="font-bold text-xs uppercase text-slate-400">15/05/2024 17:16 WIB</div>
            <div class="mt-1 text-gray-500 line-clamp-3">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</div>
          </div>
        </a>
        <a class=" m-4 flex flex-col w-[20rem] group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out" href="#">
          <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden"><img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="http://127.0.0.1:8000/view-image/1715768212_mengalir.png" alt="Image Description"></div>
          <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800">Judul Dummy</h3>
            <div class="font-bold text-xs uppercase text-slate-400">15/05/2024 17:16 WIB</div>
            <div class="mt-1 text-gray-500 line-clamp-3">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</div>
          </div>
        </a>

      </div>
      <!-- selengkapnya -->
      <div class="flex justify-end my-5">
        <a href="#" class="flex group hover:translate-x-2 transition-all duration-200 ease-in-out">
          Selengkapnya
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-4 transition-all duration-200 ease-in-out">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M7 7l5 5l-5 5" />
            <path d="M13 7l5 5l-5 5" />
          </svg> </a>
      </div>
      <!-- selengkapnya -->
    </aside>
    <div class="flex flex-col lg:mr-[25rem]">
      <h1 class="text-3xl mb-3 text-center lg:text-left font-bold text-main">
        {{$berita->judul}}
      </h1>
      <div class="font-bold text-center lg:text-left text-xs uppercase text-slate-400">
        {{$berita->penulis}} - Berita
      </div>
      <div class="font-bold text-center lg:text-left text-xs uppercase text-slate-400">
        {{$berita->tanggal}}
      </div>
      <div class="divider">
        berita
      </div>
      <div class="flex justify-center items-center size-full lg:size-[60%] m-auto">
        <img class="rounded-xl" src="{{ url('/view-image/').'/'. $berita->nama_file}}">
      </div>

      <div class="text-justify my-5">
        {!!$berita->berita!!}
      </div>
    </div>
  </section>





  @include('layouts.footer')


  <!-- Javascript -->
  <script>
    ScrollReveal().reveal('.reveal', {
        reset: true,
        duration: 2000,
        distance: '100px'
      },

    );
  </script>
  <script src="resources\js\app.js"></script>
  <script src="../node_modules/preline/dist/preline.js"></script>
  <script src="../node_modules/scrollreveal/dist/scrollreveal.js"></script>
  <!-- <script src="../node_modules/jquery/dist/jquery.js"></script> -->
</body>

</html>