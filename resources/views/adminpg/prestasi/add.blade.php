<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sejarah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form id="form_store_prestasi" action="{{ route('adminpg.prestasi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul" class="form-label">Judul</label>
                            <input placeholder="Judul..." id="judul" name="judul" class="form-default" type="text" value="{{old('judul')}}" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input placeholder="Tahun..." id="tahun" name="tahun" class="form-default" type="number" value="{{old('tahun')}}" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('tahun')" class="mt-2" />
                        </div>
                        <!-- upload Gambar -->
                        <div class="form-group">
                            <label for="file" class="form-label">Unggah Gambar</label>
                            <div class="w-full  mb-2 form-default border-[1px]">

                                <label class="block">
                                    <span class="sr-only">Choose profile photo</span>
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

                            </div>
                        </div>

                        <!-- form  -->
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Tuliskan Dekripsi Prestasi</label>
                                <textarea id="deskripsi" class="tinyMce" name="deskripsi">{{old('deskripsi')}}</textarea>
                                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />

                            </div>
                        </div>

                        <hr class="mb-3">
                        <div class="flex justify-end">
                            <button type="button" class="btn-main" data-hs-overlay="#submit-alert">Simpan Perubahan</button>
                        </div>
                        <!-- End form  -->
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div id="submit-alert" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 class="font-bold text-gray-800">
                        Simpan Perubahan?
                    </h3>
                    <button type="button" class="hs-dropup-toggle flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none " data-hs-overlay="#submit-alert">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <p class="mt-1 text-gray-800">
                        Data akan berubah sesuai dengan input yang telah dimasukkan
                    </p>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" class="hs-dropup-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#submit-alert">
                        Tutup
                    </button>
                    <button onclick="$('#form_store_prestasi').submit()" type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // ..After imports init TinyMCE..
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