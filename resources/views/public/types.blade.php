@extends('layouts.app')

@section('title', 'Jenis Skizofrenia - SchizoCheck')

@section('content')
 <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Kategori</a></li>
            <li class="breadcrumb-item active current">Jenis Skizofrenia</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Jenis-Jenis Skizofrenia</h1>
        <p>Memahami berbagai tipe skizofrenia berdasarkan gejala dominan untuk penanganan yang lebih tepat.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Departments Section -->
    <section id="departments" class="departments section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <!-- First Column with 2 departments -->
          <div class="col-lg-4 d-flex flex-column" data-aos="zoom-in" data-aos-delay="200">
            <div class="department-card h-100 mb-4">
              <div class="department-header">
                <div class="department-icon">
                  <i class="bi bi-shuffle"></i>
                </div>
                <h3>Skizofrenia Hebeferenik</h3>
                <p class="department-subtitle">Tipe Disorganized</p>
              </div>
              <div class="department-image-wrapper">
                <img src="{{ asset('frontend/assets/img/health/pediatrics-2.webp') }}" alt="Hebeferenik" class="img-fluid" loading="lazy">
                <div class="department-stats">
                  <div class="stat-item">
                    <span class="stat-number">15-25</span>
                    <span class="stat-label">Usia Onset</span>
                  </div>
                </div>
              </div>
              <div class="department-content">
                <p>Ditandai dengan perilaku dan bicara yang kacau, serta respon emosional yang datar atau tidak sesuai situasi.</p>
                <ul class="department-highlights">
                  <li><i class="bi bi-check2-circle"></i> Bicara tidak teratur</li>
                  <li><i class="bi bi-check2-circle"></i> Perilaku kekanak-kanakan</li>
                  <li><i class="bi bi-check2-circle"></i> Afek tidak serasi</li>
                </ul>
                <a href="{{ url('/hebephrenic') }}" class="department-link">Pelajari Lebih Lanjut</a>
              </div>
            </div>

            <div class="department-card h-100" data-aos="zoom-in" data-aos-delay="350">
              <div class="department-header">
                <div class="department-icon">
                  <i class="bi bi-person-standing"></i>
                </div>
                <h3>Skizofrenia Katatonik</h3>
                <p class="department-subtitle">Gangguan Psikomotor</p>
              </div>
              <div class="department-image-wrapper">
                <img src="{{ asset('frontend/assets/img/health/orthopedics-4.webp') }}" alt="Katatonik" class="img-fluid" loading="lazy">
                <div class="department-stats">
                  <div class="stat-item">
                    <span class="stat-number">Fisik</span>
                    <span class="stat-label">Gejala Utama</span>
                  </div>
                </div>
              </div>
              <div class="department-content">
                <p>Ekstrem dalam perilaku fisik, bisa berupa diam mematung (stupor) atau gerakan berlebih tanpa tujuan.</p>
                <ul class="department-highlights">
                  <li><i class="bi bi-check2-circle"></i> Stupor (tidak bergerak)</li>
                  <li><i class="bi bi-check2-circle"></i> Mutisme (membisu)</li>
                  <li><i class="bi bi-check2-circle"></i> Echolalia (meniru ucapan)</li>
                </ul>
                <a href="{{ url('/catatonic') }}" class="department-link">Pelajari Lebih Lanjut</a>
              </div>
            </div>
          </div><!-- End First Column -->

          <!-- Second Column - Featured Department -->
          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="250">
            <div class="featured-department h-100">
              <div class="featured-header">
                <div class="featured-badge">
                  <i class="bi bi-star-fill"></i>
                  <span>Paling Umum</span>
                </div>
                <div class="featured-icon">
                  <i class="bi bi-eye"></i>
                </div>
                <h2>Skizofrenia Paranoid</h2>
                <p class="featured-subtitle">Dominasi Halusinasi & Delusi</p>
              </div>
              <div class="featured-image">
                <img src="{{ asset('frontend/assets/img/health/neurology-4.webp') }}" alt="Paranoid" class="img-fluid" loading="lazy">
                <div class="featured-overlay">
                  <div class="achievement-list">
                    <div class="achievement-item">
                      <i class="bi bi-exclamation-triangle"></i>
                      <span>Waham Kejar</span>
                    </div>
                    <div class="achievement-item">
                      <i class="bi bi-ear"></i>
                      <span>Halusinasi Suara</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="featured-content">
                <p>Tipe yang paling sering ditemui, ditandai dengan kecurigaan berlebih dan mendengar suara-suara yang tidak nyata, namun fungsi kognitif relatif terjaga.</p>
                <div class="featured-services">
                  <div class="service-tag">Halusinasi</div>
                  <div class="service-tag">Delusi</div>
                  <div class="service-tag">Kecemasan</div>
                  <div class="service-tag">Curiga</div>
                </div>
                <a href="{{ url('/paranoid') }}" class="featured-btn">
                  Pelajari Detail
                  <i class="bi bi-arrow-right-circle"></i>
                </a>
              </div>
            </div>
          </div><!-- End Featured Department -->

          <!-- Third Column with 2 departments -->
          <div class="col-lg-4 d-flex flex-column" data-aos="zoom-in" data-aos-delay="300">
            <div class="department-card h-100 mb-4">
              <div class="department-header">
                <div class="department-icon">
                  <i class="bi bi-hourglass-split"></i>
                </div>
                <h3>Skizofrenia Residual</h3>
                <p class="department-subtitle">Fase Lanjutan</p>
              </div>
              <div class="department-image-wrapper">
                <img src="{{ asset('frontend/assets/img/health/cardiology-2.webp') }}" alt="Residual" class="img-fluid" loading="lazy">
                <div class="department-stats">
                  <div class="stat-item">
                    <span class="stat-number">Kronis</span>
                    <span class="stat-label">Sifat</span>
                  </div>
                </div>
              </div>
              <div class="department-content">
                <p>Gejala positif (halusinasi/delusi) sudah mereda, namun gejala negatif (penarikan diri, kurang motivasi) masih menetap.</p>
                <ul class="department-highlights">
                  <li><i class="bi bi-check2-circle"></i> Pasif & apatis</li>
                  <li><i class="bi bi-check2-circle"></i> Penarikan sosial</li>
                  <li><i class="bi bi-check2-circle"></i> Perawatan diri kurang</li>
                </ul>
                <a href="{{ url('/residual') }}" class="department-link">Pelajari Lebih Lanjut</a>
              </div>
            </div>

            <div class="department-card h-100" data-aos="zoom-in" data-aos-delay="400">
              <div class="department-header">
                <div class="department-icon">
                  <i class="bi bi-question-circle"></i>
                </div>
                <h3>Tak Terinci</h3>
                <p class="department-subtitle">Undifferentiated</p>
              </div>
              <div class="department-image-wrapper">
                <img src="{{ asset('frontend/assets/img/health/dermatology-3.webp') }}" alt="Undifferentiated" class="img-fluid" loading="lazy">
                <div class="department-stats">
                  <div class="stat-item">
                    <span class="stat-number">Campuran</span>
                    <span class="stat-label">Gejala</span>
                  </div>
                </div>
              </div>
              <div class="department-content">
                <p>Menunjukkan gejala skizofrenia yang jelas namun tidak memenuhi kriteria spesifik untuk tipe paranoid, hebeferenik, atau katatonik.</p>
                <ul class="department-highlights">
                  <li><i class="bi bi-check2-circle"></i> Gejala campuran</li>
                  <li><i class="bi bi-check2-circle"></i> Diagnosis awal</li>
                  <li><i class="bi bi-check2-circle"></i> Perubahan tipe</li>
                </ul>
                <a href="{{ url('/undifferentiated') }}" class="department-link">Pelajari Lebih Lanjut</a>
              </div>
            </div>
          </div><!-- End Third Column -->

        </div>

      </div>

    </section><!-- /Departments Section -->

  </main>

<style>
/* Types Page Enhancements */
.departments .department-highlights li i {
    color: var(--accent-color);
    margin-right: 8px;
    font-size: 1rem;
}

.departments .department-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 10px 20px;
    background: var(--accent-color);
    color: white;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s ease;
}

.departments .department-link:hover {
    background: color-mix(in srgb, var(--accent-color) 85%, black);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 127, 127, 0.3);
}

.departments .featured-btn {
    transition: all 0.3s ease;
}

.departments .featured-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 127, 127, 0.35);
}

.departments .department-card {
    transition: all 0.3s ease;
}

.departments .department-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.departments .featured-department {
    transition: all 0.3s ease;
}

.departments .featured-department:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.departments .service-tag {
    transition: all 0.2s ease;
}

.departments .service-tag:hover {
    background: var(--accent-color);
    color: white;
}
</style>
@endsection