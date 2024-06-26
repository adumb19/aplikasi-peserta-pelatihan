@include('home.inc.head')

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="home" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1 class="sitename">PPKD Jakarta Pusat</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Product</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="login">Login</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{asset('img/hero.jpg')}}" alt="" data-aos="fade-in">

      <div class="container">

        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-6 col-lg-8">
            <h2>Pusat Pelatihan Kerja Jakarta Pusat
              {{-- {{ $profile->header }} --}}
            </h2>
            <p class="pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio similique veniam ut quis illo dolorum quae exercitationem dolores, soluta quisquam!
              {{-- {{ $profile->sub_header }} --}}
            </p>
            <a class="btn btn-lg bg-warning" href="register">Daftar sekarang</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->


  </main>

  @include('home.inc.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


@include('home.inc.js')
</body>

</html>