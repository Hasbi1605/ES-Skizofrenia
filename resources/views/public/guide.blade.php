@extends('layouts.app')

@section('title', 'Panduan & Fitur - SchizoCheck')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Info</a></li>
            <li class="breadcrumb-item active current">Panduan & Fitur</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Panduan & Fitur Aplikasi</h1>
        <p>Memahami cara kerja sistem pakar dan fitur-fitur yang tersedia untuk membantu deteksi dini.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="services-tabs">
          <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="200">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="services-guide-tab" data-bs-toggle="tab" data-bs-target="#services-guide" type="button" role="tab">Panduan Diagnosis</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="services-method-tab" data-bs-toggle="tab" data-bs-target="#services-method" type="button" role="tab">Metode Pakar</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="services-privacy-tab" data-bs-toggle="tab" data-bs-target="#services-privacy" type="button" role="tab">Privasi Data</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="services-disclaimer-tab" data-bs-toggle="tab" data-bs-target="#services-disclaimer" type="button" role="tab">Disclaimer Medis</button>
            </li>
          </ul>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

            <!-- Tab 1: Panduan Diagnosis -->
            <div class="tab-pane fade show active" id="services-guide" role="tabpanel">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-list-ol"></i>
                    </div>
                    <div class="service-details">
                      <h5>1. Jawab Pertanyaan Gejala</h5>
                      <p>Sistem akan menampilkan serangkaian pertanyaan terkait gejala yang dialami. Jawablah dengan jujur sesuai kondisi.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Pertanyaan mudah dipahami</li>
                        <li><i class="fa fa-check-circle"></i>Pilihan jawaban Ya/Tidak</li>
                        <li><i class="fa fa-check-circle"></i>Mencakup semua kategori gejala</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-sliders-h"></i>
                    </div>
                    <div class="service-details">
                      <h5>2. Tentukan Tingkat Keyakinan</h5>
                      <p>Untuk setiap gejala yang dipilih, Anda diminta menentukan seberapa yakin Anda mengalami gejala tersebut.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Skala keyakinan (Certainty Factor)</li>
                        <li><i class="fa fa-check-circle"></i>Mempengaruhi hasil akhir</li>
                        <li><i class="fa fa-check-circle"></i>Akurasi lebih tinggi</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-cogs"></i>
                    </div>
                    <div class="service-details">
                      <h5>3. Proses Analisis Sistem</h5>
                      <p>Sistem akan memproses jawaban Anda menggunakan metode Forward Chaining untuk mencocokkan dengan basis aturan.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Proses instan</li>
                        <li><i class="fa fa-check-circle"></i>Analisis komprehensif</li>
                        <li><i class="fa fa-check-circle"></i>Berbasis data pakar</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-file-medical-alt"></i>
                    </div>
                    <div class="service-details">
                      <h5>4. Hasil Diagnosis</h5>
                      <p>Anda akan menerima hasil diagnosis beserta persentase kemungkinan dan saran penanganan awal.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Nama jenis skizofrenia</li>
                        <li><i class="fa fa-check-circle"></i>Persentase keyakinan</li>
                        <li><i class="fa fa-check-circle"></i>Saran tindakan lanjut</li>
                      </ul>
                      <a href="{{ url('/appointment') }}" class="service-link">
                        <span>Mulai Diagnosis Sekarang</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tab 2: Metode Pakar -->
            <div class="tab-pane fade" id="services-method" role="tabpanel">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="service-item featured">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-project-diagram"></i>
                    </div>
                    <div class="service-details">
                      <h5>Forward Chaining</h5>
                      <p>Metode pelacakan ke depan yang dimulai dari sekumpulan fakta (gejala) menuju kesimpulan (diagnosis).</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Data Driven: Berbasis fakta yang ada</li>
                        <li><i class="fa fa-check-circle"></i>Logis: Mengikuti aturan IF-THEN</li>
                        <li><i class="fa fa-check-circle"></i>Efisien untuk diagnosis medis</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-percentage"></i>
                    </div>
                    <div class="service-details">
                      <h5>Certainty Factor (CF)</h5>
                      <p>Metode untuk mengakomodasi ketidakpastian pemikiran seorang pakar. Mengukur tingkat keyakinan terhadap suatu fakta.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Nilai -1 sampai +1</li>
                        <li><i class="fa fa-check-circle"></i>Menggabungkan keyakinan user & pakar</li>
                        <li><i class="fa fa-check-circle"></i>Hasil lebih nuansa daripada Ya/Tidak</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tab 3: Privasi Data -->
            <div class="tab-pane fade" id="services-privacy" role="tabpanel">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-user-shield"></i>
                    </div>
                    <div class="service-details">
                      <h5>Komitmen Privasi Kami</h5>
                      <p>Kami memahami bahwa kesehatan mental adalah hal yang sangat pribadi. Oleh karena itu, aplikasi ini didesain dengan prinsip privasi:</p>
                      <ul class="service-benefits mt-3">
                        <li><i class="fa fa-lock"></i> <strong>Anonimitas:</strong> Anda tidak perlu memasukkan nama asli atau identitas kependudukan (KTP) untuk melakukan tes.</li>
                        <li><i class="fa fa-database"></i> <strong>Keamanan Data:</strong> Data gejala yang Anda masukkan hanya diproses untuk keperluan diagnosis saat itu juga.</li>
                        <li><i class="fa fa-user-secret"></i> <strong>Tanpa Rekam Medis Publik:</strong> Hasil tes Anda tidak terhubung dengan database rumah sakit atau asuransi manapun.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tab 4: Disclaimer -->
            <div class="tab-pane fade" id="services-disclaimer" role="tabpanel">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="service-item emergency-highlight">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <div class="service-details">
                      <h5>Penting Untuk Diketahui</h5>
                      <p>Aplikasi Sistem Pakar ini adalah alat bantu <strong>screening awal</strong> dan bukan pengganti diagnosis medis profesional.</p>
                      <ul class="service-benefits mt-3">
                        <li><i class="fa fa-info-circle"></i> Hasil diagnosis sistem ini didasarkan pada algoritma komputer.</li>
                        <li><i class="fa fa-info-circle"></i> Diagnosis pasti hanya dapat ditegakkan oleh Psikiater atau Psikolog Klinis melalui pemeriksaan langsung.</li>
                        <li><i class="fa fa-info-circle"></i> Jika hasil menunjukkan risiko tinggi, segera hubungi profesional kesehatan terdekat.</li>
                      </ul>
                      <div class="emergency-actions mt-4">
                        <a href="{{ url('/doctors') }}" class="btn-emergency">
                          <i class="fa fa-user-md"></i>
                          <span>Cari Dokter Terdekat</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /Services Section -->

  </main>

  @endsection