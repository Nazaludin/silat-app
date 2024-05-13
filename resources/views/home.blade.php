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
<header class="font-primary flex justify-center w-full bg-white py-5 px-10  fixed top-0 transition-all duration-200">
  <div class="container flex justify-between items-center">
    <div class="z-[999]">LOGO</div>
    <div>
      <nav id="nav-menu" class="navigation md:flex md:static md:bg-transparent md:shadow-none shadow-lg bg-white fixed w-full left-0 top-0 -translate-y-[30rem] md:translate-y-0 md:pt-0 pt-[5rem] md:pb-0 pb-[2rem] rounded-b-2xl transition-all duration-500">
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
  <section id="beranda" class="mt-[10rem] reveal">
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
          <a href="" class="btn-main"> Lihat Perguruan </a>
        </div>
        <div class="flex-col">
          <img src="{{ asset('img/hero.svg')}}" alt="" />
        </div>
      </div>
    </div>
  </section>
  <section class="reveal">
    <div class="flex flex-col justify-center items-center">
      <h1 class="text-3xl mb-3 font-bold text-center text-main">
        Cari Perguruan Silat
      </h1>

      <div class="w-[70%]">
        <!-- Form -->
        <div class="mb-1">
          <label for="tempat" class="font-bold">Tempat (Provinsi)</label>
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
          <label for="namalsp" class="font-bold">Nama Perguruan Silat</label>
        </div>
        <div class="relative mb-4" data-hs-combo-box="">
          <div class="relative">
            <input placeholder="Pilih Nama Perguruan Silat..." id="namalsp" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="" data-hs-combo-box-input="" />
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

  <section id="perguruan" class="reveal">
    <div id="container_perguruan" class="flex flex-wrap gap-2 justify-center mb-4">
      <!-- 
 <a href="" class="flex flex-col w-[3rem] text-justify p-4 gap-1 rounded-xl hover:shadow-flat hover:scale-95 transition-all duration-20">
          <div class="flex justify-center items-center gambar">
            <img class="w-[10]" src="{{ url('/view-image/1715422129_1281265.jpg') }}/" alt="" />
          </div>
          <div class="text w-full text-wrap">
            <h1 class="font-bold text-xl">BNPS</h1>
            <p>
             Deskripsi
            </p>
          </div>
        </a> -->


    </div>
    <div id="pagination_perguruan" class="flex gap-3 justify-center ">
      <!-- <div class="w-fit cursor-pointer px-8 py-3 rounded-lg font-extrabold text-white bg-main border-2 border-main transition duration-200 ease-in-out ">
          1
        </div>
        <div class="w-fit cursor-pointer px-8 py-3 rounded-lg font-extrabold   border-2 border-main hover:text-main hover:bg-transparent transition duration-200 ease-in-out ">
          2
        </div>
        <div class="w-fit cursor-pointer px-8 py-3 rounded-lg font-extrabold   border-2 hover:text-main hover:bg-transparent transition duration-200 ease-in-out ">
          >
        </div> -->
    </div>



  </section>

  <section class="reveal">
    <h1 class="text-3xl mb-3 font-bold text-center text-main">
      Berita
    </h1>
    <div class="divider">
      Terbaru
    </div>

    <div id="container_berita" class="flex gap-5 flex-wrap justify-center">

      <!-- Berita Card -->
      <!-- <a class="flex flex-col w-[20rem] group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out " href="#">
        <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden">
          <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
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
      </a> -->
      <!-- Berita Card -->

    </div>
    <!-- selengkapnya -->
    <div class="flex justify-end my-5">
      <a href="" class="flex group hover:translate-x-2 transition-all duration-200 ease-in-out">
        Selengkapnya
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-4 transition-all duration-200 ease-in-out">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M7 7l5 5l-5 5" />
          <path d="M13 7l5 5l-5 5" />
        </svg> </a>
    </div>
    <!-- selengkapnya -->
  </section>
  </div>


  <script type="module">
    $(document).ready(function() {
      $.get('/api/perguruan', function(data) {
        console.log(data);
        createCardBPerguruan(data);
        paginate(data);
      });

      $.get('/api/berita', function(data) {
        console.log(data);
        createCardBerita(data);
      });

      function paginate(data) {
        var index = 1;
        do {
          var pageDiv = $('<div>', {
            class: 'w-fit cursor-pointer px-8 py-3 rounded-lg font-extrabold text-white bg-main border-2 border-main transition duration-200 ease-in-out',
            text: index
          });
          index++;
          // Menambahkan elemen div pagination ke dalam DOM
          $('#pagination_perguruan').append(pageDiv);

          if (index == 5) {
            var pageDiv = $('<div>', {
              class: 'w-fit cursor-pointer px-8 py-3 rounded-lg font-extrabold text-white bg-main border-2 border-main transition duration-200 ease-in-out',
              text: '>'
            });
            // Menambahkan elemen div pagination ke dalam DOM
            $('#pagination_perguruan').append(pageDiv);
            break;
          }
        } while (index < data.last_page);
      }

      function createCardBPerguruan(data) {
        const container = $('#container_perguruan');
        $.each(data.data, function(index, item) {
          // Bangun elemen DOM untuk setiap item
          console.log(item);
          var anchor = $('<a>', {
            // href: "{{ url('storage/public/1715132993_filled_profil.png')}}",
            href: "{{ route('perguruan.fullview','') }}/" + item.id_perguruan,
            class: 'flex flex-col w-[20rem] text-justify p-4 gap-1 rounded-xl items-center hover:shadow-flat hover:scale-95 transition-all duration-20'
          });

          var img = $('<img>', {
            src: "{{ url('/view-image/') }}/" + item.nama_file_logo,
            alt: ''
          }).addClass('overflow-hidden object-cover object-center h-[10rem] rounded-xl');

          var imgDiv = $('<div>', {
            class: 'flex justify-center items-center gambar'
          });
          var textDiv = $('<div>', {
            class: 'text w-full text-wrap text-center'
          });

          var title = $('<h1>', {
            class: 'font-bold text-xl'
          }).text(item.nama);

          var paragraph = $('<p>').text(item.deskripsi);

          // Gabungkan elemen-elemen DOM ke dalam hierarki DOM yang benar
          textDiv.append(title, paragraph);
          imgDiv.append(img);
          anchor.append(imgDiv, textDiv);

          // Tambahkan elemen anchor ke dalam kontainer
          container.append(anchor);

        });
      }

      function createCardBerita(data) {
        const container = $('#container_berita');
        container.html('');
        $.each(data.data, function(index, item) {
          // Membuat elemen berita
          var beritaCard = $('<a>', {
            'class': 'flex flex-col w-[20rem] group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out',
            'href': '#'
          });

          var imageContainer = $('<div>', {
            'class': 'relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden'
          }).appendTo(beritaCard);

          $('<img>', {
            'class': 'size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl',
            'src': "{{ url('/view-image/') }}/" + item.nama_file,
            'alt': 'Image Description'
          }).appendTo(imageContainer);

          var contentContainer = $('<div>', {
            'class': 'p-4 md:p-5'
          }).appendTo(beritaCard);

          $('<h3>', {
            'class': 'text-lg font-bold text-gray-800',
            'text': item.judul
          }).appendTo(contentContainer);

          $('<div>', {
            'class': 'font-bold text-xs uppercase text-slate-400',
            'text': item.tanggal
          }).appendTo(contentContainer);

          $('<p>', {
            'class': 'mt-1 text-gray-500 line-clamp-3',
            'text': 'Some quick example text to build on the card title and make up the bulk of the card\'s content. Some quick example text to build on the card title and make up the bulk of the card\'s content.'
          }).appendTo(contentContainer);

          // Menambahkan elemen berita ke dalam container
          container.append(beritaCard);
        });
      }

    });
  </script>
  <!-- Javascript -->
  <script>
    ScrollReveal().reveal('.reveal', {
        // reset: true,
        duration: 2000,
        distance: '100px'
      },

    );
  </script>
  <script src="resources\js\app.js"></script>
  <script src="../node_modules/preline/dist/preline.js"></script>
  <!-- <script src="../node_modules/jquery/dist/jquery.js"></script> -->
</body>

@include('layouts.footer')

</html>