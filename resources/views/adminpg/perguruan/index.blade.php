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


</x-app-layout>