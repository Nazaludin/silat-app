<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <form id="form_store_perguruan" action="{{ route('perguruan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 text-gray-900">
                        <div class="form-group">
                            <label for="namaperguruan" class="form-label">Nama Perguruan</label>
                            <input placeholder="Nama Perguruan..." id="namaperguruan" name="nama" class="form-default" type="text" value="" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="artinama" class="form-label">Arti Nama</label>
                            <input placeholder="Arti Nama..." id="artinama" class="form-default" type="text" value="" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('arti_nama')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="motto" class="form-label">Motto</label>
                            <input placeholder="Motto..." id="motto" class="form-default" type="text" value="" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('motto')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="sejarah" class="form-label">Sejarah</label>
                            <input placeholder="Sejarah..." id="sejarah" class="form-default" type="text" value="" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('sejarah')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input placeholder="Deskripsi..." id="deskripsi" class="form-default" type="text" value="" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                        </div>

                        <label for="logo" class="form-label">Unggah Logo</label>
                        <div class="w-full  mb-2 form-default border-[1px]">
                            <label class="block">
                                <span class="sr-only">Choose profile photo</span>
                                <input id="logo" type="file" class="block w-full text-sm text-gray-500
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
                                <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="maknalogo" class="form-label">Makna Logo</label>
                            <input placeholder="Makna Logo..." id="maknalogo" class="form-default" type="text" value="" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('makna_logo')" class="mt-2" />
                        </div>
                        <div class="flex gap-5">
                            <div class="form-group w-1/2">
                                <label for="tahunberdiri" class="form-label">Tahun Berdiri</label>
                                <input placeholder="Tahun Berdiri..." id="tahunberdiri" class="form-default" type="number" value="" data-hs-combo-box-input="" />
                                <x-input-error :messages="$errors->get('tahun_berdiri')" class="mt-2" />
                            </div>
                            <div class="form-group w-1/2">
                                <label for="aliran" class="form-label">Aliran</label>
                                <div class="relative mb-4" data-hs-combo-box="">
                                    <div class="relative">
                                        <input placeholder="Pilih Jenis..." id="aliran" name="aliran" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="{{old('aliran')}}" data-hs-combo-box-input="" />
                                        <div class="absolute top-1/2 end-3 -translate-y-1/2" data-hs-combo-box-toggle="">
                                            <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m7 15 5 5 5-5"></path>
                                                <path d="m7 9 5-5 5 5"></path>
                                            </svg>
                                        </div>
                                        <x-input-error :messages="$errors->get('aliran')" class="mt-2" />

                                    </div>
                                    <div class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500" style="display: none" data-hs-combo-box-output="">
                                        <!-- select -->
                                        <div class="cursor-pointer py-2 px-4 w-full text-sm text-main hover:text-white hover:bg-main rounded-lg focus:outline-none focus:opacity-75" tabindex="0" data-hs-combo-box-output-item="">
                                            <div class="flex justify-between items-center w-full">
                                                <span data-hs-combo-box-search-text="Muaitai" data-hs-combo-box-value="">Muaitai</span>
                                                <span class="hidden hs-combo-box-selected:block">
                                                    <svg class="flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- select -->
                                        <!-- select -->
                                        <div class="cursor-pointer py-2 px-4 w-full text-sm text-main hover:text-white hover:bg-main rounded-lg focus:outline-none focus:opacity-75" tabindex="0" data-hs-combo-box-output-item="">
                                            <div class="flex justify-between items-center w-full">
                                                <span data-hs-combo-box-search-text="Wushu" data-hs-combo-box-value="">Wushu</span>
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
                            </div>
                        </div>
                        <div class="max-w-sm">
                            <!-- SearchBox -->
                            <div class="relative" data-hs-combo-box='{
    "isOpenOnFocus": true,
    "apiUrl": "http:\\localhost:8000/api/provinsi",
    "outputItemTemplate": "<div data-hs-combo-box-output-item><span class=\"flex items-center cursor-pointer py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:focus:bg-neutral-700\"><div class=\"flex items-center w-full\"><div class=\"flex items-center justify-center rounded-full bg-gray-200 size-6 overflow-hidden me-2.5\"><img class=\"flex-shrink-0\" data-hs-combo-box-output-item-attr=&apos;[{\"data\": \"provinsi\",}]&apos; /></div><div data-hs-combo-box-output-item-field=\"name\" data-hs-combo-box-search-text data-hs-combo-box-value></div></div><span class=\"hidden hs-combo-box-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span></span></div>",
  }'>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                                        <svg class="flex-shrink-0 size-4 text-gray-400 dark:text-white/60" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <path d="m21 21-4.3-4.3"></path>
                                        </svg>
                                    </div>
                                    <input class="py-3 ps-10 pe-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" type="text" placeholder="Type a name" value="" data-hs-combo-box-input="">
                                </div>

                                <!-- SearchBox Dropdown -->
                                <div class="absolute z-50 w-full bg-white border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700" style="display: none;" data-hs-combo-box-output="">
                                    <div class="max-h-72 rounded-b-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500" data-hs-combo-box-output-items-wrapper=""></div>
                                </div>
                                <!-- End SearchBox Dropdown -->
                            </div>
                            <!-- End SearchBox -->
                        </div>
                        <div class="divider">Tempat</div>
                        <!-- Form -->
                        <label for="provinsi" class="form-label">Povinsi</label>
                        <div class="relative mb-4" data-hs-combo-box="">
                            <div class="relative">
                                <input placeholder="Povinsi..." id="provinsi" name="provinsi" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="" data-hs-combo-box-input="" />
                                <div class="absolute top-1/2 end-3 -translate-y-1/2" data-hs-combo-box-toggle="">
                                    <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7 15 5 5 5-5"></path>
                                        <path d="m7 9 5-5 5 5"></path>
                                    </svg>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('provinsi')" class="mt-2" />
                            <div id="cotainter_provinsi" class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500" style="display: none" data-hs-combo-box-output="">

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

                        <script type="module">
                            $(document).ready(function() {


                                $(document).on('click', '#cotainter_provinsi [data-hs-combo-box-output-item]', function() {
                                    // Mengambil nilai teks dari opsi yang dipilih
                                    var selectedProvinsi = $(this).find('span[data-hs-combo-box-search-text]').text();

                                    // Mengatur nilai input #provinsi sesuai dengan opsi yang dipilih
                                    // $('#provinsi').change().preventDefault();
                                    $('#provinsi').val(selectedProvinsi);
                                    console.log($('#provinsi').val());
                                    $('#provinsi').attr('data-hs-combo-box-input', selectedProvinsi);
                                    // Menyembunyikan kotak opsi
                                    $('#cotainter_provinsi').hide();
                                });

                                $('#provinsi').on('input', function() {
                                    var searchValue = $(this).val();
                                    if (searchValue.length > 0) {
                                        // Lakukan pencarian ke API
                                        $.get('/api/provinsi/search/' + searchValue, function(data) {
                                            console.log(data.data);

                                            // Kosongkan konten container_provinsi sebelum menambahkan opsi baru
                                            $('#cotainter_provinsi').empty();

                                            // Jika data tidak ditemukan, tambahkan pesan bahwa tidak ada hasil
                                            if (data.data.length === 0) {
                                                $('#cotainter_provinsi').append('<div class="text-main py-2 px-4">Tidak ada hasil yang ditemukan.</div>');
                                                return; // Keluar dari fungsi karena tidak ada opsi yang perlu ditambahkan
                                            }

                                            // Tambahkan opsi berdasarkan data yang diterima dari API
                                            $.each(data.data, function(index, provinsi) {
                                                var option = $('<div class="cursor-pointer py-2 px-4 w-full text-sm text-main hover:text-white hover:bg-main rounded-lg focus:outline-none focus:opacity-75 selected" tabindex="0" data-hs-combo-box-output-item="">');
                                                option.append('<div class="flex justify-between items-center w-full">');
                                                option.find('div').append('<span data-hs-combo-box-search-text="' + provinsi.provinsi + '" data-hs-combo-box-value="' + provinsi.provinsi + '">' + provinsi.provinsi + '</span>');
                                                option.find('div').append('<span class="hidden hs-combo-box-selected:block">');
                                                option.find('span.hs-combo-box-selected').append('<svg class="flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg>');

                                                // Tambahkan opsi ke dalam container_provinsi
                                                $('#cotainter_provinsi').append(option);
                                            });
                                            // Tampilkan hasil pencarian
                                            $('#cotainter_provinsi').show();


                                            // Inisialisasi ulang elemen select
                                            // window.HSStaticMethods.autoInit(['select']);
                                        });
                                    } else {
                                        // Sembunyikan hasil pencarian jika input kosong
                                        // $('#cotainter_provinsi').hide();
                                    }
                                });

                                // // Memunculkan opsi ketika input field diklik
                                // $('#provinsi').on('click', function() {
                                //     $('[data-hs-combo-box-output]').show();
                                // });

                                // // Menyembunyikan opsi ketika klik dilakukan di luar combobox
                                // $(document).on('click', function(event) {
                                //     const $target = $(event.target);
                                //     if (!$target.closest('[data-hs-combo-box]').length) {
                                //         $('[data-hs-combo-box-output]').hide();
                                //     }
                                // });

                                // // Menangani pemilihan opsi
                                // $('[data-hs-combo-box-output]').on('click', '[data-hs-combo-box-output-item]', function() {
                                //     const selectedPerson = $(this).find('[data-hs-combo-box-search-text]').text();
                                //     $('#provinsi').val(selectedPerson);
                                //     $('[data-hs-combo-box-output]').hide();
                                // });

                                // // Event listener to close combobox options when clicking outside the combobox
                                // $(document).click(function(event) {
                                //     const $target = $(event.target);
                                //     if (!$target.closest('#cotainter_provinsi').length) {
                                //         $('#cotainter_provinsi').hide();
                                //     }
                                // });

                                // // Prevent closing options when clicking inside the combobox
                                // $('#cotainter_provinsi').click(function(event) {
                                //     event.stopPropagation();
                                // });

                            });
                        </script>




                        <!-- Form -->
                        <label for="kota" class="form-label">Kota</label>
                        <div class="relative mb-4" data-hs-combo-box=''>
                            <div class="relative">
                                <input placeholder="Kota..." id="kota" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="" data-hs-combo-box-input="" />
                                <div class="absolute top-1/2 end-3 -translate-y-1/2" data-hs-combo-box-toggle="">
                                    <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7 15 5 5 5-5"></path>
                                        <path d="m7 9 5-5 5 5"></path>
                                    </svg>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('kota')" class="mt-2" />
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
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <div class="relative mb-4" data-hs-combo-box="">
                            <div class="relative">
                                <input placeholder="Kecamatan..." id="kecamatan" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="" data-hs-combo-box-input="" />
                                <div class="absolute top-1/2 end-3 -translate-y-1/2" data-hs-combo-box-toggle="">
                                    <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7 15 5 5 5-5"></path>
                                        <path d="m7 9 5-5 5 5"></path>
                                    </svg>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('kecamatan')" class="mt-2" />
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
                        <div class="form-group">
                            <label for="desa" class="form-label">Desa</label>
                            <input placeholder="Nama Perguruan..." id="desa" name="desa" class="form-default" type="text" value="" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('desa')" class="mt-2" />
                        </div>
                        <!-- Form End -->

                        <!-- Form -->
                        <div class="form-group">
                            <label for="namajalan" class="form-label">Nama Jalan</label>
                            <input placeholder="Nama Perguruan..." id="namajalan" name="nama_jalan" class="form-default" type="text" value="" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('nama_jalan')" class="mt-2" />
                        </div>
                        <!-- Form End -->

                        <hr class="mb-3">
                        <div class="flex justify-end">
                            <button type="button" class="btn" data-hs-overlay="#submit-alert">Simpan Perubahan</button>
                        </div>
                </form>
            </div>
            <!-- modal -->
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
                            <button onclick="$('#form_store_perguruan').submit()" type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->


</x-app-layout>