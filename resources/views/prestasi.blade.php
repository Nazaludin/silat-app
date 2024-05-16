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
            <a href="{{route('home')}}">Beranda</a>
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
      <a href="{{ route('login') }}" class="btn-main"> Login </a>
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
            Prestasi
          </h1>
          <div>
            <label for="hs-trailing-button-add-on-with-icon-and-button" class="sr-only">Label</label>
            <div class="relative flex rounded-lg shadow-sm my-2 mx-2">
              <input placeholder="Cari Prestasi..." type="text" id="search" name="hs-trailing-button-add-on-with-icon-and-button" class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
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

      <div id="container_prestasi" class="flex flex-col w-full lg:ml-[25rem] p-5 text-justify gap-5">
        <!-- Prestasi Card -->
        <!-- <a class="flex flex-col w-full group bg-white  border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out " href="#">
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
        </a> -->
        <!-- Prestasi Card -->


      </div>
    </div>
    <div id="container_pagination"></div>

  </section>

  <script type="module">
    $(document).ready(function() {
      var page = 1;
      var pageNumber = 1;
      var searchKey = '';
      setPage(1);

      function loadData() {
        var api_url = '/api/prestasi?page=' + page;
        if (searchKey && searchKey.trim() !== '') {
          api_url += '&search=' + searchKey.trim(); // Menambahkan kata kunci pencarian ke URL API
        }

        $.get(api_url, function(data) {
          console.log(data);
          createCardPrestasidata(data);
          pagination(data);
        });
      }
      $("#search").on("input", function() {
        if ($("#search").val().trim() == "") {
          setSearchKey('');
        }

      });
      $("#btn_search").on("click", function() {
        setSearchKey($("#search").val());
      });

      function setSearchKey(key) {
        searchKey = key;
        console.log(searchKey);
        loadData();
      }

      function setPage(number) {
        page = number;
        loadData();
      }

      function numberPagination(number) {
        pageNumber = number;
        loadData();

      }



      function createCardPrestasidata(data) {
        const container = $('#container_prestasi');
        container.html('');
        $.each(data.data, function(index, item) {
          // Membuat elemen berita
          console.log(item);
          var prestasiCard = $('<a>', {
            'class': 'flex flex-col w-full group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg hover:scale-95 transition-all duration-200 ease-in-out',
            'href': "{{ route('prestasi.read','') }}/" + item.id_prestasi
          });
          var imageContainer = $('<div>', {
            'class': 'relative pt-[50%] rounded-t-xl overflow-hidden'
          }).appendTo(prestasiCard);

          $('<img>', {
            'class': 'size-full absolute top-0 start-0 object-cover object-center group-hover:scale-105 transition-transform duration-200 ease-in-out rounded-t-xl',
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
            'html': item.deskripsi
          }).appendTo(contentContainer);
          // Menambahkan elemen berita ke dalam container
          container.append(prestasiCard);
        });
      }

      function pagination(data) {
        const container = $("#container_pagination");
        container.html('');

        var divMain = $("<div>").addClass("hidden sm:flex sm:flex-1 sm:items-center sm:justify-between");
        var divFirst = $("<div>");
        var paragraph = $("<p>").addClass("text-sm text-gray-700").html("Tampil <span class='font-medium'>" + data.from + "</span> sampai <span class='font-medium'>" + data.to + "</span> dari total <span class='font-medium'>" + data.total + "</span> hasil");

        var divSecond = $("<div>");
        var navElement = $("<nav>").addClass("isolate inline-flex -space-x-px rounded-md shadow-sm").attr("aria-label", "Pagination");

        var firstNavItemClass = "relative inline-flex items-center rounded-l-full p-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 cursor-default";
        var lastNavItemClass = "relative hidden items-center p-2 rounded-r-full text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex hover:bg-main hover:text-white hover:opacity-70 cursor-pointer transition duration-200 ease-in-out";
        var defaultNavItemClass = "relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex hover:bg-main hover:text-white hover:opacity-70 cursor-pointer transition duration-200 ease-in-out";
        var activeNavItemClass = "relative z-10 inline-flex items-center bg-main px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-main ";

        var anchorPrev = $("<a>").attr("href", "#").addClass(firstNavItemClass).html("<span class='sr-only'>Previous</span><svg class='h-5 w-5' viewBox='0 0 20 20' fill='currentColor' aria-hidden='true'><path fill-rule='evenodd' d='M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z' clip-rule='evenodd' /></svg>").on("click", function() {
          if (pageNumber > 1) {
            numberPagination(pageNumber - 1);
          }
        });
        var anchorNext = $("<a>").attr("href", "#").addClass(lastNavItemClass).html("<span class='sr-only'>Next</span><svg class='h-5 w-5' viewBox='0 0 20 20' fill='currentColor' aria-hidden='true'>    <path fill-rule='evenodd' d='M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z' clip-rule='evenodd' /></svg>").on("click", function() {
          if ((pageNumber + 5) < data.last_page) {
            numberPagination(pageNumber + 1);
          }
        });

        if (data.last_page > 6) {
          console.log(data.current_page);
          navElement.append(anchorPrev);
          for (let index = pageNumber; index < (pageNumber + 6); index++) {
            (function() {
              var number = index;
              var anchorCurrent = $("<a>").text(number).on("click", function() {
                setPage(number);
              });
              if (data.current_page == number) {
                anchorCurrent.addClass(activeNavItemClass).attr("aria-current", "page");
              } else {
                anchorCurrent.addClass(defaultNavItemClass);
              }
              navElement.append(anchorCurrent);
            })();
          }
          navElement.append(anchorNext);

        } else {
          console.log('inn');
          for (let index = 1; index <= data.last_page; index++) {
            (function() {
              var number = index;
              var anchorCurrent = $("<a>").text(number).on("click", function() {
                setPage(number);
              });
              if (data.current_page == number) {
                anchorCurrent.addClass(activeNavItemClass).attr("aria-current", "page");
              } else {
                anchorCurrent.addClass(defaultNavItemClass);
              }
              navElement.append(anchorCurrent);
            })();
          }
        }

        divFirst.append(paragraph);
        divSecond.append(navElement);
        divMain.append(divFirst, divSecond);
        container.append(divMain);
      }
    });
  </script>

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