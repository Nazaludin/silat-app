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
<header class="font-primary flex justify-center w-full bg-white py-5 px-10 rounded-[1px] fixed top-0 transition-all duration-200 ease-in-out z-50">
  <div class="container flex justify-between items-center">
    <div class="z-[999]">LOGO</div>
    <div>
      <nav id="nav-menu" class="navigation md:flex md:static md:bg-transparent md:shadow-none shadow-lg bg-white fixed w-full left-0 top-0 -translate-y-[30rem] md:translate-y-0 md:pt-0 pt-[5rem] md:pb-0 pb-[2rem] rounded-b-2xl transition-all duration-500">
        <ul class="flex nav-hover md:flex-row flex-col justify-center items-center w-full">
          <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3  text-center">
            <a href="#beranda" class="active drop-shadow-shiny">Beranda</a>
          </li>
          <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3 text-center">
            <a href="#perguruan">Perguruan</a>
          </li>
          <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3 text-center">
            <a href="#berita">Berita</a>
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



  <section id="beranda" class=" reveal my-20">
    <div class="w-100 flex justify-center ">
      <div class="container flex flex-col-reverse md:flex-row w-100 justify-center gap-10">
        <div class="flex flex-col w-full lg:w-[50%] text-justify justify-center lg:items-start items-center">
          <h1 class="text-3xl mb-3 font-bold text-main lg:text-left text-center">Selamat Datang!</h1>
          <p class="mb-3 text-main w-full">
            Kami bangga menjadi rumah bagi para pesilat dari berbagai penjuru nusantara, tempat di mana semangat, keahlian, dan tradisi pencak silat dipertahankan dan dikembangkan. Di sini, Anda akan menemukan informasi terbaru tentang kegiatan, pelatihan, dan kejuaraan pencak silat, serta berbagai artikel dan sumber daya untuk memperdalam pengetahuan Anda tentang seni bela diri warisan budaya Indonesia ini.
          </p>
          <a href="#tentang" class="btn-main"> Lanjutkan </a>
        </div>
        <div class="lg:w-1/2 w-full">
          <!-- Slider -->
          <div data-hs-carousel='{
                "loadingClasses": "opacity-0"
              }' class="relative">
            <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-[20rem] outline outline-none outline-1 outline-offset-0 hover:outline-slate-500  hover:outline-offset-4 transition-all duration-200 ease-in-out">
              <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                <div class="hs-carousel-slide">
                  <div class="flex justify-center h-full bg-transparent">
                    <img class="w-full object-cover" src="https://uny.ac.id/sites/default/files/styles/large/public/2023-05/Nairobi.jpg?itok=IRoGjHjO" alt="">
                  </div>
                </div>
                <div class="hs-carousel-slide">
                  <div class="flex justify-center h-full bg-transparent">
                    <img class="w-full object-cover" src="https://www.uny.ac.id/sites/default/files/2022-06/WhatsApp%20Image%202022-06-05%20at%2010.55.26.jpeg" alt="">
                  </div>
                </div>
                <div class="hs-carousel-slide">
                  <div class="flex justify-center h-full bg-transparent">
                    <img class="w-full object-cover" src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/18/2023/05/19/269f0994-36e4-4003-90b1-51eab17bf61a-3745630281.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-white group rounded-e-lg cursor-pointer">
              <span class="text-2xl" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="size-8 group-hover:-translate-x-2 transition-all duration-200 ease-in-out ">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M13.883 5.007l.058 -.005h.118l.058 .005l.06 .009l.052 .01l.108 .032l.067 .027l.132 .07l.09 .065l.081 .073l.083 .094l.054 .077l.054 .096l.017 .036l.027 .067l.032 .108l.01 .053l.01 .06l.004 .057l.002 .059v12c0 .852 -.986 1.297 -1.623 .783l-.084 -.076l-6 -6a1 1 0 0 1 -.083 -1.32l.083 -.094l6 -6l.094 -.083l.077 -.054l.096 -.054l.036 -.017l.067 -.027l.108 -.032l.053 -.01l.06 -.01z" />
                </svg>
              </span>
              <span class="sr-only">Previous</span>
            </div>
            <div type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-white group rounded-e-lg cursor-pointer ">
              <span class="sr-only">Next</span>
              <span class="text-2xl" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="size-8 group-hover:translate-x-2 transition-all duration-200 ease-in-out">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M9 6c0 -.852 .986 -1.297 1.623 -.783l.084 .076l6 6a1 1 0 0 1 .083 1.32l-.083 .094l-6 6l-.094 .083l-.077 .054l-.096 .054l-.036 .017l-.067 .027l-.108 .032l-.053 .01l-.06 .01l-.057 .004l-.059 .002l-.059 -.002l-.058 -.005l-.06 -.009l-.052 -.01l-.108 -.032l-.067 -.027l-.132 -.07l-.09 -.065l-.081 -.073l-.083 -.094l-.054 -.077l-.054 -.096l-.017 -.036l-.027 -.067l-.032 -.108l-.01 -.053l-.01 -.06l-.004 -.057l-.002 -12.059z" />
                </svg>
              </span>
            </div>

            <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
              <span class="hs-carousel-active:bg-white hs-carousel-active:border-white size-3 border border-white rounded-full cursor-pointer"></span>
              <span class="hs-carousel-active:bg-white hs-carousel-active:border-white size-3 border border-white rounded-full cursor-pointer"></span>
              <span class="hs-carousel-active:bg-white hs-carousel-active:border-white size-3 border border-white rounded-full cursor-pointer"></span>
            </div>
          </div>
          <!-- End Slider -->
        </div>
      </div>
    </div>
  </section>
  <section id="tentang" class=" reveal">
    <div class="w-100 flex justify-center ">
      <div class="container flex flex-col-reverse md:flex-row-reverse justify-center">
        <div class="flex flex-col w-full lg:w-[50%] text-justify justify-center lg:items-start items-center">
          <h1 class="text-3xl mb-3 font-bold text-main lg:text-left text-center">Tentang Kami</h1>
          <p class="mb-3 text-main w-full">
          Perkumpulan ini didirikan dengan tujuan untuk menyatukan, mempromosikan, dan melestarikan warisan budaya pencak silat yang kaya dan beragam di Indonesia. Kami percaya bahwa pencak silat bukan hanya seni bela diri, tetapi juga sarana untuk membangun karakter, disiplin, dan persatuan di antara masyarakat.
          </p>
          <a href="#perguruan" class="btn-main">Lihat Perguruan </a>
        </div>
        <div class="flex-col">
          <img src="{{ asset('img/hero.svg')}}" alt="" />
        </div>
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

  <section id="berita" class="reveal">
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

    </div>
    <!-- selengkapnya -->
    <div class="flex justify-end my-5">
      <a href="{{route('berita')}}" class="flex group hover:translate-x-2 transition-all duration-200 ease-in-out">
        Selengkapnya
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-4 transition-all duration-200 ease-in-out">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M7 7l5 5l-5 5" />
          <path d="M13 7l5 5l-5 5" />
        </svg> </a>
    </div>
    <!-- selengkapnya -->
  </section>

  <!-- <section id="prestasi" class="reveal">
    <h1 class="text-3xl mb-3 font-bold text-center text-main">
      Prestasi
    </h1>
    <div class="divider">
      Terbaru
    </div>

    <div id="container_prestasi" class="flex gap-5 flex-wrap justify-center">

    </div> -->
  <!-- selengkapnya -->
  <!-- <div class="flex justify-end my-5">
      <a href="{{route('prestasi')}}" class="flex group hover:translate-x-2 transition-all duration-200 ease-in-out">
        Selengkapnya
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-4 transition-all duration-200 ease-in-out">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M7 7l5 5l-5 5" />
          <path d="M13 7l5 5l-5 5" />
        </svg> </a>
    </div> -->
  <!-- selengkapnya -->
  <!-- </section> -->
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
      // $.get('/api/prestasi', function(data) {
      //   console.log(data);
      //   createCardPrestasi(data);
      // });

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
            'href': "{{ route('berita.read','') }}/" + item.id_berita
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

      function createCardPrestasi(data) {
        const container = $('#container_prestasi');
        container.html('');
        $.each(data.data, function(index, item) {
          // Membuat elemen berita
          var prestasiCard = $('<a>', {
            'class': 'flex flex-col w-[20rem] group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out',
            'href': "{{ route('prestasi.read','') }}/" + item.id_prestasi
          });

          var imageContainer = $('<div>', {
            'class': 'relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden'
          }).appendTo(prestasiCard);

          $('<img>', {
            'class': 'size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl',
            'src': "{{ url('/view-image/') }}/" + item.nama_file,
            'alt': 'Image Description'
          }).appendTo(imageContainer);

          var contentContainer = $('<div>', {
            'class': 'p-4 md:p-5'
          }).appendTo(prestasiCard);

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
          container.append(prestasiCard);
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