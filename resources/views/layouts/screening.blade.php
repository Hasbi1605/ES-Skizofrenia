<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'Screening - SchizoCheck')</title>
  <meta name="description" content="Screening Gejala Skizofrenia">
  <meta name="keywords" content="">

  <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">
  
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ec 100%);
    }
    
    .screening-header {
      background: white;
      padding: 15px 0;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
    }
    
    .screening-logo {
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      color: var(--heading-color);
    }
    
    .screening-logo svg {
      width: 32px;
      height: 32px;
      color: var(--accent-color);
    }
    
    .screening-logo h1 {
      font-size: 1.3rem;
      margin: 0;
      font-weight: 700;
    }
    
    .main-content {
      padding-top: 80px;
      padding-bottom: 40px;
      min-height: 100vh;
    }
    
    .exit-btn {
      color: #6c757d;
      text-decoration: none;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      gap: 5px;
      transition: color 0.3s;
    }
    
    .exit-btn:hover {
      color: var(--accent-color);
    }
  </style>
</head>

<body class="screening-page">

  <!-- Minimal Header -->
  <header class="screening-header">
    <div class="container d-flex justify-content-center align-items-center">
      <a href="{{ url('/') }}" class="screening-logo" onclick="return confirm('Apakah Anda yakin ingin keluar? Progress screening tidak akan disimpan.')">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22 22L2 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
          <path d="M17 22V6C17 4.11438 17 3.17157 16.4142 2.58579C15.8284 2 14.8856 2 13 2H11C9.11438 2 8.17157 2 7.58579 2.58579C7 3.17157 7 4.11438 7 6V22" stroke="currentColor" stroke-width="1.5"></path>
        </svg>
        <h1>SchizoCheck</h1>
      </a>
    </div>
  </header>

  <main class="main-content">
    @yield('content')
  </main>

  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script>
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  </script>
  
  @yield('scripts')

</body>
</html>
