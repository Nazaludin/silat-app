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
  <section id="profilView" class="mt-10">
    <div class="flex flex-col lg:flex-row w-full">
      <div class="static lg:fixed flex flex-col w-full lg:w-[15rem] text-justify z-[2]">
        <div class="p-5 shadow-lg rounded-2xl w-full flex justify-center bg-transparent backdrop-blur-3xl mb-3">
          <img class="lg:w-full w-[10rem]  object-contain" src="{{ url('/view-image/'.$perguruan->nama_file_logo) }}" alt="">
        </div>
        <div class="p-5 shadow-lg rounded-2xl w-full bg-transparent backdrop-blur-3xl">
          <div class="mb-3">
            <div class="form-label">
              Tahun Berdiri
            </div>
            <p>{{$perguruan->tahun_berdiri}}</p>
          </div>
          <div class="mb-3">
            <div class="form-label">
              Aliran
            </div>
            <p>{{$perguruan->aliran}}</p>
          </div>
          <div class="mb-3">
            <div class="form-label">
              Tempat
            </div>
            <p>{{$perguruan->nama_jalan . ' ' . $perguruan->desa. ', ' . $perguruan->kecamatan.', ' . $perguruan->kabupoaten.', ' . $perguruan->provinsi}}</p>
          </div>
        </div>
      </div>

      <div class="flex flex-col w-full lg:ml-[17rem] p-5 text-justify">
        <div class="my-5">
          <h1 class="font-bold text-3xl text-center lg:text-left">
            {{$perguruan->nama}}
          </h1>
        </div>
        <div class="mb-3">
          <div class="form-label">
            Arti Nama
          </div>
          <p>{{$perguruan->arti_nama}}</p>
        </div>
        <div class="mb-3">
          <div class="form-label">
            Motto
          </div>
          <p>
            {{$perguruan->motto}}
          </p>
        </div>
        <div class="mb-3">
          <div class="form-label">
            Makna Logo
          </div>
          <p>
            {{$perguruan->makna_logo}}
          </p>
        </div>
        <div class="mb-3">
          <div class="form-label">
            Deskripsi
          </div>
          <p>
            {{$perguruan->deskripsi}}
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="tokohView" class="mt-10 will-fadeIn reveal">
    <div class="flex flex-col lg:flex-row w-full">
      <div class="flex flex-col w-full lg:ml-[17rem] p-1 lg:p-5 text-justify">
        <div class="my-5">
          <h1 class="font-bold text-3xl text-center">
            Tokoh
          </h1>
          @if(count($guru_besar) > 0)
          <div class="divider">Guru Besar</div>
          <div class="flex flex-wrap justify-center">
            @foreach($guru_besar as $guru)


            <!-- tokoh card -->
            <div class="w-full md:w-[20rem] flex flex-col items-center gap-5 p-5 m-4 bg-white rounded-xl shadow-md transition-all duration-200 hover:scale-95 hover:shadow-2xl">
              <div class="w-[10rem] rounded-full overflow-hidden ">
                <img src="{{ url('/view-image/') . '/' . $guru['nama_file'] }}" alt="">
              </div>
              <div class="flex flex-col">
                <div class="form-label text-center">{{ $guru['nama'] }}</div>
                <div class="font-semibold text-xs uppercase mb-5 text-center text-slate-600"> {{ $guru['tipe'] }}</div>
                <p class="mb-5 line-clamp-3">
                  {!! $guru['deskripsi'] !!}
                </p>
                <div class="flex justify-center" data-hs-overlay="#modal-tokoh" data-id-tokoh="{{ $guru['id_tokoh'] }}">
                  <div class="btn-main flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                      <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                      <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                    </svg>
                    Lihat
                  </div>
                </div>
              </div>
            </div>
            <!-- tokoh card -->
            @endforeach
          </div>
          @endif
        </div>
        @if(count($tokoh_lain) > 0)
        <div class="divider">Tokoh Lain</div>
        <div class="flex flex-wrap justify-center">

          @foreach($tokoh_lain as $tokoh)
          <!-- tokoh card -->
          <div class="w-full md:w-[15rem] flex flex-col items-center gap-5 p-5 m-4 bg-white rounded-3xl shadow-md transition-all duration-200 hover:scale-95 hover:shadow-2xl">
            <div class="w-[5rem] rounded-full overflow-hidden ">
              <img src="{{ url('/view-image/') . '/' . $tokoh['nama_file'] }}" alt="">
            </div>
            <div class="flex flex-col">
              <div class="form-label text-center">{{ $tokoh['nama'] }}</div>
              <div class="font-semibold text-xs uppercase mb-5 text-center text-slate-600"> {{ $tokoh['tipe'] }}</div>
              <p class="mb-5 line-clamp-3 text-sm">
                {!! $tokoh['deskripsi'] !!}
              </p>
              <div class=" flex justify-center" data-hs-overlay="#modal-tokoh" data-id-tokoh="{{ $tokoh['id_tokoh'] }}">
                <div class="btn-main flex gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                    <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                    <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                  </svg>
                  Lihat
                </div>
              </div>
            </div>
          </div>
          <!-- tokoh card -->
          @endforeach
        </div>
        @endif

      </div>

    </div>

  </section>
  @if($perguruan->sejarah !== null && $perguruan->sejarah !== '')
  <section id="sejarahView" class="mt-10 reveal">
    <div class="flex flex-col lg:flex-row w-full">
      <div class="flex flex-col justify-center w-full lg:ml-[17rem] p-5 text-justify">
        <div class="my-5">
          <h1 class="font-bold text-3xl text-center">
            Sejarah
          </h1>
        </div>
        <p>
          {!!$perguruan->sejarah!!}
        </p>


      </div>
    </div>

  </section>
  <section id="prestasiView" class="mt-10 reveal">
    <div class="flex flex-col lg:flex-row w-full">
      <div class="flex flex-col justify-center w-full lg:ml-[17rem] p-5 text-justify">
        <div class="my-5 flex justify-center gap-5 group">
          <h1 class="font-bold text-3xl text-center">
            Prestasi
          </h1>
        </div>
        <div class="flex flex-wrap gap-5 justify-center">


          <!-- Prestasi Card -->
          <a class="relative flex flex-col w-[20rem] group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out " href="#">
            <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden">
              <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
              <!-- medal -->
              <img class="size-10 absolute top-3 right-3 group-hover:scale-110 transition-transform duration-200 ease-in-out" src="{{ url('/view-image/trophy-icon.svg') }}/" alt="">
              <!-- medal -->
            </div>
            <div class="p-4 md:p-5">
              <h3 class="text-lg font-bold text-gray-800">
                Kejuaraan Nasional Pencak Silat #3
              </h3>
              <div class="font-bold text-xs uppercase text-slate-400">
                10/10/2022
              </div>
              <p class="mt-1 text-gray-500 line-clamp-3">
                Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
              </p>
            </div>
          </a>
          <!-- Prestasi Card -->
          <!-- Prestasi Card -->
          <a class="relative flex flex-col w-[20rem] group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out " href="#">
            <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden">
              <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
              <!-- medal -->
              <img class="size-10 absolute top-3 right-3 group-hover:scale-110 transition-transform duration-200 ease-in-out" src="{{ url('/view-image/trophy-icon.svg') }}/" alt="">
              <!-- medal -->
            </div>
            <div class="p-4 md:p-5">
              <h3 class="text-lg font-bold text-gray-800">
                Kejuaraan Nasional Pencak Silat #3
              </h3>
              <div class="font-bold text-xs uppercase text-slate-400">
                10/10/2022
              </div>
              <p class="mt-1 text-gray-500 line-clamp-3">
                Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
              </p>
            </div>
          </a>
          <!-- Prestasi Card -->
          <!-- Prestasi Card -->
          <a class="relative flex flex-col w-[20rem] group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out " href="#">
            <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden">
              <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
              <!-- medal -->
              <img class="size-10 absolute top-3 right-3 group-hover:scale-110 transition-transform duration-200 ease-in-out" src="{{ url('/view-image/trophy-icon.svg') }}/" alt="">
              <!-- medal -->
            </div>
            <div class="p-4 md:p-5">
              <h3 class="text-lg font-bold text-gray-800">
                Kejuaraan Nasional Pencak Silat #3
              </h3>
              <div class="font-bold text-xs uppercase text-slate-400">
                10/10/2022
              </div>
              <p class="mt-1 text-gray-500 line-clamp-3">
                Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
              </p>
            </div>
          </a>
          <!-- Prestasi Card -->


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
      </div>
    </div>

  </section>

  <!-- modal -->
  <div id="modal-tokoh" class="hs-overlay hidden size-full fixed top-0 start-0 z-[999999] overflow-x-hidden overflow-y-auto pointer-events-none [--overlay-backdrop:static]" data-hs-overlay-keyboard="false">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all w-full sm:max-w-[70rem] sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] flex items-center justify-center">
      <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
        <div class="flex justify-between items-center py-3 px-4 border-b">

          <button type="button" class=" group flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-main text-gray-800 hover:bg-main disabled:opacity-50 disabled:pointer-events-none transition duration-200 ease-in-out" data-hs-overlay="#modal-tokoh">
            <span class="sr-only">Close</span>
            <svg class="flex-shrink-0 size-4 group-hover:text-white transition duration-200 ease-in-out" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="p-4 overflow-y-auto">
          <div class="space-y-4">

            <div class="flex flex-col justify-center items-center">
              <div class="w-[10rem] rounded-full overflow-hidden ">
                <img id="tokoh_foto" src="" alt="">
              </div>
              <div id="tokoh_nama" class="form-label text-center"></div>
              <div id="tokoh_tipe" class="font-semibold text-xs uppercase mb-5 text-center text-slate-600"></div>
              <p id="tokoh_deskripsi" class="mb-5 text-sm max-w-[35rem] text-justify"> </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal -->

  @include('layouts.footer')
  <script type="module">
    $(document).ready(function() {

      if ($('#content_empty').length > 0) {
        $('#content').addClass('hidden');
      }

      $('[data-hs-overlay="#modal-tokoh"]').on('click', function() {
        fillModal($(this).data('id-tokoh'));
      });

      function fillModal(id) {
        var api_url = '/api/adminpg/tokoh/' + id;

        $.get(api_url, function(data) {
          $('#tokoh_foto').attr('src', "{{ url('/view-image/' )}}" + "/" + data.nama_file);
          $('#tokoh_nama').html(data.nama);
          $('#tokoh_tipe').html(data.tipe);
          $('#tokoh_deskripsi').html(data.deskripsi);
          console.log(data);
        });
      }
    });
  </script>

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