<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prestasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="btn" data-hs-overlay="#tambah-prestasi">
                        Tambah Prestasi
                    </div>
                    <div class="divider">daftar Prestasi</div>


                    <!-- upload Gambar -->
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="border rounded-lg divide-y divide-gray-200">
                                    <div class="py-3 px-4">
                                        <div class="relative max-w-xs">
                                            <label class="sr-only">Search</label>
                                            <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search" class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Cari Prestasi">
                                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                                <svg class="size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <path d="m21 21-4.3-4.3"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-slate-100">
                                                <tr>
                                                    <th scope="col" class="py-3 px-4 pe-0">
                                                        <div class="flex items-center h-5">
                                                            <input id="hs-table-pagination-checkbox-all" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                                                            <label for="hs-table-pagination-checkbox-all" class="sr-only">Checkbox</label>
                                                        </div>
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">No</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Judul</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tahun</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Deskripsi</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200">
                                                <tr>
                                                    <td class="py-3 ps-4">
                                                        <div class="flex items-center h-5">
                                                            <input id="hs-table-pagination-checkbox-1" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                                                            <label for="hs-table-pagination-checkbox-1" class="sr-only">Checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">1</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Juara 1 Lomba Pencak Silat</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">3 Januari 2022</td>
                                                    <td class="px-6 py-4 text-sm text-gray-800 text-justify">
                                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, amet optio consequatur, quisquam ad, possimus facilis facere distinctio suscipit ut reiciendis? Temporibus, cum aut inventore unde, voluptatibus, saepe quas eum ipsam molestias numquam explicabo fugit natus magni iste modi! Exercitationem temporibus illum error amet deleniti accusamus incidunt dolor asperiores! Corrupti!
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 disabled:opacity-50 disabled:pointer-events-none px-2">Hapus</button>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="py-1 px-4">
                                        <nav class="flex items-center space-x-1">
                                            <button type="button" class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                                                <span aria-hidden="true">«</span>
                                                <span class="sr-only">Previous</span>
                                            </button>
                                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none" aria-current="page">1</button>
                                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none">2</button>
                                            <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none">3</button>
                                            <button type="button" class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                                                <span class="sr-only">Next</span>
                                                <span aria-hidden="true">»</span>
                                            </button>
                                        </nav>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

    <div id="tambah-prestasi" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                    <h3 class="font-bold text-gray-800">
                        Tambah Prestasi
                    </h3>
                    <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#tambah-prestasi">
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
                            <label for="judulprestasi" class="form-label">Judul Prestasi</label>
                            <input placeholder="Judul Prestasi..." id="judulprestasi" class="form-default" type="text" value="" />
                        </div>
                        <div class="form-group">
                            <label for="tanggalprestasi" class="form-label">Tanggal Prestasi</label>
                            <input placeholder="Tanggal Prestasi..." id="tanggalprestasi" class="form-default" type="date" value="" />
                        </div>
                        <div class="form-group">
                            <label for="deskripsiprestasi" class="form-label">Deskripsi Prestasi</label>
                            <textarea placeholder="Deskripsi Prestasi..." id="deskripsiprestasi" class="form-default" type="text" value="" ></textarea>
                        </div>

                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#tambah-prestasi">
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