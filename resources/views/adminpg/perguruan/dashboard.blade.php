<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
        <section id="profilView" class="mt-10 bg-white">
            <div class="flex flex-col lg:flex-row w-full">
                <div class="static lg:absolute flex flex-col w-full lg:w-[15rem] text-justify z-[2]">
                    <div class="p-5 shadow-lg rounded-2xl w-full flex justify-center bg-white backdrop-blur-3xl mb-3">
                        <img class="lg:w-full w-[10rem]  object-contain" src="{{ url('/view-image/logoDummy.png') }}/" alt="">
                    </div>
                    <div class="p-5 shadow-lg rounded-2xl w-full bg-white backdrop-blur-3xl">
                        <div class="mb-3">
                            <div class="form-label">
                                Tahun Berdiri
                            </div>
                            <p>2021</p>
                        </div>
                        <div class="mb-3">
                            <div class="form-label">
                                Aliran
                            </div>
                            <p>Wushu</p>
                        </div>
                        <div class="mb-3">
                            <div class="form-label">
                                Tempat
                            </div>
                            <p>Jl. Sultan Malikul Saleh, Lhong Raya Banda Aceh</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full lg:ml-[17rem] p-5 text-justify">
                    <div class="my-5">
                        <h1 class="font-bold text-3xl text-center lg:text-left">
                            Perguruan Silat Padepokan Sleman
                        </h1>
                    </div>
                    <div class="mb-3">
                        <div class="form-label">
                            Arti Nama
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquam voluptatem tenetur eum omnis ducimus nemo incidunt magni nihil! Libero, assumenda! Architecto, sunt rerum, optio numquam necessitatibus maiores corporis cumque quas voluptatem voluptatibus voluptatum repudiandae, iusto placeat illo deserunt eius ut ad nam a! Similique repellendus iusto dolor nihil blanditiis.</p>
                    </div>
                    <div class="mb-3">
                        <div class="form-label">
                            Motto
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, ad!
                        </p>
                    </div>
                    <div class="mb-3">
                        <div class="form-label">
                            Makna Logo
                        </div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, minima quidem soluta aspernatur ullam dignissimos vel iure distinctio dolorum tempora, quod expedita id ut sapiente quia odit culpa aliquam quam repellendus! Nemo deleniti placeat eius, harum commodi amet similique nam vero voluptatum molestiae, labore quia inventore voluptas quibusdam hic nostrum?
                        </p>
                    </div>
                    <div class="mb-3">
                        <div class="form-label">
                            Deskripsi
                        </div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro aut tempora nemo consequatur in dignissimos similique doloribus. Recusandae pariatur totam voluptas modi molestiae quaerat laboriosam, et autem debitis velit. Ratione magni quia tenetur explicabo quisquam autem commodi quos minima laboriosam aspernatur, dolores animi iusto illo debitis laudantium vero officiis nobis nihil aperiam eligendi natus exercitationem, quibusdam id molestiae? Ad quis ex quos distinctio veniam corporis itaque? Tempore nemo et autem similique doloribus, magnam hic quidem quas atque illo iure ipsa asperiores aliquid nostrum dolore praesentium, repellendus maiores qui. Eum rem placeat tenetur quibusdam accusantium, saepe rerum suscipit assumenda unde architecto!
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
                        <div class="divider">Guru Besar</div>
                        <div class="flex flex-wrap justify-center">
                            <!-- tokoh card -->
                            <div class="w-full md:w-[20rem] flex flex-col items-center gap-5 p-5 m-4 bg-white rounded-xl shadow-md transition-all duration-200 hover:scale-95 hover:shadow-2xl">
                                <div class="w-[10rem] rounded-full overflow-hidden ">
                                    <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                                </div>
                                <div class="flex flex-col">
                                    <div class="form-label text-center">Triandi Aprilio</div>
                                    <div class="font-semibold text-xs uppercase mb-5 text-center text-slate-600"> Guru Besar</div>
                                    <p class="mb-5 line-clamp-3">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id doloribus maiores, quae accusantium cupiditate ab incidunt eius nostrum consectetur labore minima quis aliquam, modi quo ipsam? Voluptatum sint sapiente quae, labore maxime veniam numquam beatae libero voluptates placeat suscipit optio similique magnam amet fugit inventore eos officiis porro quo blanditiis?
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
                        </div>
                    </div>
                    <div class="divider">Guru Kecil</div>
                    <div class="flex flex-wrap justify-center">

                        <!-- tokoh card -->
                        <div class="w-full md:w-[15rem] flex flex-col items-center gap-5 p-5 m-4 bg-white rounded-3xl shadow-md transition-all duration-200 hover:scale-95 hover:shadow-2xl">
                            <div class="w-[5rem] rounded-full overflow-hidden ">
                                <img src="{{ asset('img/tokoh.jpg')}}" alt="">
                            </div>
                            <div class="flex flex-col">
                                <div class="form-label text-center">Triandi Aprilio</div>
                                <div class="font-semibold text-xs uppercase mb-5 text-center text-slate-600"> Guru Kecil</div>
                                <p class="mb-5 line-clamp-3 text-sm">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id doloribus maiores, quae accusantium cupiditate ab incidunt eius nostrum consectetur labore minima quis aliquam, modi quo ipsam? Voluptatum sint sapiente quae, labore maxime veniam numquam beatae libero voluptates placeat suscipit optio similique magnam amet fugit inventore eos officiis porro quo blanditiis?
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


                    </div>
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
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fugiat dignissimos, impedit rerum necessitatibus ducimus ipsum nesciunt ad saepe consequuntur laudantium minus nostrum nisi quaerat iste facilis aliquam non soluta dolorum nobis in eos quia. Veniam, optio dolores, nam dolore nemo provident at aut tenetur harum labore consequatur? Molestias molestiae recusandae quos, necessitatibus eius, fugiat illo sed dolorum nesciunt id eveniet architecto vero rem voluptatibus voluptatem alias aspernatur, magnam iste ex? Architecto dolores officiis cupiditate numquam eveniet ut autem ab aspernatur quia beatae delectus explicabo, eius illo odit consequatur harum, sapiente sequi at, ratione fugit perspiciatis minima? Fugiat, aspernatur perferendis blanditiis alias corrupti eos sapiente porro dignissimos reiciendis iusto accusamus ut tempore vitae animi? Perferendis unde autem asperiores labore mollitia cupiditate exercitationem. Corrupti, blanditiis eaque perspiciatis cumque error esse non nostrum dolores iste quae, molestiae alias delectus ratione? Neque saepe hic amet sunt, modi explicabo ab eum autem tempora, accusantium, tenetur sequi doloremque nemo assumenda molestias debitis laudantium nam itaque. Qui autem doloribus corporis? Quidem adipisci accusantium itaque maiores atque libero error eaque est quam minima placeat aspernatur tempore eius, fugit doloribus repudiandae odio recusandae sint doloremque vero necessitatibus veritatis ut similique? Repellendus obcaecati temporibus laboriosam suscipit saepe odit nulla optio fugit quidem earum consequatur illo, voluptatum harum inventore totam, numquam, placeat laborum fuga quis accusantium molestias reiciendis laudantium voluptatibus reprehenderit? Architecto maiores eveniet vel iste debitis ipsa unde quis sit tenetur eligendi neque, cum sed quas saepe quod labore! Perferendis consequuntur, voluptas aliquam tempora perspiciatis repellat eaque a sint quam eum voluptate reprehenderit incidunt. Ducimus eius nobis dolores, voluptatum debitis magni. Quos in officia ut beatae accusantium tempore consectetur voluptates, fuga unde ab quam tempora molestias commodi amet voluptate adipisci quis iusto culpa? Libero ea dolores quas omnis consequatur magnam voluptatum aperiam perferendis ad, facilis, pariatur ullam non accusamus quia excepturi rerum rem accusantium suscipit, temporibus recusandae voluptatem asperiores. Ab doloremque asperiores dignissimos nihil, expedita nostrum aperiam exercitationem adipisci explicabo, praesentium quibusdam, debitis non quo quam quas perferendis reiciendis id cumque accusantium itaque dolore. Cum, soluta id aliquam veritatis labore sit eligendi quam error itaque quasi perspiciatis, ea fugiat laboriosam, in sunt adipisci totam. Inventore minima veniam perspiciatis rem error veritatis quas aliquam. Delectus error, asperiores exercitationem nisi, sed odit adipisci recusandae quam odio harum ipsum ducimus modi nemo porro pariatur, amet totam dolorum quae. Ea aut ad saepe inventore sapiente blanditiis laborum repudiandae natus cum nulla modi eaque debitis, deserunt, neque magnam esse animi atque enim culpa, nostrum maxime. Qui ducimus dolorum asperiores doloribus ex! Esse perspiciatis corrupti magnam ratione illum aut deleniti hic, alias cupiditate quo harum architecto rem error quisquam repellat voluptatibus enim quaerat adipisci dolore optio? Sed error aperiam sunt praesentium, nostrum rerum, nesciunt voluptatibus perferendis, labore minima soluta neque facilis! Explicabo molestiae, sit numquam expedita, eveniet quisquam eligendi, quibusdam dicta nihil dolores pariatur quaerat totam iste cumque! Voluptas, a! Corporis, quaerat eum voluptatum nam temporibus tempora optio aut consequuntur delectus dicta dolorum adipisci, ipsum eveniet, explicabo distinctio perferendis velit possimus repellendus non facilis nesciunt?
                    </p>


                </div>
            </div>

        </section>


        </div>





    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-1">
            <div class="bg-white shadow-sm sm:rounded-lg">

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
                                Your purchase has been declined.
                            </p>
                        </div>
                    </div>
                </div>

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
                                Your purchase has been declined.
                            </p>
                        </div>
                    </div>
                </div>
                <form id="form_store_perguruan" action="{{ route('perguruan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 text-gray-900">
                        <div class="form-group">
                            <label for="namaperguruan" class="form-label">Nama Perguruan</label>
                            <input placeholder="Nama Perguruan..." id="namaperguruan" name="nama" class="form-default" type="text" value="{{old('nama')}}" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="artinama" class="form-label">Arti Nama</label>
                            <input placeholder="Arti Nama..." id="artinama" name="arti_nama" class="form-default" type="text" value="{{old('arti_nama')}}" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('arti_nama')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="motto" class="form-label">Motto</label>
                            <input placeholder="Motto..." id="motto" name="motto" class="form-default" type="text" value="{{old('motto')}}" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('motto')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="sejarah" class="form-label">Sejarah</label>
                            <input placeholder="Sejarah..." id="sejarah" name="sejarah" class="form-default" type="text" value="{{old('sejarah')}}" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('sejarah')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input placeholder="Deskripsi..." id="deskripsi" name="deskripsi" class="form-default" type="text" value="{{old('deskripsi')}}" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                        </div>

                        <label for="logo" class="form-label">Unggah Logo</label>
                        <div class="w-full  mb-2 form-default border-[1px]">
                            <label class="block">
                                <span class="sr-only">Choose profile photo</span>
                                <input id="logo" name="logo" type="file" class="block w-full text-sm text-gray-500
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
                            <input placeholder="Makna Logo..." id="maknalogo" name="makna_logo" class="form-default" type="text" value="{{old('makna_logo')}}" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('makna_logo')" class="mt-2" />
                        </div>
                        <div class="flex gap-5">
                            <div class="form-group w-1/2">
                                <label for="tahunberdiri" class="form-label">Tahun Berdiri</label>
                                <input placeholder="Tahun Berdiri..." id="tahunberdiri" name="tahun_berdiri" class="form-default" type="number" value="{{old('tahun_berdiri')}}" data-hs-combo-box-input="" />
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
                                    <x-input-error :messages="$errors->get('aliran')" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div class="divider">Tempat</div>
                        <!-- Form -->
                        <label for="provinsi" class="form-label">Povinsi</label>
                        <div id="combobox-provinsi" class="relative mb-4" data-hs-combo-box="">
                            <div class="relative">
                                <input placeholder="Povinsi..." id="provinsi" name="provinsi" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="{{old('provinsi')}}" data-hs-combo-box-input="" />
                                <div class="absolute top-1/2 end-3 -translate-y-1/2" data-hs-combo-box-toggle="">
                                    <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7 15 5 5 5-5"></path>
                                        <path d="m7 9 5-5 5 5"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="container_provinsi" class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500" style="display: none" data-hs-combo-box-output="">

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
                            <x-input-error :messages="$errors->get('provinsi')" class="mt-2" />
                        </div>
                        <!-- Form End -->


                        <!-- Form -->
                        <label for="kabupaten" class="form-label">Kota</label>
                        <div id="combobox-kabupaten" class="relative mb-4" data-hs-combo-box=''>
                            <div class="relative">
                                <input placeholder="Kota..." id="kabupaten" name="kabupaten" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="{{old('kabupaten')}}" data-hs-combo-box-input="" />
                                <div class="absolute top-1/2 end-3 -translate-y-1/2" data-hs-combo-box-toggle="">
                                    <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7 15 5 5 5-5"></path>
                                        <path d="m7 9 5-5 5 5"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="container_kabupaten" class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500" style="display: none" data-hs-combo-box-output="">
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
                            <x-input-error :messages="$errors->get('kota')" class="mt-2" />
                        </div>
                        <!-- Form End -->

                        <!-- Form -->
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <div id="combobox-kecamatan" class="relative mb-4" data-hs-combo-box="">
                            <div class="relative">
                                <input placeholder="Kecamatan..." id="kecamatan" name="kecamatan" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" type="text" value="{{old('kecamatan')}}" data-hs-combo-box-input="" />
                                <div class="absolute top-1/2 end-3 -translate-y-1/2" data-hs-combo-box-toggle="">
                                    <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7 15 5 5 5-5"></path>
                                        <path d="m7 9 5-5 5 5"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="container_kecamatan" class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500" style="display: none" data-hs-combo-box-output="">
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
                                <!-- select -->
                            </div>
                            <x-input-error :messages="$errors->get('kecamatan')" class="mt-2" />
                        </div>
                        <!-- Form End -->
                        <script type="module">
                            $(document).ready(function() {

                                var kode_provinsi = null;
                                var kode_kabupaten = null;
                                var kode_kecamatan = null;

                                if ($('#provinsi').val()) {
                                    var searchValue = $('#provinsi').val(); // Jika ini adalah nilai yang ingin Anda gunakan
                                    $.get('/api/provinsi/search/' + searchValue, function(data) {
                                        console.log(data.data, data.data[0].kode_provinsi);
                                        kode_provinsi = data.data[0].kode_provinsi; // Menggunakan data yang diterima dari API
                                        console.log("INNNN");
                                    });
                                }




                                $('#provinsi').on('input', function() {
                                    var searchValue = $(this).val();
                                    if (searchValue.length > 0) {
                                        // Lakukan pencarian ke API
                                        $.get('/api/provinsi/search/' + searchValue, function(data) {
                                            console.log(data.data);

                                            // Kosongkan konten container_provinsi sebelum menambahkan opsi baru
                                            $('#container_provinsi').empty();

                                            // Jika data tidak ditemukan, tambahkan pesan bahwa tidak ada hasil
                                            if (data.data.length === 0) {
                                                $('#container_provinsi').append('<div class="text-main py-2 px-4">Tidak ada hasil yang ditemukan.</div>');
                                                return; // Keluar dari fungsi karena tidak ada opsi yang perlu ditambahkan
                                            }

                                            // Tambahkan opsi berdasarkan data yang diterima dari API
                                            $.each(data.data, function(index, provinsi) {
                                                var option = $('<div class="cursor-pointer py-2 px-4 w-full text-sm text-main hover:text-white hover:bg-main rounded-lg focus:outline-none focus:opacity-75" tabindex="0" data-hs-combo-box-output-item="">');
                                                option.append('<div class="flex justify-between items-center w-full">');
                                                option.find('div').append('<span data-hs-combo-box-search-kode="' + provinsi.kode_provinsi + '" data-hs-combo-box-search-text="' + provinsi.provinsi + '" data-hs-combo-box-value="' + provinsi.provinsi + '">' + provinsi.provinsi + '</span>');
                                                option.find('div').append('<span class="hidden hs-combo-box-selected:hide">');
                                                option.find('span.hs-combo-box-selected').append('<svg class="flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg>');

                                                // Tambahkan opsi ke dalam container_provinsi
                                                $('#container_provinsi').append(option);
                                            });
                                            // Tampilkan hasil pencarian
                                            // $('#container_provinsi').show();
                                        });
                                    } else {
                                        // Sembunyikan hasil pencarian jika input kosong
                                        $('#container_provinsi').hide();
                                    }
                                });

                                $('#kabupaten').on('input', function() {
                                    var searchValue = $(this).val();
                                    if (searchValue.length > 0) {
                                        // Lakukan pencarian ke API
                                        if (null != kode_provinsi) {

                                            $.get('/api/kabupaten/search/' + kode_provinsi + '/' + searchValue, function(data) {
                                                console.log(data.data);

                                                // Kosongkan konten container_provinsi sebelum menambahkan opsi baru
                                                $('#container_kabupaten').empty();

                                                // Jika data tidak ditemukan, tambahkan pesan bahwa tidak ada hasil
                                                if (data.data.length === 0) {
                                                    $('#container_kabupaten').append('<div class="text-main py-2 px-4">Tidak ada hasil yang ditemukan.</div>');
                                                    return; // Keluar dari fungsi karena tidak ada opsi yang perlu ditambahkan
                                                }

                                                // Tambahkan opsi berdasarkan data yang diterima dari API
                                                $.each(data.data, function(index, kabupaten) {
                                                    var option = $('<div class="cursor-pointer py-2 px-4 w-full text-sm text-main hover:text-white hover:bg-main rounded-lg focus:outline-none focus:opacity-75 selected" tabindex="0" data-hs-combo-box-output-item="">');
                                                    option.append('<div class="flex justify-between items-center w-full">');
                                                    option.find('div').append('<span data-hs-combo-box-search-kode="' + kabupaten.kode_kabupaten + '" data-hs-combo-box-search-text="' + kabupaten.kabupaten + '" data-hs-combo-box-value="' + kabupaten.kabupaten + '">' + kabupaten.kabupaten + '</span>');
                                                    option.find('div').append('<span class="hidden hs-combo-box-selected:block">');
                                                    option.find('span.hs-combo-box-selected').append('<svg class="flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg>');

                                                    // Tambahkan opsi ke dalam container_provinsi
                                                    $('#container_kabupaten').append(option);
                                                });
                                                // Tampilkan hasil pencarian
                                                $('#container_kabupaten').show();
                                            });
                                        }
                                    } else {
                                        // Sembunyikan hasil pencarian jika input kosong
                                        $('#container_kabupaten').hide();
                                    }
                                });
                                $('#kecamatan').on('input', function() {
                                    var searchValue = $(this).val();
                                    if (searchValue.length > 0) {
                                        // Lakukan pencarian ke API
                                        if ((null != kode_provinsi) && (null != kode_kabupaten)) {

                                            $.get('/api/kecamatan/search/' + kode_provinsi + '/' + kode_kabupaten + '/' + searchValue, function(data) {
                                                console.log(data.data);

                                                // Kosongkan konten container_provinsi sebelum menambahkan opsi baru
                                                $('#container_kecamatan').empty();

                                                // Jika data tidak ditemukan, tambahkan pesan bahwa tidak ada hasil
                                                if (data.data.length === 0) {
                                                    $('#container_kecamatan').append('<div class="text-main py-2 px-4">Tidak ada hasil yang ditemukan.</div>');
                                                    return; // Keluar dari fungsi karena tidak ada opsi yang perlu ditambahkan
                                                }

                                                // Tambahkan opsi berdasarkan data yang diterima dari API
                                                $.each(data.data, function(index, kecamatan) {
                                                    var option = $('<div class="cursor-pointer py-2 px-4 w-full text-sm text-main hover:text-white hover:bg-main rounded-lg focus:outline-none focus:opacity-75 selected" tabindex="0" data-hs-combo-box-output-item="">');
                                                    option.append('<div class="flex justify-between items-center w-full">');
                                                    option.find('div').append('<span data-hs-combo-box-search-kode="' + kecamatan.kode_kecamatan + '" data-hs-combo-box-search-text="' + kecamatan.kecamatan + '" data-hs-combo-box-value="' + kecamatan.kecamatan + '">' + kecamatan.kecamatan + '</span>');
                                                    option.find('div').append('<span class="hidden hs-combo-box-selected:block">');
                                                    option.find('span.hs-combo-box-selected').append('<svg class="flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg>');

                                                    // Tambahkan opsi ke dalam container_provinsi
                                                    $('#container_kecamatan').append(option);
                                                });
                                                // Tampilkan hasil pencarian
                                                $('#container_kecamatan').show();
                                            });
                                        }
                                    } else {
                                        // Sembunyikan hasil pencarian jika input kosong
                                        $('#container_kecamatan').hide();
                                    }
                                });

                                $(document).on('click', '#container_provinsi [data-hs-combo-box-output-item]', function() {
                                    $('#combobox-provinsi').removeClass('active');
                                    // Mengambil nilai teks dari opsi yang dipilih
                                    var selectedProvinsi = $(this).find('span[data-hs-combo-box-search-text]').text();
                                    var selectedKodeProvinsi = $(this).find('span[data-hs-combo-box-search-kode]').attr('data-hs-combo-box-search-kode');

                                    // Mengatur nilai input #provinsi sesuai dengan opsi yang dipilih
                                    $('#provinsi').val(selectedProvinsi);
                                    $('#provinsi').attr('value', selectedProvinsi);
                                    kode_provinsi = selectedKodeProvinsi;
                                    $('#provinsi').val(selectedProvinsi);
                                    setTimeout(function() {
                                        $('#provinsi').val(selectedProvinsi);
                                    }, 500); // 1000 milidetik (1 detik) delay


                                });
                                $(document).on('click', '#container_kabupaten [data-hs-combo-box-output-item]', function() {
                                    $('#combobox-kabupaten').removeClass('active');

                                    // Mengambil nilai teks dari opsi yang dipilih
                                    var selectedKabupaten = $(this).find('span[data-hs-combo-box-search-text]').text();
                                    var selectedKodeKabupaten = $(this).find('span[data-hs-combo-box-search-kode]').attr('data-hs-combo-box-search-kode');

                                    // Mengatur nilai input #provinsi sesuai dengan opsi yang dipilih
                                    $('#kabupaten').val(selectedKabupaten);
                                    kode_kabupaten = selectedKodeKabupaten;
                                    setTimeout(function() {
                                        $('#kabupaten').val(selectedKabupaten);
                                    }, 500); // 1000 milidetik (1 detik) delay
                                });
                                $(document).on('click', '#container_kecamatan [data-hs-combo-box-output-item]', function() {
                                    $('#combobox-kecamatan').removeClass('active');

                                    // Mengambil nilai teks dari opsi yang dipilih
                                    var selectedKecamatan = $(this).find('span[data-hs-combo-box-search-text]').text();
                                    var selectedKodeKecamatan = $(this).find('span[data-hs-combo-box-search-kode]').attr('data-hs-combo-box-search-kode');

                                    // Mengatur nilai input #provinsi sesuai dengan opsi yang dipilih
                                    $('#kecamatan').val(selectedKecamatan);
                                    kode_kecamatan = selectedKodeKecamatan;
                                    $('#kecamatan').val(selectedKecamatan);
                                    setTimeout(function() {
                                        $('#kecamatan').val(selectedKecamatan);
                                    }, 500); // 1000 milidetik (1 detik) delay
                                });

                            });
                        </script>




                        <!-- Form End -->


                        <!-- Form -->
                        <div class="form-group">
                            <label for="desa" class="form-label">Desa</label>
                            <input placeholder="Nama Perguruan..." id="desa" name="desa" class="form-default" type="text" value="{{old('desa')}}" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('desa')" class="mt-2" />
                        </div>
                        <!-- Form End -->

                        <!-- Form -->
                        <div class="form-group">
                            <label for="namajalan" class="form-label">Nama Jalan</label>
                            <input placeholder="Nama Perguruan..." id="namajalan" name="nama_jalan" class="form-default" type="text" value="{{old('nama_jalan')}}" data-hs-combo-box-input="" />
                            <x-input-error :messages="$errors->get('nama_jalan')" class="mt-2" />
                        </div>
                        <!-- Form End -->


                        <div class="flex justify-end">
                            <button type="button" class="btn bg-green-500 border-green-500 hover:bg-transparent hover:text-green-500" data-hs-overlay="#submit-alert">Simpan Perubahan</button>
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