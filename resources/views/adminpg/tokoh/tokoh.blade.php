<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tokoh') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="btn-main" data-hs-overlay="#tambah-tokoh">
                        Tambah Tokoh
                    </div>
                    <div class="divider">daftar tokoh</div>

                    <div class="flex flex-wrap justify-center">
                        <!-- tokoh card -->
                        <div class="flex justify-center flex-col items-center p-5 m-4 bg-white rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-2">

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-red-500 border-red-500 hover:bg-transparent hover:text-red-500 ">
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
                                    </button>
                                </div>

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-yellow-500 border-yellow-500 hover:bg-transparent hover:text-yellow-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Edit
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-blue-500 border-blue-500 hover:bg-transparent hover:text-blue-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                                        <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                                        <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Lihat
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!-- tokoh card -->
                        <!-- tokoh card -->
                        <div class="flex justify-center flex-col items-center p-5 m-4 bg-white rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-2">

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-red-500 border-red-500 hover:bg-transparent hover:text-red-500 ">
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
                                    </button>
                                </div>

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-yellow-500 border-yellow-500 hover:bg-transparent hover:text-yellow-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Edit
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-blue-500 border-blue-500 hover:bg-transparent hover:text-blue-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                                        <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                                        <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Lihat
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!-- tokoh card -->
                        <!-- tokoh card -->
                        <div class="flex justify-center flex-col items-center p-5 m-4 bg-white rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-2">

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-red-500 border-red-500 hover:bg-transparent hover:text-red-500 ">
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
                                    </button>
                                </div>

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-yellow-500 border-yellow-500 hover:bg-transparent hover:text-yellow-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Edit
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-blue-500 border-blue-500 hover:bg-transparent hover:text-blue-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                                        <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                                        <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Lihat
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!-- tokoh card -->
                        <!-- tokoh card -->
                        <div class="flex justify-center flex-col items-center p-5 m-4 bg-white rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-2">

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-red-500 border-red-500 hover:bg-transparent hover:text-red-500 ">
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
                                    </button>
                                </div>

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-yellow-500 border-yellow-500 hover:bg-transparent hover:text-yellow-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Edit
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-blue-500 border-blue-500 hover:bg-transparent hover:text-blue-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                                        <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                                        <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Lihat
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!-- tokoh card -->
                        <!-- tokoh card -->
                        <div class="flex justify-center flex-col items-center p-5 m-4 bg-white rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-2">

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-red-500 border-red-500 hover:bg-transparent hover:text-red-500 ">
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
                                    </button>
                                </div>

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-yellow-500 border-yellow-500 hover:bg-transparent hover:text-yellow-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Edit
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-blue-500 border-blue-500 hover:bg-transparent hover:text-blue-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                                        <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                                        <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Lihat
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!-- tokoh card -->
                        <!-- tokoh card -->
                        <div class="flex justify-center flex-col items-center p-5 m-4 bg-white rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-2">

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-red-500 border-red-500 hover:bg-transparent hover:text-red-500 ">
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
                                    </button>
                                </div>

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-yellow-500 border-yellow-500 hover:bg-transparent hover:text-yellow-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Edit
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-blue-500 border-blue-500 hover:bg-transparent hover:text-blue-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                                        <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                                        <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Lihat
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!-- tokoh card -->
                        <!-- tokoh card -->
                        <div class="flex justify-center flex-col items-center p-5 m-4 bg-white rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-2">

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-red-500 border-red-500 hover:bg-transparent hover:text-red-500 ">
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
                                    </button>
                                </div>

                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-yellow-500 border-yellow-500 hover:bg-transparent hover:text-yellow-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Edit
                                        </span>
                                    </button>
                                </div>
                                <div class="hs-tooltip">
                                    <button class="hs-tooltip-toggle [--trigger:hover] btn bg-blue-500 border-blue-500 hover:bg-transparent hover:text-blue-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                                        <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                                        <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                                    </svg>
                                        <span class="hs-tooltip-content font-bold hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-3 px-4 bg-white border text-sm text-gray-600 rounded-lg shadow-md" role="tooltip">
                                            Lihat
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!-- tokoh card -->



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
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-4">
                        <div class="form-group">
                            <label for="judultokoh" class="form-label">Nama Tokoh</label>
                            <input placeholder="Judul tokoh..." id="judultokoh" class="form-default" type="text" value="" />
                        </div>
                        <div class="form-group">
                            <label for="sejarah" class="form-label">tipe</label>
                            <div class="relative mb-4" data-hs-combo-box="">
                                <div class="relative">
                                    <input placeholder="Tipe..." id="jenis" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="" data-hs-combo-box-input="" />
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
                        </div>
                        <label for="artinama" class="form-label">Unggah Logo</label>
                        <div class="w-full  mb-2 form-default border-[1px]">
                            <form>
                                <label class="block">
                                    <span class="sr-only">Unggah photo</span>
                                    <input type="file" class="block w-full text-sm text-gray-500
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
                            </form>

                        </div>
                        <div class="form-group">
                            <label for="deskripsitokoh" class="form-label">Deskripsi</label>
                            <textarea placeholder="Deskripsi..." id="deskripsitokoh" class="form-default" type="text" value=""></textarea>
                        </div>

                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" class="w-fit cursor-pointer px-5 py-3 rounded-lg font-extrabold text-white bg-green-600 border-2 border-green-600 hover:text-green-600 hover:bg-transparent transition duration-200 ease-in-out ">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </div>
    </div>

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