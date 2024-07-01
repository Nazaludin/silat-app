<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sejarah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">

                @if (isset($success))
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
                                {{ $success }}
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
                            <p class="message-error text-sm text-gray-700">
                                {{ $error }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

                @if (!$exist)
                <div id="content_empty" class="flex flex-wrap items-center justify-center h-full">
                    <div class="flex flex-col gap-5 text-center justify-center items-center md:items-start md:text-left">
                        <p class="font-bold text-3xl text-center">Data sejarah masih kosong!</p>

                        <button id="btn_trigger_sejarah" class="btn-main">
                            Isi Sejarah
                        </button>
                    </div>
                    <img class="w-[30rem] object-contain" src="{{ url('/view-image/404.svg') }}/" alt="">
                </div>
                @endif

                <form id="form_store_sejarah" action="{{ route('adminpg.sejarah.store') }}" method="POST">
                    @csrf

                    <div class="p-6 text-gray-900">
                        <!-- form sejarah -->
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="sejarah" class="form-label mb-3">Tuliskan Sejarah Perguruan Silat</label>
                                <textarea id="sejarah" class="tinyMce" name="sejarah">{{ old('sejarah') ? old('sejarah') : $sejarah }}</textarea>
                                <x-input-error :messages="$errors->get('sejarah')" class="mt-2" />

                            </div>
                        </div>
                        <!-- form sejarah -->

                        <div class="flex justify-end">
                            <button type="button" class="btn bg-green-600 border-green-600 hover:bg-transparent hover:text-green-600" data-hs-overlay="#submit-alert">Simpan Perubahan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- modal -->
        <div id="submit-alert" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                    <div class="flex justify-between items-center py-3 px-4 border-b">
                        <h3 class="font-bold text-gray-800">
                            Simpan Sejarah?
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
                            Pastikan input sudah benar karena data akan berubah sesuai dengan input yang telah dimasukkan!
                        </p>
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                        <button type="button" class="hs-dropup-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#submit-alert">
                            Tutup
                        </button>
                        <button onclick="$('#form_store_sejarah').submit()" type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <script type="module">
            $(document).ready(function() {
                if ($('#btn_trigger_sejarah').length > 0 && $('.message-error').length == 0) {

                    $('#form_store_sejarah').addClass('hidden');
                    $('#btn_trigger_sejarah').on('click', function() {
                        showForm();
                    });
                    console.log('Yess')

                } else {
                    console.log('not')
                }
                if ($('.message-error').length > 0) {
                    $('#content_empty').addClass('hidden');
                }

                function showForm() {
                    $('#form_store_sejarah').removeClass('hidden');
                    $('#content_empty').addClass('hidden');
                }
            });
        </script>

        <script>
            // .. After imports init TinyMCE ..
            window.addEventListener('DOMContentLoaded', () => {
                tinymce.init({
                        selector: 'textarea',
                        skin: 'oxide',
                        content_css: 'default',
                        plugins: 'image code',
                        toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | link image | code',
                        file_picker_types: 'image',
                        images_upload_url: '/upload-image',
                        automatic_uploads: true,
                        object_resizing: true, // Aktifkan resize objek, termasuk gambar
                        images_file_types: 'jpg,png',
                        // image_advtab: true,
                        images_upload_handler: function(blobInfo) {
                            return new Promise((resolve, reject) => {
                                let xhr = new XMLHttpRequest();
                                let formData = new FormData();

                                xhr.withCredentials = false;
                                xhr.open('POST', '/upload-image');
                                xhr.setRequestHeader('X-CSRF-Token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                                xhr.upload.onprogress = (e) => {
                                    console.log('Upload progress:', (e.loaded / e.total) * 100);
                                };

                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                        try {
                                            let json = JSON.parse(xhr.responseText);
                                            if (json && typeof json.location === 'string') {
                                                resolve(json.location);
                                            } else {
                                                reject('Invalid JSON response');
                                            }
                                        } catch (e) {
                                            reject('Error parsing JSON response');
                                        }
                                    } else {
                                        reject('HTTP Error: ' + xhr.status);
                                    }
                                };

                                xhr.onerror = function() {
                                    reject('Network error');
                                };

                                formData.append('file', blobInfo.blob(), blobInfo.filename());
                                xhr.send(formData);
                            });
                        },
                        file_picker_callback: function(cb, value, meta) {
                            const input = document.createElement('input');
                            input.setAttribute('type', 'file');
                            input.setAttribute('accept', 'image/*');

                            input.addEventListener('change', function(e) {
                                const file = e.target.files[0];

                                const reader = new FileReader();
                                reader.onload = function() {
                                    const id = 'blobid' + (new Date()).getTime();
                                    const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                                    const base64 = reader.result.split(',')[1];
                                    const blobInfo = blobCache.create(id, file, base64);
                                    blobCache.add(blobInfo);

                                    cb(blobInfo.blobUri(), {
                                        title: file.name
                                    });
                                };

                                reader.readAsDataURL(file);
                            });

                            input.click();
                        }
                    })
                    .then(() => {
                        console.log('TinyMCE initialized successfully');
                    }).catch(error => {
                        console.error('Error initializing TinyMCE:', error);
                    });
            });
        </script>
</x-app-layout>