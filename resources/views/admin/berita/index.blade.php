<x-admin-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Super Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">


                @if (null !== session('success'))
                <div class="bg-green-50 border-s-4 border-green-500 p-4 my-1" role="alert">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <!-- Icon -->
                            <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-green-100 bg-green-200 text-green-800">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                            </span>
                            <!-- End Icon -->
                        </div>
                        <div class="ms-3">
                            <h3 class="text-gray-800 font-semibold">
                                Berhasil
                            </h3>
                            <p class="text-sm text-gray-700">
                                {{ session('success')}}
                            </p>
                        </div>
                    </div>
                </div>
                @endif

                @if ($errors->any)
                @foreach ($errors->all() as $error)
                <div class="bg-red-50 border-s-4 border-red-500 p-4 my-1" role="alert">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <!-- Icon -->
                            <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-red-100 bg-red-200 text-red-800">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                            </span>
                            <!-- End Icon -->
                        </div>
                        <div class="ms-3">
                            <h3 class="text-gray-800 font-semibold">
                                Peringatan!!
                            </h3>
                            <p class="text-sm text-gray-700">
                                {{ $error }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif



                <div class="p-6 text-gray-900">
                    <div class="divider">Daftar Berita</div>

                    <!-- upload Gambar -->
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="border rounded-lg divide-y divide-gray-200">
                                    <div class="flex justify-between">
                                        <div>
                                            <label for="hs-trailing-button-add-on-with-icon-and-button" class="sr-only">Label</label>
                                            <div class="relative flex rounded-lg shadow-sm my-2 mx-2">
                                                <input placeholder="Cari Perguruan..." type="text" id="search" name="hs-trailing-button-add-on-with-icon-and-button" class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                                    <svg class="flex-shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <path d="m21 21-4.3-4.3"></path>
                                                    </svg>
                                                </div>
                                                <button id="btn_search" type="button" class="w-fit cursor-pointer px-5 py-3 rounded-lg font-extrabold text-white bg-main border-2 border-main hover:text-main hover:bg-transparent transition duration-200 ease-in-out  rounded-l-none mx-0">Cari</button>
                                            </div>
                                        </div>
                                        <!-- <a href="{{ route('adminpg.prestasi.add') }}" class="btn-main my-2 mx-4">
                                            Tambah Prestasi
                                        </a> -->
                                    </div>
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 border-seperate">
                                            <thead class="bg-slate-100">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">No</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Perguruan</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Judul</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Berita</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Status</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="container_row_berita" class="divide-y divide-gray-200 align-top">



                                            </tbody>
                                        </table>
                                    </div>




                                    <div id="container_pagination" class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">

                                    </div>
                                    <div class="inline-flex items-center bg-blue-200 px-4 rounded-full">
                                        <span class="size-2 inline-block bg-blue-500 rounded-full me-2"></span>
                                        <span class="text-blue-700">Pending</span>
                                    </div>
                                    <div class="inline-flex items-center  bg-orange-100 px-4 rounded-full">
                                        <span class="size-2 inline-block bg-orange-500 rounded-full me-2"></span>
                                        <span class="text-orange-700">Revised</span>
                                    </div>
                                    <div class="inline-flex items-center  bg-yellow-100 px-4 rounded-full">
                                        <span class="size-2 inline-block bg-yellow-500 rounded-full me-2"></span>
                                        <span class="text-yellow-700">Resubmitted</span>
                                    </div>
                                    <div class="inline-flex items-center  bg-green-200 px-4 rounded-full">
                                        <span class="size-2 inline-block bg-green-500 rounded-full me-2"></span>
                                        <span class="text-green-700">Accepted</span>
                                    </div>
                                    <div class="inline-flex items-center  bg-red-200 px-4 rounded-full">
                                        <span class="size-2 inline-block bg-red-500 rounded-full me-2"></span>
                                        <span class="text-red-700">Rejected</span>
                                    </div>
                                </div>
                                <button id="btn_trigger_reject" type="hidden" data-hs-overlay="#tolak-berita"></button>
                                <button id="btn_trigger_revisi" type="hidden" data-hs-overlay="#revisi-berita"></button>
                                <button id="btn_trigger_accept" type="hidden" data-hs-overlay="#validasi-berita"></button>
                                <button id="btn_trigger_view" type="hidden" data-hs-overlay="#lihat-berita"></button>
                                <script type="module">
                                    $(document).ready(function() {
                                        var page = 1;
                                        var pageNumber = 1;
                                        var searchKey = '';

                                        setPage(1);

                                        function loadData() {
                                            var api_url = '/api/admin/berita?page=' + page;
                                            if (searchKey && searchKey.trim() !== '') {
                                                api_url += '&search=' + searchKey.trim(); // Menambahkan kata kunci pencarian ke URL API
                                            }

                                            $.get(api_url, function(data) {
                                                console.log(data);
                                                fillTable(data);
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

                                        function fillTable(data) {
                                            const container = $('#container_row_berita');
                                            container.html('');
                                            $.each(data.data, function(index, item) {

                                                var tr = $('<tr>');

                                                // Buat elemen <td> u
                                                var tdNumber = $('<td>').addClass('px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 border-r border-r-gray-200').text('1');
                                                var tdPerguruan = $('<td>').addClass('px-6 py-4 whitespace-nowrap text-sm text-gray-800 border-r border-r-gray-200').text(item.penulis);
                                                var tdDate = $('<td>').addClass('px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 border-r border-r-gray-200').text(item.tanggal);
                                                var tdStatus = $('<td>').addClass('px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 border-r border-r-gray-200').text(item.id_status_berita);
                                                var tdJudul = $('<td>').addClass('px-6 py-4 text-sm text-gray-800 text-justify border-r border-r-gray-200 ').html(item.judul);
                                                var tdBerita = $('<td>').addClass('px-6 py-4 text-sm text-gray-800 text-justify border-r border-r-gray-200 ').html(item.berita);

                                                // Buat elemen <td> untuk tombol lihat

                                                var btnTolak = $('<div>').addClass('hs-tooltip').html(`
                                                <button customToolTip="Tolak" class="flex justify-center items-center flex-col hs-tooltip-toggle [--trigger:hover] w-fit cursor-pointer p-1 rounded-lg font-extrabold text-white border-2 transition duration-200 ease-in-out bg-red-500 border-red-500 hover:bg-transparent hover:text-red-500 ">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-ban"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M5.7 5.7l12.6 12.6" /></svg>
                                                </button>
                                                `).on("click", function() {
                                                    $('#btn_trigger_reject').click();
                                                    $('#form_reject_berita').attr('action', "{{ route('admin.berita.reject', '') }}/" + item.id_berita);
                                                });
                                                var btnRevisi = $('<div>').addClass('hs-tooltip').html(`
                                                <button customToolTip="Revisi" class="flex justify-center items-center flex-col hs-tooltip-toggle [--trigger:hover] w-fit cursor-pointer p-1 rounded-lg font-extrabold text-white border-2 transition duration-200 ease-in-out bg-yellow-500 border-yellow-500 hover:bg-transparent hover:text-yellow-500 ">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-replace"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 3m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M15 15m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M21 11v-3a2 2 0 0 0 -2 -2h-6l3 3m0 -6l-3 3" /><path d="M3 13v3a2 2 0 0 0 2 2h6l-3 -3m0 6l3 -3" /></svg>
                                                </button>
                                                `).on("click", function() {
                                                    $('#btn_trigger_revisi').click();
                                                    $('#form_revisi_berita').attr('action', "{{ route('admin.berita.revisi', '') }}/" + item.id_berita);
                                                });
                                                var btnValidate = $('<div>').addClass('hs-tooltip').html(`
                                                <button customToolTip="Validasi" class="flex justify-center items-center flex-col hs-tooltip-toggle [--trigger:hover] w-fit cursor-pointer p-1 rounded-lg font-extrabold text-white border-2 transition duration-200 ease-in-out bg-green-500 border-green-500 hover:bg-transparent hover:text-green-500 ">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-checks"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg>
                                                </button>
                                                `).on("click", function() {
                                                    $('#btn_trigger_accept').click();
                                                    $('#form_accept_berita').attr('action', "{{ route('admin.berita.accept', '') }}/" + item.id_berita);
                                                });
                                                var btnView = $('<div>').addClass('hs-tooltip').html(`
                                                <button customToolTip="Lihat" class="flex justify-center items-center flex-col hs-tooltip-toggle [--trigger:hover] w-fit cursor-pointer p-1 rounded-lg font-extrabold text-white border-2 transition duration-200 ease-in-out bg-blue-500 border-blue-500 hover:bg-transparent hover:text-blue-500" data-hs-overlay="#modal-view-prestasi">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                                                    <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                                                    <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                                                </svg>
                                                </button>
                                                `).on("click", function() {
                                                    $('#btn_trigger_view').click();
                                                    $('#gambar_berita').attr("src", "{{ url('/view-image/' )}}" + "/" + item.nama_file);
                                                    $('#judul_berita').html(item.judul);
                                                    $('#tanggal_berita').html(item.tanggal);
                                                    $('#content_berita').html(item.berita);
                                                });


                                                var tdAction = $('<td>').addClass('flex justify-end gap-2 px-6 py-4 whitespace-nowrap text-end text-sm font-medium border-r border-r-gray-200');
                                                // var btnView = $('<button>').attr('type', 'button').addClass('inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none px-2').text('Lihat');
                                                // var btnEdit = $('<button>').attr('type', 'button').addClass('inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-yellow-600 hover:text-yellow-800 disabled:opacity-50 disabled:pointer-events-none px-2').text('Edit');
                                                // var btnDelete = $('<button>').attr('type', 'button').addClass('inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 disabled:opacity-50 disabled:pointer-events-none px-2').text('Hapus');


                                                tdAction.append(btnTolak);
                                                tdAction.append(btnRevisi);
                                                tdAction.append(btnValidate);
                                                tdAction.append(btnView);
                                                tr.append(tdNumber, tdPerguruan, tdDate, tdJudul, tdBerita, tdStatus, tdAction, );
                                                container.append(tr);
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
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>

    </div>

    <!-- modal -->
    <div id="revisi-berita" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 class="font-bold text-gray-800">
                        Revisi Berita?
                    </h3>
                    <button type="button" class=" group flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-main text-gray-800 hover:bg-main disabled:opacity-50 disabled:pointer-events-none transition duration-200 ease-in-out" data-hs-overlay="#revisi-berita">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4 group-hover:text-white transition duration-200 ease-in-out" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>

                <form id="form_revisi_berita" method="POST">
                    @csrf
                    <div class="flex gap-5 flex-col items-center p-4 overflow-y-auto">
                        <p class="mt-1 text-gray-800">
                            Berikan masukkan untuk revisi berita
                        </p>

                        <div class="w-[28rem] space-y-3">
                            <textarea id="saran" name="saran" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" rows="3" placeholder="Masukkan Saran..."></textarea>
                        </div>
                        <x-input-error :messages="$errors->get('saran')" class="mt-2" />

                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">

                        <button type="submit" class="btn bg-yellow-500 border-yellow-500 hover:bg-transparent hover:text-yellow-500">
                            Revisi
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
    <!-- modal -->
    <!-- modal -->
    <div id="tolak-berita" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 class="font-bold text-gray-800">
                        Tolak Berita
                    </h3>
                    <button type="button" class=" group flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-main text-gray-800 hover:bg-main disabled:opacity-50 disabled:pointer-events-none transition duration-200 ease-in-out" data-hs-overlay="#tolak-berita">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4 group-hover:text-white transition duration-200 ease-in-out" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>

                <form id="form_reject_berita" method="POST">
                    @csrf
                    <div class="p-4 overflow-y-auto">
                        <p class="text-center mt-1 text-gray-800">
                            Tolak Berita ini? Berita yang ditolak <b>tidak bisa</b> dipublikasikan oleh perguruan ini. Lanjutkan?
                        </p>
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                        <button type="submit" class="btn bg-red-600 border-red-600 hover:bg-transparent hover:text-red-600">
                            Tolak
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
    <!-- modal -->
    <!-- modal -->
    <div id="validasi-berita" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 class="font-bold text-gray-800">
                        Validasi Berita
                    </h3>
                    <button type="button" class=" group flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-main text-gray-800 hover:bg-main disabled:opacity-50 disabled:pointer-events-none transition duration-200 ease-in-out" data-hs-overlay="#validasi-berita">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4 group-hover:text-white transition duration-200 ease-in-out" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>

                <form id="form_accept_berita" method="POST">
                    @csrf
                    <div class="p-4 overflow-y-auto">
                        <p class="text-center mt-1 text-gray-800">
                            Validasi Berita ini? Berita yang divalidasi akan dipublikasikan atas nama perguruan ini. Lanjutkan?
                        </p>
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                        <button type="submit" class="btn bg-green-600 border-green-600 hover:bg-transparent hover:text-green-600">
                            Validasi
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
    <!-- modal -->
    <!-- modal -->
    <div id="lihat-berita" class="hs-overlay hidden size-full fixed top-0 start-0 z-[999999] overflow-x-hidden overflow-y-auto pointer-events-none [--overlay-backdrop:static]" data-hs-overlay-keyboard="false">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all w-full sm:max-w-[70rem] sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] flex items-center justify-center">
            <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <div class="form-label"> Berita</div>

                    <button type="button" class=" group flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-main text-gray-800 hover:bg-main disabled:opacity-50 disabled:pointer-events-none transition duration-200 ease-in-out" data-hs-overlay="#lihat-berita">
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
                            <div class="w-[30rem] rounded-2xl overflow-hidden ">
                                <img class="object-cover" id="gambar_berita" alt="">
                            </div>
                            <div id="judul_berita" class="form-label text-center"></div>
                            <div id="tanggal_berita" class="font-semibold text-xs uppercase mb-5 text-center text-slate-600"></div>
                            <p id="content_berita" class="mb-5 text-sm max-w-[35rem] text-justify"></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->


</x-admin-layout>