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
                    <!-- upload Gambar -->
                    <div class="form-group">
                        <label for="artinama" class="form-label">Unggah Gambar</label>
                        <div class="w-full  mb-2 form-default border-[1px]">
                            <form>
                                <label class="block">
                                    <span class="sr-only">Choose profile photo</span>
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
                    </div>

                    <!-- form sejarah -->
                    <div class="form-group">
                        <form action="" method="get">
                            <div class="mb-3">
                                <label for="sejarah" class="form-label">Tuliskan Sejarah Perguruan Silat</label>
                                <textarea id="sejarah" class="tinyMce" name="user-bio"></textarea>
                            </div>
                        </form>
                    </div>
                    <!-- form sejarah -->
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