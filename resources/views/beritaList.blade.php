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

  <section id="profilView" class="mt-[5rem]">

    <div class="flex flex-col lg:flex-row w-full">
      <div class="static lg:fixed flex flex-col w-full lg:w-[25rem] text-justify z-[2] mt-6">
        <div class="p-5 shadow-lg rounded-2xl w-full flex flex-col justify-center bg-transparent backdrop-blur-3xl mb-3">
          <h1 class="text-3xl mb-3 font-bold text-main">
            Berita
          </h1>
          <div>
            <label for="hs-trailing-button-add-on-with-icon-and-button" class="sr-only">Label</label>
            <div class="relative flex rounded-lg shadow-sm my-2 mx-2">
              <input placeholder="Cari Berita..." type="text" id="search" name="hs-trailing-button-add-on-with-icon-and-button" class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
              <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                <svg class="flex-shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8"></circle>
                  <path d="m21 21-4.3-4.3"></path>
                </svg>
              </div>
              <button id="btn_search" type="button" class="w-fit cursor-pointer px-5 py-3 rounded-lg font-extrabold text-white bg-main border-2 border-main hover:text-main hover:bg-transparent transition duration-200 ease-in-out  rounded-l-none mx-0">Cari</button>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-col w-full lg:ml-[25rem] p-5 text-justify gap-5">
        <!-- Berita Card -->
        <a class="flex flex-col w-full group bg-white  border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out " href="#">
          <div class="relative pt-[50%] rounded-t-xl overflow-hidden">
            <img class="size-full absolute top-0 start-0 object-cover object-center group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
          </div>
          <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800">
              Judul Berita
            </h3>
            <div class="font-bold text-xs uppercase text-slate-400">
              10/10/2022
            </div>
            <p class="mt-1 text-gray-500 line-clamp-3">
              Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
            </p>
          </div>
        </a>
        <!-- Berita Card -->
        <!-- Berita Card -->
        <a class="flex flex-col w-full group bg-white  border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out " href="#">
          <div class="relative pt-[50%] rounded-t-xl overflow-hidden">
            <img class="size-full absolute top-0 start-0 object-cover object-center group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
          </div>
          <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800">
              Judul Berita
            </h3>
            <div class="font-bold text-xs uppercase text-slate-400">
              10/10/2022
            </div>
            <p class="mt-1 text-gray-500 line-clamp-3">
              Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
            </p>
          </div>
        </a>
        <!-- Berita Card -->
        <!-- Berita Card -->
        <a class="flex flex-col w-full group bg-white  border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out " href="#">
          <div class="relative pt-[50%] rounded-t-xl overflow-hidden">
            <img class="size-full absolute top-0 start-0 object-cover object-center group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
          </div>
          <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800">
              Judul Berita
            </h3>
            <div class="font-bold text-xs uppercase text-slate-400">
              10/10/2022
            </div>
            <p class="mt-1 text-gray-500 line-clamp-3">
              Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
            </p>
          </div>
        </a>
        <!-- Berita Card -->
        
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