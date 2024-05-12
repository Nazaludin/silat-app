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
        <section id="profilView" class="mt-10 bg-white">
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
                                    <div class="flex justify-center">
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
                                <div class="flex justify-center">
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

    </div>
    </div>

    <script type="module">
        $(document).ready(function() {

            if ($('#content_empty').length > 0) {
                $('#content').addClass('hidden');
            }


        });
    </script>
</x-app-layout>