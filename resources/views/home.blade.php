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

  <!-- Styles -->

</head>
<!-- header -->
<header class="font-primary flex justify-center w-full bg-white py-5 px-10  fixed top-0 transition-all duration-200">
  <div class="container flex justify-between items-center">
    <div class="z-[999]">LOGO</div>
      <div>
        <nav id="nav-menu" class="navigation md:flex md:static md:bg-transparent md:shadow-none shadow-lg bg-white fixed w-full left-0 top-0 -translate-y-64 md:translate-y-0 md:pt-0 pt-[5rem] md:pb-0 pb-[2rem] rounded-b-2xl transition-all duration-500">
          <ul class="flex nav-hover md:flex-row flex-col justify-center items-center w-full">
            <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3  text-center">
              <a href="#beranda" class="active">Beranda</a>
            </li>
            <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3 text-center">
              <a href="#perguruan">Perguruan</a>
            </li>
          

          </ul>
        </nav>
      </div>
      <div class="flex items-center">
        <a href="{{ __('login') }}" class="btn"> Login </a>
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
    <section id="beranda">
      <div class="w-100 flex justify-center ">
        <div class="container flex flex-col-reverse md:flex-row w-100 justify-center">
          <div class="flex flex-col w-full lg:w-[50%] text-justify justify-center lg:items-start items-center">
            <h1 class="text-3xl mb-3 font-bold text-main lg:text-left text-center">Selamat Datang!</h1>
            <p class="mb-3 text-main w-full">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Consectetur fugit similique quis accusantium dolorum mollitia
              quod, laboriosam voluptatum eligendi asperiores vero est vel
              adipisci deleniti laudantium ipsum amet? Eaque, est!
            </p>
            <a href="" class="btn"> Lihat Perguruan </a>
          </div>
          <div class="flex-col">
            <img src="{{ asset('img/hero.svg')}}" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section >
      <div class="flex flex-col justify-center items-center">
        <h1 class="text-3xl mb-3 font-bold text-center text-main">
          Lembaga Sertifikasi Profesi
        </h1>

        <div class="w-[70%]">
          <!-- Form -->
          <div class="mb-1">
            <label for="tempat" class="font-bold">Tempat</label>
          </div>
          <div class="relative mb-4" data-hs-combo-box="">
            <div class="relative">
              <input placeholder="Pilih Tempat..." id="tempat" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="" data-hs-combo-box-input="" />
              <div class="absolute top-1/2 end-3 -translate-y-1/2" data-hs-combo-box-toggle="">
                <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m7 15 5 5 5-5"></path>
                  <path d="m7 9 5-5 5 5"></path>
                </svg>
              </div>
            </div>
            <div class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500" style="display: none" data-hs-combo-box-output="">
              <!-- select -->
              <div class="cursor-pointer py-2 px-4 w-full text-sm text-main hover:text-white hover:bg-main rounded-lg focus:outline-none focus:opacity-75" tabindex="0" data-hs-combo-box-output-item>
                <div class="flex justify-between items-center w-full">
                  <span data-hs-combo-box-search-text="Argentina" data-hs-combo-box-value="Argentina">Argentina</span>
                  <span class="hidden hs-combo-box-selected:block">
                    <svg class="flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 6 9 17l-5-5"></path>
                    </svg>
                  </span>
                </div>
              </div>
              <!-- select -->
              <!-- select -->
              <div class="cursor-pointer py-2 px-4 w-full text-sm text-main hover:text-white hover:bg-main rounded-lg focus:outline-none focus:opacity-75" tabindex="0" data-hs-combo-box-output-item>
                <div class="flex justify-between items-center w-full">
                  <span data-hs-combo-box-search-text="Argentina1" data-hs-combo-box-value="Argentina1">Argentina1</span>
                  <span class="hidden hs-combo-box-selected:block">
                    <svg class="flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 6 9 17l-5-5"></path>
                    </svg>
                  </span>
                </div>
              </div>
              <!-- select -->
              <!-- select -->
              <div class="cursor-pointer py-2 px-4 w-full text-sm text-main hover:text-white hover:bg-main rounded-lg focus:outline-none focus:opacity-75" tabindex="0" data-hs-combo-box-output-item>
                <div class="flex justify-between items-center w-full">
                  <span data-hs-combo-box-search-text="Indonesia" data-hs-combo-box-value="Indonesia">Indonesia</span>
                  <span class="hidden hs-combo-box-selected:block">
                    <svg class="flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 6 9 17l-5-5"></path>
                    </svg>
                  </span>
                </div>
              </div>
              <!-- select -->
            </div>
          </div>
          <!-- Form End -->

          <!-- Form -->
          <div class="mb-1">
            <label for="jenis" class="font-bold">Jenis</label>
          </div>
          <div class="relative mb-4" data-hs-combo-box="">
            <div class="relative">
              <input placeholder="Pilih Jenis..." id="jenis" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="" data-hs-combo-box-input="" />
              <div class="absolute top-1/2 end-3 -translate-y-1/2" data-hs-combo-box-toggle="">
                <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m7 15 5 5 5-5"></path>
                  <path d="m7 9 5-5 5 5"></path>
                </svg>
              </div>
            </div>
            <div class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500" style="display: none" data-hs-combo-box-output="">
              <!-- select -->
              <div class="cursor-pointer py-2 px-4 w-full text-sm text-main hover:text-white hover:bg-main rounded-lg focus:outline-none focus:opacity-75" tabindex="0" data-hs-combo-box-output-item="">
                <div class="flex justify-between items-center w-full">
                  <span data-hs-combo-box-search-text="Argentina" data-hs-combo-box-value="">Argentina</span>
                  <span class="hidden hs-combo-box-selected:block">
                    <svg class="flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 6 9 17l-5-5"></path>
                    </svg>
                  </span>
                </div>
              </div>
              <!-- select -->
            </div>
          </div>
          <!-- Form End -->
          <!-- Form -->
          <div class="mb-1">
            <label for="namalsp" class="font-bold">Nama LSP</label>
          </div>
          <div class="relative mb-4" data-hs-combo-box="">
            <div class="relative">
              <input placeholder="Pilih Nama LSP..." id="namalsp" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="" data-hs-combo-box-input="" />
              <div class="absolute top-1/2 end-3 -translate-y-1/2" data-hs-combo-box-toggle="">
                <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m7 15 5 5 5-5"></path>
                  <path d="m7 9 5-5 5 5"></path>
                </svg>
              </div>
            </div>
            <div class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500" style="display: none" data-hs-combo-box-output="">
              <!-- select -->
              <div class="cursor-pointer py-2 px-4 w-full text-sm text-main hover:text-white hover:bg-main rounded-lg focus:outline-none focus:opacity-75" tabindex="0" data-hs-combo-box-output-item="">
                <div class="flex justify-between items-center w-full">
                  <span data-hs-combo-box-search-text="Argentina" data-hs-combo-box-value="">Argentina</span>
                  <span class="hidden hs-combo-box-selected:block">
                    <svg class="flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 6 9 17l-5-5"></path>
                    </svg>
                  </span>
                </div>
              </div>
              <!-- select -->
            </div>
          </div>
          <!-- Form End -->
          <button class="btn-full">Cari</button>
        </div>
      </div>
    </section>

    <section id="perguruan">
      <div class="flex flex-wrap justify-center mb-4">

        <a href="" class="group flex flex-col w-[20rem] text-justify m-4 p-4 gap-1 rounded-xl shadow-md hover:shadow-2xl hover:scale-95 transition-all duration-20">
          <div class="flex justify-center items-center overflow-hidden">
            <img class="w-[10rem] group-hover:scale-110 transition-all duration-20" src="{{ asset('img/bnsp.png')}}" alt="" />
          </div>
          <div class="text w-full">
            <h1 class="font-bold text-xl">BNPS</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Molestiae, amet! asas
            </p>
          </div>
        </a>
        <a href="" class="group flex flex-col w-[20rem] text-justify m-4 p-4 gap-1 rounded-xl shadow-md hover:shadow-2xl hover:scale-95 transition-all duration-20">
          <div class="flex justify-center items-center overflow-hidden">
            <img class="w-[10rem] group-hover:scale-110 transition-all duration-20" src="{{ asset('img/bnsp.png')}}" alt="" />
          </div>
          <div class="text w-full">
            <h1 class="font-bold text-xl">BNPS</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Molestiae, amet! asas
            </p>
          </div>
        </a>
        <a href="" class="group flex flex-col w-[20rem] text-justify m-4 p-4 gap-1 rounded-xl shadow-md hover:shadow-2xl hover:scale-95 transition-all duration-20">
          <div class="flex justify-center items-center overflow-hidden">
            <img class="w-[10rem] group-hover:scale-110 transition-all duration-20" src="{{ asset('img/bnsp.png')}}" alt="" />
          </div>
          <div class="text w-full">
            <h1 class="font-bold text-xl">BNPS</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Molestiae, amet! asas
            </p>
          </div>
        </a>
        <a href="" class="group flex flex-col w-[20rem] text-justify m-4 p-4 gap-1 rounded-xl shadow-md hover:shadow-2xl hover:scale-95 transition-all duration-20">
          <div class="flex justify-center items-center overflow-hidden">
            <img class="w-[10rem] group-hover:scale-110 transition-all duration-20" src="{{ asset('img/bnsp.png')}}" alt="" />
          </div>
          <div class="text w-full">
            <h1 class="font-bold text-xl">BNPS</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Molestiae, amet! asas
            </p>
          </div>
        </a>
        <a href="" class="group flex flex-col w-[20rem] text-justify m-4 p-4 gap-1 rounded-xl shadow-md hover:shadow-2xl hover:scale-95 transition-all duration-20">
          <div class="flex justify-center items-center overflow-hidden">
            <img class="w-[10rem] group-hover:scale-110 transition-all duration-20" src="{{ asset('img/bnsp.png')}}" alt="" />
          </div>
          <div class="text w-full">
            <h1 class="font-bold text-xl">BNPS</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Molestiae, amet! asas
            </p>
          </div>
        </a>
        <a href="" class="group flex flex-col w-[20rem] text-justify m-4 p-4 gap-1 rounded-xl shadow-md hover:shadow-2xl hover:scale-95 transition-all duration-20">
          <div class="flex justify-center items-center overflow-hidden">
            <img class="w-[10rem] group-hover:scale-110 transition-all duration-20" src="{{ asset('img/bnsp.png')}}" alt="" />
          </div>
          <div class="text w-full">
            <h1 class="font-bold text-xl">BNPS</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Molestiae, amet! asas
            </p>
          </div>
        </a>
       

       

       

      </div>
      <div class="flex justify-center">

        <!-- Pagination -->
        <nav class="flex items-center -space-x-px">
          <button type="button" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m15 18-6-6 6-6"></path>
            </svg>
          </button>
          <button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-gray-200 text-gray-800 border border-gray-200 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none" aria-current="page">1</button>
          <button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">2</button>
          <button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">3</button>
          <button type="button" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </button>
        </nav>
        <!-- End Pagination -->
      </div>

    </section>
    </div>



  <!-- Javascript -->
  <script src="resources\js\app.js"></script>
  <script src="../node_modules/preline/dist/preline.js"></script>
</body>

</html>