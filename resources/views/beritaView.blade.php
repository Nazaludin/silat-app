<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <title>Home</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <script src="https://unpkg.com/scrollreveal"></script>

</head>
<!-- header -->
<header class="font-primary flex justify-center w-full bg-white py-5 px-10  fixed top-0 transition-all duration-200 z-[99999]">
  <div class="container flex justify-between items-center">
    <div class="z-[999]">LOGO</div>
    <div>
      <nav id="nav-menu" class="navigation md:flex md:static md:bg-transparent md:shadow-none shadow-lg bg-white fixed w-full left-0 top-0 -translate-y-[30rem] md:translate-y-0 md:pt-0 pt-[5rem] z-[99] md:pb-0 pb-[2rem] rounded-b-2xl transition-all duration-500">
        <ul class="flex nav-hover md:flex-row flex-col justify-center items-center w-full">
          <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3  text-center">
            <a href="#">Beranda</a>
          </li>
          <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3 text-center ">
            <a href="#profilView" class=" cursor-pointer">Profil</a>
          </li>
          <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3 text-center ">
            <a href="#tokohView" class=" cursor-pointer">Tokoh</a>
          </li>
          <li class="nav-item w-1/2 md:w-full m-3 md:p-0 px-3 text-center ">
            <a href="#sejarahView" class=" cursor-pointer">Sejarah</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="flex items-center">
      <a href="{{ __('login') }}" class="btn-main"> Login </a>
      <button id="hamburger" class="md:hidden z-[999]">
        <span class="hamburger-line transition-all duration-500 ease-in-out"></span>
        <span class="hamburger-line transition-all duration-500 ease-in-out"></span>
        <span class="hamburger-line transition-all duration-500 ease-in-out"></span>
      </button>
    </div>
  </div>
</header>

<!-- header -->

<body style="margin: 0;" class="font-primary">

  <section id="beritaView" class="mt-[5rem]">

    <div class="flex flex-col">
      <h1 class="text-3xl mb-3 font-bold text-main">
        Judul Berita
      </h1>
      <div class="font-bold text-xs uppercase text-slate-400">
        Author : Perguruan Triandi
      </div>
      <div class="font-bold text-xs uppercase text-slate-400">
        10/10/2022
      </div>
      <div class="divider">
        berita
      </div>
      <div class="pl-[5rem] pr-[5rem]">
        <img class="rounded-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="">
      </div>
      
      <p class="text-justify">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod sunt totam odio sequi, autem maxime reprehenderit natus quisquam esse repellendus recusandae aspernatur aliquam doloribus expedita? Dolorem architecto, nisi iure doloribus eos harum voluptas impedit neque, ad amet id. Minima enim suscipit aliquam non sequi, velit, placeat vero sit dicta sapiente reprehenderit ipsum, vitae odit repudiandae fuga! Velit, deleniti. Magni facere consequuntur aliquid quaerat, officia earum. Sequi soluta amet explicabo quas ratione deserunt dolore ut molestiae dolorum, perspiciatis distinctio alias omnis atque ullam neque magnam, eaque a quod necessitatibus! Fugiat saepe error sed eligendi molestiae labore, iste est earum, accusamus assumenda quibusdam ad? Cupiditate quas obcaecati minus hic temporibus tenetur, possimus optio atque magni architecto omnis asperiores deleniti. Placeat beatae corrupti ipsum? Corporis magni laboriosam, cupiditate nihil ipsum architecto vel earum voluptas delectus ut! Numquam, quia. Eligendi consequuntur, debitis, dolore temporibus quo consequatur voluptates quae harum optio magni saepe atque, quos voluptatum rem. Accusamus molestiae, saepe, nulla non eos provident fuga, natus obcaecati rerum eum reiciendis fugiat adipisci aliquid harum at neque porro corrupti illum dolores labore incidunt tempora inventore debitis beatae. Sapiente velit non, asperiores consequuntur commodi voluptas! Fuga dolorum repudiandae similique, saepe nisi non molestiae repellendus aliquid error, exercitationem perspiciatis vero eaque iusto animi sapiente vitae. Corrupti placeat voluptas ea optio saepe! Sapiente illo aliquid sint et voluptatibus, velit aperiam quaerat quidem voluptates fugit beatae maiores asperiores sed ipsa? Distinctio ab adipisci velit laborum iusto dignissimos eius quam corporis, saepe dolorum facilis cum repudiandae similique asperiores porro minima obcaecati numquam? Illum odit possimus voluptate amet, modi accusamus, cupiditate aliquam aperiam itaque officiis omnis soluta? Unde qui ut recusandae illo labore? Quam nisi ipsa reiciendis reprehenderit, atque, magnam sequi, at libero consequatur porro facere illo eos. Ab repudiandae fugit repellendus sequi illum distinctio officia sed voluptatibus ipsum iure aliquam adipisci voluptatum, accusantium velit dignissimos a necessitatibus culpa eum commodi nesciunt ratione blanditiis. Nobis inventore, recusandae voluptates praesentium vitae, repellat enim fuga odit eum reprehenderit atque quam iste cumque esse facilis ea! Explicabo quidem tempora, commodi maiores odio sed veniam consectetur eveniet eaque at cupiditate a dolore ipsum eum. Cumque labore asperiores aperiam accusantium consequatur dolorem tenetur atque iusto magnam veniam? Fugit, delectus omnis. Dolor, velit aspernatur excepturi modi nemo ullam consequatur, iste dicta cum nulla quod sapiente eum ipsam atque? Nisi, quam in, dolore beatae iure totam amet incidunt possimus, molestias consequuntur perferendis atque porro ratione ab blanditiis qui explicabo repellat quas assumenda. Omnis nam et iste enim ad voluptatem minima nisi culpa magni. Molestias fugit accusamus ipsa numquam totam fugiat a culpa praesentium quae explicabo vel consectetur, doloremque sit illum qui fuga unde doloribus error voluptate aperiam facere temporibus ex dignissimos ut. Reiciendis vero quos molestiae cupiditate, praesentium quas cumque provident minus blanditiis incidunt autem odio, nihil veniam dolor expedita sunt, nesciunt earum quaerat consequatur similique. Tempora deserunt reprehenderit dignissimos necessitatibus ipsum unde cum suscipit dolorem, dolor velit repellendus modi perspiciatis! Eaque provident praesentium cum sit sed ut mollitia, aspernatur molestias, voluptatibus vitae explicabo dolore, non ullam dolorum magni!
      </p>


    </div>
  </section>



  @include('layouts.footer')


  <!-- Javascript -->
  <script>
    ScrollReveal().reveal('.reveal', {
        reset: true,
        duration: 2000,
        distance: '100px'
      },

    );
  </script>
  <script src="resources\js\app.js"></script>
  <script src="../node_modules/preline/dist/preline.js"></script>
  <script src="../node_modules/scrollreveal/dist/scrollreveal.js"></script>
  <!-- <script src="../node_modules/jquery/dist/jquery.js"></script> -->
</body>

</html>