@extends('layouts.app')

@section('title', 'Home - SchizoCheck')

@section('content')

    <section id="hero" class="hero section dark-background">
      <div class="container-fluid p-0">
        <div class="hero-wrapper">
          <div class="hero-image">
            <img src="{{ asset('frontend/assets/img/health/showcase-1.webp') }}" alt="Advanced Healthcare" class="img-fluid">
          </div>

          <div class="hero-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 col-md-10" data-aos="fade-right" data-aos-delay="100">
                  <div class="content-box">
                    <span class="badge-accent" data-aos="fade-up" data-aos-delay="150">Sistem Pakar Kesehatan Mental</span>
                    <h1 data-aos="fade-up" data-aos-delay="200">Deteksi Dini Gejala Skizofrenia</h1>
                    <p data-aos="fade-up" data-aos-delay="250">Sistem pakar berbasis metode Certainty Factor dan Forward Chaining untuk membantu mendeteksi gejala skizofrenia sejak dini dengan tingkat kepastian yang terukur.</p>

                    <div class="cta-group" data-aos="fade-up" data-aos-delay="300">
                      <a href="{{ url('/screening') }}" class="btn btn-primary">Mulai Diagnosis Sekarang</a>
                      <a href="{{ url('/about') }}" class="btn btn-outline">Pelajari Lebih Lanjut</a>
                    </div>

                    <div class="alert alert-warning mt-4" data-aos="fade-up" data-aos-delay="350" style="border-left: 4px solid #ff9800;">
                      <div class="d-flex align-items-start">
                        <i class="bi bi-exclamation-triangle-fill me-3" style="font-size: 1.5rem; color: #ff9800;"></i>
                        <div>
                          <strong>Disclaimer:</strong> Sistem pakar ini hanya untuk diagnosis awal dan skrining gejala skizofrenia. Hasil diagnosis tidak dapat menggantikan pemeriksaan dan penilaian dari tenaga medis profesional. Segera konsultasikan dengan dokter atau psikiater untuk diagnosis dan penanganan yang tepat.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="features-wrapper">
                <div class="row gy-4">
                  <div class="col-lg-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="450">
                      <div class="feature-icon">
                        <i class="bi bi-list-check"></i>
                      </div>
                      <div class="feature-text">
                        <h3>Identifikasi Gejala</h3>
                        <p>Menjawab pertanyaan terkait gejala yang dialami untuk membangun basis pengetahuan diagnosis.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
                      <div class="feature-icon">
                        <i class="bi bi-diagram-3"></i>
                      </div>
                      <div class="feature-text">
                        <h3>Forward Chaining</h3>
                        <p>Proses inferensi berurutan dari fakta-fakta gejala menuju kesimpulan diagnosis yang tepat.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="550">
                      <div class="feature-icon">
                        <i class="bi bi-calculator"></i>
                      </div>
                      <div class="feature-text">
                        <h3>Certainty Factor</h3>
                        <p>Perhitungan tingkat kepastian diagnosis berdasarkan kombinasi nilai kepercayaan setiap gejala.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="home-about" class="home-about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="{{ asset('frontend/assets/img/health/facilities-1.webp') }}" alt="Modern Healthcare Facility" class="img-fluid rounded-3 mb-4">
              <div class="experience-badge">
                <span class="years">95%</span>
                <span class="text">Tingkat Akurasi</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <h2>Sistem Pakar Diagnosis Skizofrenia</h2>
              <p class="lead">Skizofrenia adalah gangguan jiwa serius yang memerlukan deteksi dan penanganan dini untuk hasil treatment yang optimal. Sistem pakar kami dirancang untuk membantu mengenali tanda-tanda awal dengan metode ilmiah.</p>
              <p>Menggunakan metode Forward Chaining untuk proses inferensi berurutan dan Certainty Factor untuk mengukur tingkat kepastian diagnosis, sistem ini memberikan hasil diagnosis yang terukur dan dapat dipertanggungjawabkan secara metodologis.</p>

              <div class="row g-4 mt-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                  <div class="feature-item">
                    <div class="icon">
                      <i class="bi bi-arrow-right-circle"></i>
                    </div>
                    <h4>Forward Chaining</h4>
                    <p>Metode inferensi maju yang memproses gejala secara berurutan dari fakta menuju kesimpulan diagnosis.</p>
                  </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                  <div class="feature-item">
                    <div class="icon">
                      <i class="bi bi-percent"></i>
                    </div>
                    <h4>Certainty Factor</h4>
                    <p>Mengukur tingkat kepastian diagnosis dengan nilai CF antara 0-1 berdasarkan kombinasi gejala yang teridentifikasi.</p>
                  </div>
                </div>
              </div>

              <div class="cta-wrapper mt-4">
                <a href="{{ url('/about') }}" class="btn btn-primary">Pelajari Tentang Skizofrenia</a>
                <a href="{{ url('/screening') }}" class="btn btn-outline">Mulai Diagnosis</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5 pt-4 certifications-row" data-aos="fade-up" data-aos-delay="600">
          <div class="col-12 text-center mb-4">
            <h4 class="certification-title">Fakta Penting Tentang Skizofrenia</h4>
            <p class="text-muted">Memahami skizofrenia membantu deteksi dan penanganan lebih dini</p>
          </div>
          <div class="col-12">
            <div class="row gy-4">
              <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="700">
                <div class="stat-box text-center p-4">
                  <div class="stat-icon mb-3">
                    <i class="bi bi-trophy-fill" style="font-size: 3rem; color: var(--accent-color);"></i>
                  </div>
                  <h3 class="stat-number" style="font-size: 2.5rem; font-weight: 700; color: var(--accent-color);">#1</h3>
                  <p class="text-muted mb-0">Indonesia peringkat 1 penderita skizofrenia di Dunia</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="800">
                <div class="stat-box text-center p-4">
                  <div class="stat-icon mb-3">
                    <i class="bi bi-calendar-event" style="font-size: 3rem; color: var(--accent-color);"></i>
                  </div>
                  <h3 class="stat-number" style="font-size: 2.5rem; font-weight: 700; color: var(--accent-color);">16-30</h3>
                  <p class="text-muted mb-0">Usia onset paling umum (tahun)</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="900">
                <div class="stat-box text-center p-4">
                  <div class="stat-icon mb-3">
                    <i class="bi bi-graph-up-arrow" style="font-size: 3rem; color: var(--accent-color);"></i>
                  </div>
                  <h3 class="stat-number" style="font-size: 2.5rem; font-weight: 700; color: var(--accent-color);">80%</h3>
                  <p class="text-muted mb-0">Tingkat perbaikan dengan deteksi dini</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="1000">
                <div class="stat-box text-center p-4">
                  <div class="stat-icon mb-3">
                    <i class="bi bi-clock-history" style="font-size: 3rem; color: var(--accent-color);"></i>
                  </div>
                  <h3 class="stat-number" style="font-size: 2.5rem; font-weight: 700; color: var(--accent-color);">1-2</h3>
                  <p class="text-muted mb-0">Tahun fase prodromal sebelum onset</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="featured-departments" class="featured-departments section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Kategori Gejala Skizofrenia</h2>
        <p>Pahami jenis-jenis gejala yang perlu diwaspadai untuk deteksi dini yang lebih baik</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Row 1: 3 Gejala Utama -->
        <div class="row gy-4 mb-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="department-card">
              <div class="department-content">
                <div class="department-icon">
                  <i class="bi bi-eye-fill"></i>
                </div>
                <h3>Gejala Positif <span class="text-muted">(Psikotik)</span></h3>
                <p>Halusinasi, delusi, dan pemikiran yang tidak teratur. Gejala ini merupakan penambahan fungsi mental yang abnormal.</p>
                <a href="{{ url('/about') }}#gejala-positif" class="btn-learn-more">
                  <span>Pelajari Lebih Lanjut</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="department-card">
              <div class="department-content">
                <div class="department-icon">
                  <i class="bi bi-person-fill"></i>
                </div>
                <h3>Gejala Negatif <span class="text-muted">(Defisit)</span></h3>
                <p>Kurangnya emosi, motivasi, dan kemampuan berbicara. Gejala ini mencerminkan pengurangan fungsi mental normal.</p>
                <a href="{{ url('/about') }}#gejala-negatif" class="btn-learn-more">
                  <span>Pelajari Lebih Lanjut</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="department-card">
              <div class="department-content">
                <div class="department-icon">
                  <i class="bi bi-lightbulb-fill"></i>
                </div>
                <h3>Gejala Kognitif <span class="text-muted">(Pemikiran)</span></h3>
                <p>Kesulitan konsentrasi, gangguan memori, dan masalah dalam mengambil keputusan atau merencanakan aktivitas.</p>
                <a href="{{ url('/about') }}#gejala-kognitif" class="btn-learn-more">
                  <span>Pelajari Lebih Lanjut</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Row 2: 2 Gejala Tambahan -->
        <div class="row gy-4 mb-4 justify-content-center">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="department-card">
              <div class="department-content">
                <div class="department-icon">
                  <i class="bi bi-shuffle"></i>
                </div>
                <h3>Gejala Disorganisasi <span class=""></span></h3>
                <p>Perilaku yang tidak terorganisir, bicara kacau, dan kesulitan dalam melakukan aktivitas sehari-hari secara terstruktur.</p>
                <a href="{{ url('/about') }}#gejala-disorganisasi" class="btn-learn-more">
                  <span>Pelajari Lebih Lanjut</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="department-card">
              <div class="department-content">
                <div class="department-icon">
                  <i class="bi bi-heart-fill"></i>
                </div>
                <h3>Gejala Afektif <span class="text-muted">(Suasana Hati)</span></h3>
                <p>Perubahan suasana hati yang ekstrem, depresi, dan kecemasan yang signifikan dan persisten.</p>
                <a href="{{ url('/about') }}#gejala-afektif" class="btn-learn-more">
                  <span>Pelajari Lebih Lanjut</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
           <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="200">
            <div class="department-card">
              <div class="department-content">
                <div class="department-icon">
                  <i class="bi bi-clock-history"></i>
                </div>
                <h3>Prodromal <span class="text-muted">(Tanda-tanda Awal)</span></h3>
                <p>Gejala awal sebelum onset penuh, seperti perubahan perilaku, penurunan fungsi sosial atau akademik.</p>
                <a href="{{ url('/about') }}#fase-prodromal" class="btn-learn-more">
                  <span>Pelajari Lebih Lanjut</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>

    </section>

@endsection