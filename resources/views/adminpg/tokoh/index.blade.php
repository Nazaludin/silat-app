<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tokoh') }}
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
                            <p class="error-message text-sm text-gray-700">
                                {{ $error }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                <div class="p-6 text-gray-900">
                    <div class="divider">Daftar Tokoh</div>
                    @if (!$exist)
                    <div class="flex flex-wrap items-center justify-center h-full">
                        <div class="flex flex-col gap-5 text-center justify-center items-center md:items-start md:text-left">
                            <p class="font-bold text-3xl text-center">Data tokoh masih kosong!</p>

                            <a href="{{ route('adminpg.tokoh.add') }}" class="btn-main">
                                Tambah Tokoh
                            </a>
                        </div>
                        <img class="w-[30rem] object-contain" src="{{ url('/view-image/404.svg') }}/" alt="">
                    </div>

                    @else
                    <div class="flex justify-between">
                        <div>
                            <label for="hs-trailing-button-add-on-with-icon-and-button" class="sr-only">Label</label>
                            <div class="relative flex rounded-lg shadow-sm my-2 mx-2">
                                <input type="text" id="search" name="hs-trailing-button-add-on-with-icon-and-button" class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                    <svg class="flex-shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                </div>
                                <button id="btn_search" type="button" class="w-fit cursor-pointer px-5 py-3 rounded-lg font-extrabold text-white bg-main border-2 border-main hover:text-main hover:bg-transparent transition duration-200 ease-in-out  rounded-l-none mx-0">Cari</button>
                            </div>
                        </div>
                        <a href="{{ route('adminpg.tokoh.add') }}" class="btn-main my-2 mx-4">
                            Tambah Tokoh
                        </a>
                    </div>
                    <div id="container_tokoh_empty" class="flex flex-wrap justify-center hidden">
                        <div class="flex flex-wrap items-center justify-center h-full">
                            <div class="flex flex-col gap-5 text-center justify-center items-center md:items-start md:text-left">
                                <p class="font-bold text-3xl text-center">Maaf, data tokoh yang Anda cari tidak ditemukan!</p>
                            </div>
                            <img class="w-[30rem] object-contain" src="{{ url('/view-image/404.svg') }}/" alt="">
                        </div>
                    </div>
                    <div id="container_tokoh" class="flex flex-wrap justify-center">
                        <!-- tokoh card -->

                        <!-- <div class="flex justify-center flex-col items-center p-5 m-4 bg-white rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-2">

                                <div class="hs-tooltip">
                                    <div class="hs-tooltip-toggle [--trigger:hover] btn bg-red-500 border-red-500 hover:bg-transparent hover:text-red-500 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Hapus
                                        </span>
                                    </div>
                                </div>

                                <div class="hs-tooltip">
                                    <div class="hs-tooltip-toggle [--trigger:hover] btn bg-yellow-500 border-yellow-500 hover:bg-transparent hover:text-yellow-500 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Edit
                                        </span>
                                    </div>
                                </div>
                                <div class="hs-tooltip">
                                    <div class="hs-tooltip-toggle [--trigger:hover] btn bg-blue-500 border-blue-500 hover:bg-transparent hover:text-blue-500 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                                            <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                                            <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                                        </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Lihat
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- tokoh card -->


                    </div>
                    <div id="container_pagination" class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6"></div>
                    <button id="btn_trigger_delete" type="hidden" data-hs-overlay="#delete-alert"></button>
                    <button id="btn_trigger_deskripsi" type="hidden" data-hs-overlay="#deskripsi-tokoh"></button>
                    <script type="module">
                        $(document).ready(function() {
                            var page = 1;
                            var pageNumber = 1;
                            var searchKey = '';

                            setPage(1);

                            function loadData() {
                                var api_url = '/api/adminpg/tokoh?page=' + page;
                                if (searchKey && searchKey.trim() !== '') {
                                    api_url += '&search=' + searchKey.trim(); // Menambahkan kata kunci pencarian ke URL API
                                }

                                $.get(api_url, function(data) {
                                    console.log(data);
                                    if (data.data.length > 0) {
                                        contentEmptyOff();
                                        generateCardTokoh(data);
                                        pagination(data);
                                    } else {
                                        // Handle the case when data is empty
                                        // For example, you can display a message or perform any other action
                                        contentEmpty();
                                        console.log("No data available.");
                                    }
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

                            function contentEmpty() {
                                $("#container_tokoh_empty").removeClass('hidden');
                                $("#container_tokoh").addClass('hidden');
                                $("#container_pagination").addClass('hidden');
                            }

                            function contentEmptyOff() {
                                $("#container_tokoh_empty").addClass('hidden');
                                $("#container_tokoh").removeClass('hidden');
                                $("#container_pagination").removeClass('hidden');
                            }

                            function generateCardTokoh(data) {
                                const container = $('#container_tokoh');
                                container.html('');
                                $.each(data.data, function(index, item) {

                                    var card = $("<div>", {
                                        "class": "flex justify-center flex-col items-center p-5 m-4 bg-white rounded-xl shadow-md"
                                    });

                                    var imageDiv = $("<div>", {
                                        "class": "h-[12rem] w-[10rem] rounded-full overflow-hidden"
                                    }).appendTo(card);

                                    $("<img>", {
                                        "src": "{{ url('/view-image/') }}/" + item.nama_file,
                                        "class": "object-cover object-center w-full h-full",
                                        "alt": ""
                                    }).appendTo(imageDiv);

                                    $("<div>", {
                                        "class": "form-label",
                                        "text": item.nama
                                    }).appendTo(card);
                                    $("<div>", {
                                        "class": "font-semibold mb-5 text-xs text-slate-500",
                                        "text": item.tipe
                                    }).appendTo(card);

                                    var flexContainer = $("<div>", {
                                        "class": "flex gap-2"
                                    }).appendTo(card);

                                    // Button
                                    var deleteButton = $("<div>", {
                                        "class": "hs-tooltip",
                                    }).on("click", function() {
                                        $('#btn_trigger_delete').click();
                                        $('#form_delete').attr('action', "{{ route('adminpg.tokoh.destroy', '') }}/" + item.id_tokoh);
                                    }).appendTo(flexContainer);

                                    $("<div>", {
                                        "class": "hs-tooltip-toggle [--trigger:hover] btn bg-red-500 border-red-500 hover:bg-transparent hover:text-red-500 ",
                                        "html": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>',
                                    }).appendTo(deleteButton);

                                    $("<span>", {
                                        "class": "hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md",
                                        "text": "Hapus"
                                    }).appendTo(deleteButton);

                                    // Create edit button
                                    var editButton = $("<a>", {
                                        "class": "hs-tooltip",
                                        "href": "{{ route('adminpg.tokoh.edit','') }}/" + item.id_tokoh,
                                    }).appendTo(flexContainer);

                                    $("<div>", {
                                        "class": "hs-tooltip-toggle [--trigger:hover] btn bg-yellow-500 border-yellow-500 hover:bg-transparent hover:text-yellow-500 ",
                                        "html": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>',
                                    }).appendTo(editButton);

                                    $("<span>", {
                                        "class": "hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md",
                                        "text": "Edit"
                                    }).appendTo(editButton);

                                    // Create view button
                                    var viewButton = $("<div>", {
                                        "class": "hs-tooltip",
                                    }).on("click", function() {
                                        $('#btn_trigger_deskripsi').click();
                                        $('#container_deskripsi').html(item.deskripsi);
                                    }).appendTo(flexContainer);

                                    $("<div>", {
                                        "class": "hs-tooltip-toggle [--trigger:hover] btn bg-blue-500 border-blue-500 hover:bg-transparent hover:text-blue-500 ",
                                        "html": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" /><path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" /><path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" /></svg>',
                                    }).appendTo(viewButton);

                                    $("<span>", {
                                        "class": "hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md",
                                        "text": "Lihat"
                                    }).appendTo(viewButton);

                                    // Repeat similar process for edit and view buttons...

                                    // Append the whole constructed div to the body or any other container you prefer
                                    container.append(card);
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
                    @endif



                </div>

            </div>
        </div>

    </div>

    <!-- modal -->
    <div id="delete-alert" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 class="font-bold text-gray-800">
                        Hapus Tokoh?
                    </h3>
                    <button type="button" class=" group flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-main text-gray-800 hover:bg-main disabled:opacity-50 disabled:pointer-events-none transition duration-200 ease-in-out" data-hs-overlay="#delete-alert">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <p class="mt-1 text-gray-800">
                        Pastikan Anda yakin sebelum menghapus. Aksi ini tidak dapat dibatalkan.
                    </p>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" class="hs-dropup-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#delete-alert">
                        Tutup
                    </button>

                    <form id="form_delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- modal -->

    <div id="tambah-tokoh" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none [--overlay-backdrop:static]" data-hs-overlay-keyboard="false">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all w-full sm:max-w-[70rem] sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 class="font-bold text-gray-800">
                        Tambah Tokoh
                    </h3>
                    <button type="button" class=" group flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-main text-gray-800 hover:bg-main disabled:opacity-50 disabled:pointer-events-none transition duration-200 ease-in-out" data-hs-overlay="#tambah-tokoh">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4 group-hover:text-white transition duration-200 ease-in-out" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <form id="form_store_tokoh" action="{{ route('adminpg.prestasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="p-4 overflow-y-auto">
                        <div class="space-y-4">
                            <div class="form-group">
                                <label for="namatokoh" class="form-label">Nama Tokoh</label>
                                <input placeholder="Judul tokoh..." id="namatokoh" name="nama" class="form-default" type="text" value="" />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label for="tipe" class="form-label">tipe</label>
                                <div class="relative mb-4" data-hs-combo-box="">
                                    <div class="relative">
                                        <input placeholder="Tipe..." id="tipe" name="tipe" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="" data-hs-combo-box-input="" />
                                        <div class="absolute top-1/2 end-3 -translate-y-1/2" data-hs-combo-box-toggle="">
                                            <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m7 15 5 5 5-5"></path>
                                                <path d="m7 9 5-5 5 5"></path>
                                            </svg>
                                        </div>
                                        <x-input-error :messages="$errors->get('tipe')" class="mt-2" />

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
                            </div>
                            <label for="file" class="form-label">Unggah Logo</label>
                            <div class="w-full  mb-2 form-default border-[1px]">
                                <label class="block">
                                    <span class="sr-only">Unggah photo</span>
                                    <input id="file" type="file" name="file" class="block w-full text-sm text-gray-500
                                    file:me-4 file:py-2 file:px-4
                                    file:rounded-lg file:border-2file:border-main
                                    file:text-sm file:font-extrabold
                                    file:bg-main file:text-white
                                    hover:file:bg-transparent
                                    hover:file:text-main
                                    file:transition file:duration-200 file:ease-in-out
                                    file:cursor-pointer
                                    file:disabled:opacity-50 file:disabled:pointer-events-none
                                    ">
                                </label>
                                <x-input-error :messages="$errors->get('file')" class="mt-2" />

                            </div>
                            <div class="form-group">
                                <label for="deskripsitokoh" class="form-label">Deskripsi</label>
                                <textarea placeholder="Deskripsi..." id="deskripsitokoh" class="form-default" type="text" value=""></textarea>
                                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                            </div>

                        </div>
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                        <button type="submit" class="w-fit cursor-pointer px-5 py-3 rounded-lg font-extrabold text-white bg-green-600 border-2 border-green-600 hover:text-green-600 hover:bg-transparent transition duration-200 ease-in-out ">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- modal -->
    <div id="deskripsi-tokoh" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none [--overlay-backdrop:static]" data-hs-overlay-keyboard="false">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all w-full sm:max-w-[70rem] sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 class="font-bold text-gray-800">
                        Deskripsi
                    </h3>
                    <button type="button" class=" group flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-main text-gray-800 hover:bg-main disabled:opacity-50 disabled:pointer-events-none transition duration-200 ease-in-out" data-hs-overlay="#deskripsi-tokoh">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4 group-hover:text-white transition duration-200 ease-in-out" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-4">
                        <p id="container_deskripsi"></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <script type="module">
        // function openModal(modalID) {
        //     console.log('INN');
        //     const modal = $('#' + modalID);
        //     modal.removeClass('hidden').addClass('open opened');
        // }

        // const errorMessages = document.querySelectorAll('.error-message');

        // if (errorMessages.length > 0) {
        //     // Jika ada pesan kesalahan, buka modal
        //     openModal('tambah-tokoh');
        // }
        // Contoh pemanggilan fungsi untuk membuka modal
        // openModal('tambah-tokoh');
        // document.getElementById('tambah-tokoh').classList.remove('hidden');
        // $('#btn_tambah').click();
    </script>
    <script>
        // .. After imports init TinyMCE ..
        window.addEventListener('DOMContentLoaded', () => {
            tinymce.init({
                selector: 'textarea',

                /* TinyMCE configuration options */
                skin: false,
                content_css: false
            });
        });
    </script>
    
</x-app-layout>