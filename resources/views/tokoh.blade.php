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
                    <div class="btn" data-hs-overlay="#tambah-tokoh">
                        Tambah Tokoh
                    </div>
                    <div class="divider">daftar tokoh</div>

                    <div class="flex flex-wrap justify-center">
                        <!-- tokoh card -->
                        <div class="flex justify-center flex-col items-center p-5 m-4 bg-slate-100 rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-7">
                                <div class="btn">
                                    Hapus
                                </div>
                                <div class="btn">
                                    Lihat
                                </div>
                            </div>
                        </div>
                        <!-- tokoh card -->
                        <!-- tokoh card -->
                        <div class="flex justify-center flex-col items-center p-5 m-4 bg-slate-100 rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-7">
                                <div class="btn">
                                    Hapus
                                </div>
                                <div class="btn">
                                    Lihat
                                </div>
                            </div>
                        </div>
                        <!-- tokoh card -->
                        <!-- tokoh card -->
                        <div class="flex justify-center flex-col items-center p-5 m-4 bg-slate-100 rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-7">
                                <div class="btn">
                                    Hapus
                                </div>
                                <div class="btn">
                                    Lihat
                                </div>
                            </div>
                        </div>
                        <!-- tokoh card -->
                        <!-- tokoh card -->
                        <div class="flex justify-center flex-col items-center p-5 m-4 bg-slate-100 rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-7">
                                <div class="btn">
                                    Hapus
                                </div>
                                <div class="btn">
                                    Lihat
                                </div>
                            </div>
                        </div>
                        <!-- tokoh card -->
                        <!-- tokoh card -->
                        <div class="flex justify-center flex-col items-center p-5 m-4 bg-slate-100 rounded-xl shadow-md">
                            <div class="w-[10rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="form-label mb-5">Tokoh 1</div>
                            <div class="flex gap-7">
                                <div class="btn">
                                    Hapus
                                </div>
                                <div class="btn">
                                    Lihat
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
    <div id="tambah-tokoh" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                    <h3 class="font-bold text-gray-800">
                        Tambah Tokoh
                    </h3>
                    <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#tambah-tokoh">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#tambah-tokoh">
                        Tutup
                    </button>
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>