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

  <section id="beritaView" class="mt-[5rem]">

    <div class="flex flex-col">
      <h1 class="text-3xl mb-3 font-bold text-main">
        {{$berita->judul}}
      </h1>
      <div class="font-bold text-xs uppercase text-slate-400">
        Author : {{$berita->penulis}}
      </div>
      <div class="font-bold text-xs uppercase text-slate-400">
        {{$berita->tanggal}}
      </div>
      <div class="divider">
        berita
      </div>
      <div class="pl-[5rem] pr-[5rem]">
        <img class="rounded-xl" src="{{ url('/view-image/').'/'. $berita->nama_file}}">
      </div>

      <p class="text-justify">
        {!!$berita->berita!!}
      </p>


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