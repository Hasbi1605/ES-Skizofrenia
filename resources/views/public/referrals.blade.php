@extends('layouts.app')

@section('title', 'Rujukan Rumah Sakit - SchizoCheck')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Info</a></li>
            <li class="breadcrumb-item active current">Rujukan Rumah Sakit</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Rujukan Rumah Sakit Jiwa</h1>
        <p>Daftar rumah sakit rujukan terbaik untuk penanganan skizofrenia dan gangguan kesehatan mental lainnya.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="{{ asset('frontend/assets/img/health/facilities-1.webp') }}" alt="RSJ Dr. Soeharto Heerdjan" class="img-fluid">
                <div class="doctor-overlay">
                  <div class="doctor-social">
                    <a href="#" class="social-link"><i class="bi bi-geo-alt"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-telephone"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-globe"></i></a>
                  </div>
                </div>
              </div>
              <div class="doctor-content">
                <h4 class="doctor-name">RSJ Dr. Soeharto Heerdjan</h4>
                <span class="doctor-specialty">Jakarta Barat</span>
                <p class="doctor-bio">Rumah sakit jiwa pusat rujukan nasional dengan fasilitas lengkap dan tenaga ahli berpengalaman.</p>
                <div class="doctor-experience">
                  <span class="experience-badge">Akreditasi Paripurna</span>
                </div>
                <a href="https://rsjsh.co.id/" target="_blank" class="btn-appointment">Kunjungi Website</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="{{ asset('frontend/assets/img/health/facilities-2.webp') }}" alt="RSJ Dr. Radjiman Wediodiningrat" class="img-fluid">
                <div class="doctor-overlay">
                  <div class="doctor-social">
                    <a href="#" class="social-link"><i class="bi bi-geo-alt"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-telephone"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-globe"></i></a>
                  </div>
                </div>
              </div>
              <div class="doctor-content">
                <h4 class="doctor-name">RSJ Dr. Radjiman W.</h4>
                <span class="doctor-specialty">Lawang, Malang</span>
                <p class="doctor-bio">Pusat rujukan kesehatan jiwa untuk wilayah Jawa Timur dengan layanan rehabilitasi psikososial.</p>
                <div class="doctor-experience">
                  <span class="experience-badge">Layanan Unggulan</span>
                </div>
                <a href="https://rsjlawang.com/" target="_blank" class="btn-appointment">Kunjungi Website</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="{{ asset('frontend/assets/img/health/facilities-1.webp') }}" alt="RSJ Prof. Dr. Soerojo" class="img-fluid">
                <div class="doctor-overlay">
                  <div class="doctor-social">
                    <a href="#" class="social-link"><i class="bi bi-geo-alt"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-telephone"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-globe"></i></a>
                  </div>
                </div>
              </div>
              <div class="doctor-content">
                <h4 class="doctor-name">RSJ Prof. Dr. Soerojo</h4>
                <span class="doctor-specialty">Magelang, Jawa Tengah</span>
                <p class="doctor-bio">Menyediakan layanan kesehatan jiwa komprehensif dan terintegrasi dengan layanan fisik.</p>
                <div class="doctor-experience">
                  <span class="experience-badge">Pusat Rujukan Jateng</span>
                </div>
                <a href="https://rsjsoerojo.co.id/" target="_blank" class="btn-appointment">Kunjungi Website</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="{{ asset('frontend/assets/img/health/facilities-2.webp') }}" alt="RSJ Provinsi Jawa Barat" class="img-fluid">
                <div class="doctor-overlay">
                  <div class="doctor-social">
                    <a href="#" class="social-link"><i class="bi bi-geo-alt"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-telephone"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-globe"></i></a>
                  </div>
                </div>
              </div>
              <div class="doctor-content">
                <h4 class="doctor-name">RSJ Provinsi Jawa Barat</h4>
                <span class="doctor-specialty">Cisarua, Bandung</span>
                <p class="doctor-bio">Rumah sakit khusus jiwa milik pemerintah provinsi Jawa Barat dengan lingkungan yang asri.</p>
                <div class="doctor-experience">
                  <span class="experience-badge">Ramah Pasien</span>
                </div>
                <a href="https://rsj.jabarprov.go.id/" target="_blank" class="btn-appointment">Kunjungi Website</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="{{ asset('frontend/assets/img/health/facilities-1.webp') }}" alt="RSJ Dr. H. Marzoeki Mahdi" class="img-fluid">
                <div class="doctor-overlay">
                  <div class="doctor-social">
                    <a href="#" class="social-link"><i class="bi bi-geo-alt"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-telephone"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-globe"></i></a>
                  </div>
                </div>
              </div>
              <div class="doctor-content">
                <h4 class="doctor-name">RSJ Dr. H. Marzoeki Mahdi</h4>
                <span class="doctor-specialty">Bogor, Jawa Barat</span>
                <p class="doctor-bio">Pusat Kesehatan Jiwa Nasional yang memberikan pelayanan kesehatan jiwa paripurna.</p>
                <div class="doctor-experience">
                  <span class="experience-badge">Pusat Nasional</span>
                </div>
                <a href="https://rsjmm.co.id/" target="_blank" class="btn-appointment">Kunjungi Website</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="{{ asset('frontend/assets/img/health/facilities-2.webp') }}" alt="RSJ Tampan" class="img-fluid">
                <div class="doctor-overlay">
                  <div class="doctor-social">
                    <a href="#" class="social-link"><i class="bi bi-geo-alt"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-telephone"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-globe"></i></a>
                  </div>
                </div>
              </div>
              <div class="doctor-content">
                <h4 class="doctor-name">RSJ Tampan</h4>
                <span class="doctor-specialty">Pekanbaru, Riau</span>
                <p class="doctor-bio">Rumah sakit jiwa rujukan utama untuk wilayah Riau dan sekitarnya.</p>
                <div class="doctor-experience">
                  <span class="experience-badge">Terakreditasi</span>
                </div>
                <a href="https://rsjiwatampan.riau.go.id/" target="_blank" class="btn-appointment">Kunjungi Website</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="{{ asset('frontend/assets/img/health/facilities-1.webp') }}" alt="RSJ Bali" class="img-fluid">
                <div class="doctor-overlay">
                  <div class="doctor-social">
                    <a href="#" class="social-link"><i class="bi bi-geo-alt"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-telephone"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-globe"></i></a>
                  </div>
                </div>
              </div>
              <div class="doctor-content">
                <h4 class="doctor-name">RSJ Provinsi Bali</h4>
                <span class="doctor-specialty">Bangli, Bali</span>
                <p class="doctor-bio">Melayani kesehatan jiwa masyarakat Bali dengan pendekatan budaya lokal.</p>
                <div class="doctor-experience">
                  <span class="experience-badge">Layanan Prima</span>
                </div>
                <a href="https://rsj.baliprov.go.id/" target="_blank" class="btn-appointment">Kunjungi Website</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="{{ asset('frontend/assets/img/health/facilities-2.webp') }}" alt="RSJ Aceh" class="img-fluid">
                <div class="doctor-overlay">
                  <div class="doctor-social">
                    <a href="#" class="social-link"><i class="bi bi-geo-alt"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-telephone"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-globe"></i></a>
                  </div>
                </div>
              </div>
              <div class="doctor-content">
                <h4 class="doctor-name">RSJ Aceh</h4>
                <span class="doctor-specialty">Banda Aceh</span>
                <p class="doctor-bio">Rumah sakit jiwa yang berkomitmen memberikan pelayanan kesehatan jiwa islami.</p>
                <div class="doctor-experience">
                  <span class="experience-badge">Islami & Modern</span>
                </div>
                <a href="https://rsj.acehprov.go.id/" target="_blank" class="btn-appointment">Kunjungi Website</a>
              </div>
            </div>
          </div><!-- End Doctor Card -->

        </div>

      </div>

    </section><!-- /Doctors Section -->

  </main>

@endsection

