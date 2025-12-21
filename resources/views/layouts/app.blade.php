<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'SchizoCheck - Home')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        {{-- Jika nanti pakai gambar logo, gunakan: <img src="{{ asset('frontend/assets/img/logo.webp') }}" alt=""> --}}
        <svg class="my-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
           {{-- (SVG Code tetap sama, saya perpendek agar rapi) --}}
           <g id="iconCarrier">
            <path d="M22 22L2 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M17 22V6C17 4.11438 17 3.17157 16.4142 2.58579C15.8284 2 14.8856 2 13 2H11C9.11438 2 8.17157 2 7.58579 2.58579C7 3.17157 7 4.11438 7 6V22" stroke="currentColor" stroke-width="1.5"></path>
            {{-- ... sisa path SVG ... --}}
          </g>
        </svg>
        <h1 class="sitename">SchizoCheck</h1>
      </a>

      <nav id="navmenu" class="navmenu">
       <ul>
          <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
          <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">Tentang</a></li>
          <li><a href="{{ url('/types') }}" class="{{ request()->is('types') ? 'active' : '' }}">Jenis Skizofrenia</a></li>
          <li><a href="{{ url('/guide') }}" class="{{ request()->is('guide') ? 'active' : '' }}">Panduan & Fitur</a></li>
          <li><a href="{{ url('/referrals') }}" class="{{ request()->is('referrals') ? 'active' : '' }}">Alur Pengobatan</a></li>
          <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a href="{{ url('/screening') }}" class="btn-getstarted">Screening</a>

    </div>
  </header>

  <main class="main">
    {{-- DISINI KITA TARUH YIELD UNTUK KONTEN --}}
    @yield('content')
  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top mt-5">
      <div class="row gy-4">
        
        <!-- About Section -->
        <div class="col-lg-3 col-md-6 footer-about">
          <a href="{{ url('/') }}" class="logo d-flex align-items-center mb-3">
            <span class="sitename">SchizoCheck</span>
          </a>
          <p class="mb-3">Sistem pakar berbasis Certainty Factor untuk deteksi dini gejala skizofrenia.</p>
          <div class="social-links d-flex gap-2">
            <a href="https://github.com/Hasbi1605/ES-Skizofrenia" target="_blank" class="btn btn-sm btn-outline-primary" title="GitHub Repository"><i class="bi bi-github"></i></a>
            <a href="https://www.linkedin.com/in/mhasbia16" target="_blank" class="btn btn-sm btn-outline-primary" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://hasbi1605.github.io/" target="_blank" class="btn btn-sm btn-outline-primary" title="Portfolio"><i class="bi bi-globe"></i></a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Menu Utama</h4>
          <ul class="list-unstyled">
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Beranda</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/about') }}">Tentang</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/types') }}">Jenis Skizofrenia</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/screening') }}">Mulai Diagnosis</a></li>
          </ul>
        </div>

        <!-- Resources -->
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Informasi & Sumber Daya</h4>
          <ul class="list-unstyled">
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/about') }}">Tentang Skizofrenia</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/guide') }}">Panduan Keluarga</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/referrals') }}">Panduan Pengobatan</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/contact') }}">Kontak</a></li>
          </ul>
        </div>

        <!-- Contact & Emergency -->
        <div class="col-lg-4 col-md-6 footer-contact">
          <h4>Kontak Darurat</h4>
          <div class="mb-3">
            <p class="mb-2"><strong><i class="bi bi-telephone-fill me-2"></i>Hotline Nasional:</strong></p>
            <p class="ms-4">119 ext 8 (Kesehatan Mental - 24/7)</p>
          </div>
          <div class="mb-3">
            <p class="mb-2"><strong><i class="bi bi-hospital me-2"></i>Rumah Sakit Jiwa:</strong></p>
            <p class="ms-4 mb-1">RSJ Dr. Soeharto Heerdjan, Jakarta</p>
            <p class="ms-4 mb-1">RSJ Prof. Dr. Soerojo, Magelang</p>
            <p class="ms-4">RSJ Marzoeki Mahdi, Bogor</p>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright 2025</span> <strong class="px-1 sitename">SchizoCheck</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Developed by <a href="https://hasbi1605.github.io/" target="_blank">M. Hasbi Assidiqi</a> | Sistem Pakar v1.0
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>
</html>