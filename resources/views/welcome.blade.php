<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  @vite('resources/css/app.css')
</head>
<body>
  
  <!-- Header Section Start -->
   <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
     <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="#home" class="font-bold text-lg text-primary block py-6">AzMa</a>
        </div>

        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
          </button>

          <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex">
              <li class="group">
                <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
              </li>
              <li class="group">
                <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Tentang Saya</a>
              </li>
              <li class="group">
                <a href="#portfolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Portfolio</a>
              </li>
              <li class="group">
                <a href="#clients" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Clients</a>
              </li>
              <li class="group">
                <a href="#blog" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Blog</a>
              </li>
              <li class="group">
                <a href="#contact" class="text-base text-dark py-2 mx-8 flex  group-hover:text-primary">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
     </div>
   </header>
  <!-- Header Section End -->

  <!-- Hero Section Start -->
   <section id="home" class="pt-36"></section>
   <div class="container">
    <div class="flex flex-wrap">
      <div class="w-full self-center px-4 lg:w-1/2">
        <h1 class="text-base font-semibold text-primary md:text-xl">Halo Semua 😊, Saya <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Azka Maulidina</span></h1>
        <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">Student | <span class="text-dark">Web Developer</span></h2>
        <p class="font-medium text-secondary mb-10 leading-relaxed">Belajar Web Programming Mudah dan Menyenangkan Bukan? <span class="text-dark font-bold">*Bukan</span></p>
        <a href="#" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Hubungi Saya</a>
      </div>

      <div class="w-full self-end px-4 lg:w-1/2">
        <div class="relative mt-10 lg:mt-0 lg:mr-0">
          <img src="{{ asset('images/azka.png') }}" alt="Azka" class="max-w-full mx-auto">
          <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-110">
          <svg width="500" height="500" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#14b8a6" d="M23.2,-34.4C32,-30.4,42.5,-27.3,48.3,-20.4C54,-13.4,55.1,-2.7,51.7,6.1C48.3,14.8,40.5,21.6,34,30C27.5,38.4,22.4,48.5,13.4,55.9C4.4,63.2,-8.4,67.8,-17.8,63.7C-27.1,59.5,-33,46.6,-40.7,36.2C-48.3,25.7,-57.8,17.7,-58.6,8.8C-59.3,-0.2,-51.4,-10,-46.7,-21.8C-42.1,-33.7,-40.7,-47.5,-33.5,-52.2C-26.3,-56.9,-13.1,-52.5,-3,-47.9C7.2,-43.2,14.4,-38.4,23.2,-34.4Z" transform="translate(100 100) scale(1.4)" />
          </svg>
          </span>
        </div>
      </div>
    </div>
   </div>
  <!-- Hero Section End -->

  <!-- About Section Start -->
   <section id="about" class="pt-36 pb-32">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full px-4 mb-10 lg:w-1/2">
          <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Saya</h4>
          <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">Yuk, belajar web programming di WP</h2>
          <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dicta nemo eligendi nesciunt atque cumque aliquam.</p>
        </div>
        <div class="w-full px-4 lg:w-1/2">
          <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Mari berteman</h3>
          <p class="font-medium text-base text-secondary mb-6 lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consectetur cum quisquam ea perferendis adipisci, eum suscipit nesciunt.</p>
          <div class="flex items-center">
            <!-- Youtube -->
             <a href="https://www.youtube.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-secondary hover:border-primary hover:bg-primary hover:text-white">
             <svg role="img" width="23" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
             </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-secondary hover:border-primary hover:bg-primary hover:text-white">
             <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
             </a>
             
             <!-- X -->
             <a href="https://www.x.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-secondary hover:border-primary hover:bg-primary hover:text-white">
             <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
             </a>
            
          </div>
        </div>
      </div>
    </div>
   </section>
  <!-- About Section End -->

  <!-- Portfolio Section Start -->
   <section id="portfolio" class="pt-36 pb-16 bg-slate-100">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary mb-2">Portfolio</h4>
          <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Project Terbaru</h2>
          <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, laboriosam. Voluptatibus repellat, dicta perferendis hic ratione voluptas impedit consequatur nihil.</p>
       </div>
      </div>

      <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden">
            <img src="{{ asset('images/desert.jpg') }}" alt="Gambar Desert" width="600" height="300">
          </div>
          <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Azka Maulidina</h3>
          <p class="font-medium text-base text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis illum eum officia?</p>
        </div>

        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden">
            <img src="{{ asset('images/desert.jpg') }}" alt="Gambar Desert" width="600" height="300">
          </div>
          <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Ini bisa di sambungkan dengan database project dari laravel</h3>
          <p class="font-medium text-base text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis illum eum officia?</p>
        </div>

        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden">
            <img src="{{ asset('images/desert.jpg') }}" alt="Gambar Desert" width="600" height="300">
          </div>
          <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Azka Maulidina</h3>
          <p class="font-medium text-base text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis illum eum officia?</p>
        </div>

        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden">
            <img src="{{ asset('images/desert.jpg') }}" alt="Gambar Desert" width="600" height="300">
          </div>
          <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Azka Maulidina</h3>
          <p class="font-medium text-base text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis illum eum officia?</p>
        </div>
      </div>
    </div>
   </section>
  <!-- Portfolio Section End -->

  <!-- Clients Section Start -->
   <section id="clients" class="pt-36 pb-32 bg-slate-800">
    <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto text-center mb-16">
              <h4 class="font-semibold text-lg text-primary mb-2">Clients</h4>
              <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Yang Pernah Bekerjasama</h2>
              <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aliquid facilis sequi.</p>
            </div>
          </div>
        </div>

        <div class="w-full px-4">
          <div class="flex flex-wrap items-center justify-center">
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="{{ asset('images/google.svg') }}" alt="Google" width="500">
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="{{ asset('images/tokped.svg') }}" alt="Tokopedia" width="500">
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="{{ asset('images/gojek.svg') }}" alt="Gojek" width="500">
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="{{ asset('images/redbull.svg') }}" alt="RedBull" width="500">
            </a>
          </div>
        </div>
    </div>
   </section>
  <!-- Clients Section End -->

  <!-- Blog Section Start -->
   <section id="blog" class="pt-36 pb-32 bg-slate-100">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2">Blog</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Tulisan Terkini</h2>
            <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sed tenetur reiciendis facere!</p>
        </div>
      </div>

      <div class="flex flex-wrap">
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="https://plus.unsplash.com/premium_photo-1673240367277-e1d394465b56?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="entah" class="w-full">
            <div class="py-8 px-6">
              <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tips Belajar Programming</a></h3>
              <p class="font-medium text-base text-secondary mb-6 ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, maiores!</p>
              <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
            </div>
            
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="https://plus.unsplash.com/premium_photo-1673240367277-e1d394465b56?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="entah" class="w-full">
            <div class="py-8 px-6">
              <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tips Belajar Programming</a></h3>
              <p class="font-medium text-base text-secondary mb-6 ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, maiores!</p>
              <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
            </div>
            
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="https://plus.unsplash.com/premium_photo-1673240367277-e1d394465b56?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="entah" class="w-full">
            <div class="py-8 px-6">
              <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tips Belajar Programming</a></h3>
              <p class="font-medium text-base text-secondary mb-6 ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, maiores!</p>
              <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
            </div>
            
          </div>
        </div>
      </div>
    </div>
   </section>
  <!-- Blog Section End -->

  <!-- Contact Section Start -->
   <section id="contact" class="pt-36 pb-32">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
              <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
              <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi Kami</h2>
              <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, sit.</p>
        </div>
      </div>

      <form action="">
        <div class="w-full lg:w-2/3 lg:mx-auto">
          <div class="w-full px-4 mb-8">
            <label for="name" class="text-base text-primary font-bold">Nama</label>
            <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
          </div>

          <div class="w-full px-4 mb-8">
            <label for="email" class="text-base text-primary font-bold">Email</label>
            <input type="text" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
          </div>

          <div class="w-full px-4 mb-8">
            <label for="message" class="text-base text-primary font-bold">Pesan</label>
            <textarea type="text" id="message" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
          </div>

          <div class="w-full px-4 flex justify-end">
            <button class="text-base font-semibold text-white bg-primary py-1 px-5 md:py-2 md:px-5 rounded-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
          </div>
         </div>
      </form>
    </div>
   </section>
  <!-- Contact Seciton End -->

  <!-- Footer Section Start -->
   <footer class="bg-dark pt-24 pb-12">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
          <h2 class="font-bold text-4xl text-white mb-5">SpaceX</h2>
          <h3 class="font-bold tetx-2xl mb-2">Hubungi Kami</h3>
          <p>gnjrbibd@gmail.com</p>
          <p>Jl. Kenangan No.69</p>
          <p>Bogor</p>
        </div>
        <div class="w-full px-4 mb-12 md:w-1/3">
          <h3 class="font-semibold text-xl text-white mb-5">Kategori Tulisan</h3>
          <ul class="text-slate-300">
            <li><a href="#" class="inline-block text-base hover:text-primary mb-3">Programming</a></li>
            <li><a href="#" class="inline-block text-base hover:text-primary mb-3">Teknologi</a></li>
            <li><a href="#" class="inline-block text-base hover:text-primary mb-3">Hardware</a></li>
          </ul>
        </div>

        <div class="w-full px-4 mb-12 md:w-1/3">
          <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
          <ul class="text-slate-300">
            <li><a href="#home" class="inline-block text-base hover:text-primary mb-3">Beranda</a></li>
            <li><a href="#about" class="inline-block text-base hover:text-primary mb-3">Tentang Saya</a></li>
            <li><a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Portfolio</a></li>
            <li><a href="#clients" class="inline-block text-base hover:text-primary mb-3">Clients</a></li>
            <li><a href="#blog" class="inline-block text-base hover:text-primary mb-3">Blog</a></li>
            <li><a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a></li>
          </ul>
        </div>
      </div>

      <div class="w-full pt-10 border-t border-slate-700">
      <div class="flex items-center justify-center mb-5">
            <!-- Youtube -->
             <a href="https://www.youtube.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-secondary hover:border-primary hover:bg-primary hover:text-white">
             <svg role="img" width="23" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
             </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-secondary hover:border-primary hover:bg-primary hover:text-white">
             <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
             </a>
             
             <!-- X -->
             <a href="https://www.x.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-secondary hover:border-primary hover:bg-primary hover:text-white">
             <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
             </a>
            
          </div>
      </div>
      <p class="font-medium text-xs text-slate-500 text-center">Made with <span>🍵</span> by <a href="#" target="_blank" class="font-bold text-primary">Azka Maulidina</a>, Using <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS.</a></p>
    </div>
   </footer>
  <!-- Footer Section End -->
   

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>