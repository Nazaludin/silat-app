<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
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
                <p class="text-sm text-gray-700">
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
            <p class="font-bold text-3xl text-center">Data perguruan masih kosong!</p>

            <a href="{{ route('adminpg.perguruan.add') }}" class="btn-main">
                Isi Profil Perguruan
            </a>
        </div>
        <img class="w-[30rem] object-contain" src="{{ url('/view-image/404.svg') }}/" alt="">
    </div>
    @endif

    <div id="content">
        <div class="flex w-full justify-end p-5">
            <a href="{{ route('adminpg.perguruan.edit') }}" class="btn-main">
                Edit Data
            </a>
        </div>
        <section id="profilView" class="">
            <div class="flex flex-col lg:flex-row w-full">
                <div class="static lg:absolute flex flex-col w-full lg:w-[15rem] text-left z-[2]">
                    <div class="p-5 shadow-lg rounded-2xl w-full flex justify-center bg-white backdrop-blur-3xl mb-3">
                        <img class="lg:w-full w-[10rem]  object-contain" src="{{ url('/view-image/'.$perguruan->nama_file_logo) }}" alt="">
                    </div>
                    <div class="p-5 shadow-lg rounded-2xl w-full bg-white backdrop-blur-3xl">
                        <div class="mb-3">
                            <div class="form-label">
                                Tahun Berdiri
                            </div>
                            <p>{{$perguruan->tahun_berdiri}}</p>
                        </div>
                        <div class="mb-3">
                            <div class="form-label">
                                Aliran
                            </div>
                            <p>{{$perguruan->aliran}}</p>
                        </div>
                        <div class="mb-3">
                            <div class="form-label">
                                Tempat
                            </div>
                            <p>{{$perguruan->nama_jalan . ' ' . $perguruan->desa. ', ' . $perguruan->kecamatan.', ' . $perguruan->kabupoaten.', ' . $perguruan->provinsi}}</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full lg:ml-[17rem] p-5 text-justify">
                    <div class="my-5">
                        <h1 class="font-bold text-3xl text-center lg:text-left">
                            {{$perguruan->nama}}
                        </h1>
                    </div>
                    <div class="mb-3">
                        <div class="form-label">
                            Arti Nama
                        </div>
                        <p>{{$perguruan->arti_nama}}</p>
                    </div>
                    <div class="mb-3">
                        <div class="form-label">
                            Motto
                        </div>
                        <p>
                            {{$perguruan->motto}}
                        </p>
                    </div>
                    <div class="mb-3">
                        <div class="form-label">
                            Makna Logo
                        </div>
                        <p>
                            {{$perguruan->makna_logo}}
                        </p>
                    </div>
                    <div class="mb-3">
                        <div class="form-label">
                            Deskripsi
                        </div>
                        <p>
                            {{$perguruan->deskripsi}}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="tokohView" class="mt-10 will-fadeIn reveal">
            <div class="flex flex-col lg:flex-row w-full">
                <div class="flex flex-col w-full  p-1 lg:p-5 text-justify">
                    <div class="my-5">
                        <h1 class="font-bold text-3xl text-center">
                            Tokoh
                        </h1>
                        @if(count($guru_besar) > 0)
                        <div class="divider">Guru Besar</div>
                        <div class="flex flex-wrap justify-center">
                            @foreach($guru_besar as $guru)
                            <!-- tokoh card -->
                            <div class="w-full md:w-[20rem] flex flex-col items-center gap-5 p-5 m-4 bg-white rounded-xl shadow-md transition-all duration-200 hover:scale-95 hover:shadow-2xl">
                                <div class="w-[10rem] rounded-full overflow-hidden ">
                                    <img src="{{ url('/view-image/') . '/' . $guru['nama_file'] }}" alt="">
                                </div>
                                <div class="flex flex-col">
                                    <div class="form-label text-center"> {{ $guru['nama'] }}</div>
                                    <div class="font-semibold text-xs uppercase mb-5 text-center text-slate-600"> {{ $guru['tipe'] }}</div>
                                    <p class="mb-5 line-clamp-3">
                                        {!! $guru['deskripsi'] !!}
                                    </p>
                                    <div class="flex justify-center" data-hs-overlay="#modal-tokoh" data-id-tokoh="{{ $guru['id_tokoh'] }}">
                                        <div class="btn-main flex gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                                                <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                                                <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                                            </svg>
                                            Lihat
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- tokoh card -->
                            @endforeach
                        </div>
                        @endif
                    </div>
                    @if(count($tokoh_lain) > 0)
                    <div class="divider">Tokoh Lain</div>
                    <div class="flex flex-wrap justify-center">

                        @foreach($tokoh_lain as $tokoh)
                        <!-- tokoh card -->
                        <div class="w-full md:w-[15rem] flex flex-col items-center gap-5 p-5 m-4 bg-white rounded-3xl shadow-md transition-all duration-200 hover:scale-95 hover:shadow-2xl">
                            <div class="w-[5rem] rounded-full overflow-hidden ">
                                <img src="{{ url('/view-image/') . '/' . $tokoh['nama_file'] }}" alt="">
                            </div>
                            <div class="flex flex-col">
                                <div class="form-label text-center"> {{ $tokoh['nama'] }}</div>
                                <div class="font-semibold text-xs uppercase mb-5 text-center text-slate-600"> {{ $tokoh['tipe'] }}</div>
                                <p class="mb-5 line-clamp-3 text-sm">
                                    {!! $tokoh['deskripsi'] !!}
                                </p>
                                <div class="flex justify-center" data-hs-overlay="#modal-tokoh" data-id-tokoh="{{ $tokoh['id_tokoh'] }}">
                                    <div class="btn-main flex gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 3a3 3 0 0 1 3 3v1a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-1a3 3 0 0 1 3 -3z" />
                                            <path d="M8 12a3 3 0 0 1 3 3v3a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-3a3 3 0 0 1 3 -3z" />
                                            <path d="M18 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-2a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3z" />
                                        </svg>
                                        Lihat
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tokoh card -->
                        @endforeach


                    </div>
                    @endif
                </div>

            </div>

        </section>
        @if($perguruan->sejarah !== null && $perguruan->sejarah !== '')
        <section id="sejarahView" class="mt-10 reveal h-dvh">
            <div class="flex flex-col lg:flex-row w-full">
                <div class="flex flex-col justify-center w-full  p-5 text-justify">
                    <div class="my-5">
                        <h1 class="font-bold text-3xl text-center">
                            Sejarah
                        </h1>
                    </div>
                    <p>
                        {!!$perguruan->sejarah!!}
                    </p>


                </div>
            </div>

        </section>
        @endif
        <!-- modal -->
        <div id="modal-tokoh" class="hs-overlay hidden size-full fixed top-0 start-0 z-[999999] overflow-x-hidden overflow-y-auto pointer-events-none [--overlay-backdrop:static]" data-hs-overlay-keyboard="false">
            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all w-full sm:max-w-[70rem] sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] flex items-center justify-center">
                <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                    <div class="flex justify-between items-center py-3 px-4 border-b">

                        <button type="button" class=" group flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-main text-gray-800 hover:bg-main disabled:opacity-50 disabled:pointer-events-none transition duration-200 ease-in-out" data-hs-overlay="#modal-tokoh">
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
                                <div class="w-[10rem] rounded-full overflow-hidden ">
                                    <img id="tokoh_foto" src="" alt="">
                                </div>
                                <div id="tokoh_nama" class="form-label text-center"></div>
                                <div id="tokoh_tipe" class="font-semibold text-xs uppercase mb-5 text-center text-slate-600">/div>
                                    <p id="tokoh_deskripsi" class="mb-5 text-sm max-w-[35rem] text-justify"> </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->
        </div>
    </div>

    <script type="module">
        $(document).ready(function() {

            if ($('#content_empty').length > 0) {
                $('#content').addClass('hidden');
            }

            $('[data-hs-overlay="#modal-tokoh"]').on('click', function() {
                fillModal($(this).data('id-tokoh'));
            });

            function fillModal(id) {
                var api_url = '/api/adminpg/tokoh/' + id;

                $.get(api_url, function(data) {
                    $('#tokoh_foto').attr('src', "{{ url('/view-image/' )}}" + "/" + data.nama_file);
                    $('#tokoh_nama').html(data.nama);
                    $('#tokoh_tipe').html(data.tipe);
                    $('#tokoh_deskripsi').html(data.deskripsi);
                    console.log(data);
                });
            }
        });
    </script>
</x-app-layout>