@extends('layouts.app')

@section('title', 'Panduan Jalur Pengobatan - SchizoCheck')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Info</a></li>
            <li class="breadcrumb-item active current">Panduan Jalur Pengobatan</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Panduan Jalur Pengobatan Skizofrenia</h1>
        <p>Alur pengobatan yang tepat menggunakan BPJS dengan biaya 100% gratis. Perawatan di rumah oleh keluarga adalah pilihan terbaik jika kondisi pasien masih terkendali.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Treatment Pathway Section -->
    <section id="services" class="services section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Section: Jalur Pengobatan BPJS -->
        <div class="section-title">
          <h2>Jalur Pengobatan BPJS (100% Gratis)</h2>
          <p>Ikuti langkah-langkah berikut untuk mendapatkan pengobatan skizofrenia secara gratis melalui BPJS.</p>
        </div>

        <div class="row g-4 mb-5" data-aos="fade-up" data-aos-delay="200">
          <!-- Step 1 -->
          <div class="col-lg-3 col-md-6">
            <div class="service-item step-card h-100">
              <div class="service-icon-wrapper">
                <i class="step-number">1</i>
              </div>
              <div class="service-details">
                <h5>Kunjungi Faskes 1</h5>
                <p>Bawa pasien ke Puskesmas atau Dokter Umum tempat BPJS terdaftar untuk pemeriksaan awal.</p>
                <ul class="service-benefits mt-2">
                  <li><i class="fa fa-check-circle"></i>Puskesmas terdekat</li>
                  <li><i class="fa fa-check-circle"></i>Klinik BPJS terdaftar</li>
                  <li><i class="fa fa-check-circle"></i>Bawa kartu BPJS</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="col-lg-3 col-md-6">
            <div class="service-item step-card h-100">
              <div class="service-icon-wrapper">
                <i class="step-number">2</i>
              </div>
              <div class="service-details">
                <h5>Minta Surat Rujukan</h5>
                <p>Jelaskan gejala dan minta rujukan ke dokter spesialis Psikiater (Sp.KJ).</p>
                <ul class="service-benefits mt-2">
                  <li><i class="fa fa-check-circle"></i>Rujukan ke Sp.KJ</li>
                  <li><i class="fa fa-check-circle"></i>RS rujukan terdekat</li>
                  <li><i class="fa fa-check-circle"></i>Gratis dengan BPJS</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="col-lg-3 col-md-6">
            <div class="service-item step-card h-100">
              <div class="service-icon-wrapper">
                <i class="step-number">3</i>
              </div>
              <div class="service-details">
                <h5>Konsultasi Psikiater</h5>
                <p>Datang ke RS rujukan, temui Psikiater (Sp.KJ) untuk diagnosis dan resep obat.</p>
                <ul class="service-benefits mt-2">
                  <li><i class="fa fa-check-circle"></i>Diagnosis profesional</li>
                  <li><i class="fa fa-check-circle"></i>Resep obat bulanan</li>
                  <li><i class="fa fa-check-circle"></i>Edukasi keluarga</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="col-lg-3 col-md-6">
            <div class="service-item step-card h-100">
              <div class="service-icon-wrapper">
                <i class="step-number">4</i>
              </div>
              <div class="service-details">
                <h5>Kontrol Rutin Bulanan</h5>
                <p>Lakukan kontrol setiap 1 bulan untuk evaluasi kondisi dan pengambilan obat.</p>
                <ul class="service-benefits mt-2">
                  <li><i class="fa fa-check-circle"></i>1 bulan sekali</li>
                  <li><i class="fa fa-check-circle"></i>Evaluasi kondisi</li>
                  <li><i class="fa fa-check-circle"></i>Obat gratis BPJS</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Section: Keuntungan Perawatan di Rumah -->
        <div class="section-title mb-4 mt-5">
          <h2>Keuntungan Perawatan di Rumah</h2>
          <p>Jika kondisi pasien masih terkendali, perawatan di rumah oleh keluarga adalah pilihan terbaik.</p>
        </div>

        <div class="row g-4 mb-5" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-6">
            <div class="service-item h-100">
              <div class="service-icon-wrapper">
                <i class="fa fa-hand-holding-heart"></i>
              </div>
              <div class="service-details">
                <h5>100% Gratis dengan BPJS</h5>
                <p>Semua biaya pengobatan termasuk konsultasi dan obat-obatan ditanggung penuh oleh BPJS Kesehatan.</p>
                <ul class="service-benefits mt-2">
                  <li><i class="fa fa-check-circle"></i>Konsultasi psikiater gratis</li>
                  <li><i class="fa fa-check-circle"></i>Obat antipsikotik gratis</li>
                  <li><i class="fa fa-check-circle"></i>Tanpa biaya tambahan</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="service-item h-100">
              <div class="service-icon-wrapper">
                <i class="fa fa-home"></i>
              </div>
              <div class="service-details">
                <h5>Lingkungan Familiar</h5>
                <p>Pasien berada di lingkungan yang dikenali dan nyaman, membantu proses pemulihan yang lebih baik.</p>
                <ul class="service-benefits mt-2">
                  <li><i class="fa fa-check-circle"></i>Mengurangi stres pasien</li>
                  <li><i class="fa fa-check-circle"></i>Rutinitas harian terjaga</li>
                  <li><i class="fa fa-check-circle"></i>Tidak perlu adaptasi tempat baru</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="service-item h-100">
              <div class="service-icon-wrapper">
                <i class="fa fa-users"></i>
              </div>
              <div class="service-details">
                <h5>Dukungan Keluarga Langsung</h5>
                <p>Keluarga sebagai support system utama dapat memantau kondisi dan memastikan kepatuhan minum obat.</p>
                <ul class="service-benefits mt-2">
                  <li><i class="fa fa-check-circle"></i>Pengawasan langsung 24 jam</li>
                  <li><i class="fa fa-check-circle"></i>Membantu rutinitas obat</li>
                  <li><i class="fa fa-check-circle"></i>Ikatan emosional terjaga</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="service-item h-100">
              <div class="service-icon-wrapper">
                <i class="fa fa-chart-line"></i>
              </div>
              <div class="service-details">
                <h5>Pemulihan Progresif</h5>
                <p>Dengan rutin minum obat dan kontrol bulanan, kondisi pasien dapat membaik secara signifikan.</p>
                <ul class="service-benefits mt-2">
                  <li><i class="fa fa-check-circle"></i>Gejala berkurang bertahap</li>
                  <li><i class="fa fa-check-circle"></i>Fungsi sosial membaik</li>
                  <li><i class="fa fa-check-circle"></i>Dapat kembali produktif</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Section: Kapan Harus ke RSJ? (Emergency) -->
        <div class="section-title mb-4 mt-5">
          <h2>Kapan Harus ke Rumah Sakit Jiwa?</h2>
          <p>RSJ hanya diperlukan untuk kondisi darurat. Jika masih terkendali, perawatan di rumah lebih disarankan.</p>
        </div>

        <div class="row g-4 mb-5" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-12">
            <div class="service-item emergency-highlight h-100">
              <div class="service-icon-wrapper">
                <i class="fa fa-exclamation-triangle"></i>
              </div>
              <div class="service-details">
                <h5>Kriteria Kondisi Darurat</h5>
                <p>Hubungi hotline kesehatan jiwa <strong>(119 ext 8)</strong> atau bawa ke RSJ terdekat jika:</p>
                <div class="row mt-3">
                  <div class="col-md-4">
                    <div class="emergency-item">
                      <i class="fa fa-user-injured text-danger"></i>
                      <h6>Membahayakan Diri Sendiri</h6>
                      <p>Pasien mencoba menyakiti diri sendiri atau ada pikiran untuk bunuh diri.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="emergency-item">
                      <i class="fa fa-users-slash text-danger"></i>
                      <h6>Membahayakan Orang Lain</h6>
                      <p>Pasien bersikap agresif, menyerang, atau mengancam orang sekitar.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="emergency-item">
                      <i class="fa fa-bolt text-danger"></i>
                      <h6>Tidak Terkendali</h6>
                      <p>Kondisi pasien tidak bisa ditangani oleh keluarga meski sudah minum obat.</p>
                    </div>
                  </div>
                </div>
                <div class="emergency-actions mt-4">
                  <a href="tel:119" class="btn-emergency"><i class="fa fa-phone"></i> Hotline 119 ext 8</a>
                  <a href="https://www.google.com/maps/search/rumah+sakit+jiwa+terdekat" target="_blank" class="btn-directions"><i class="fa fa-map-marker-alt"></i> Cari RSJ Terdekat</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Section: Tips Mencari RSJ
        <div class="row g-4" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-12">
            <div class="service-item h-100">
              <div class="service-icon-wrapper">
                <i class="fa fa-info-circle"></i>
              </div>
              <div class="service-details">
                <h5>Cara Mencari RS Jiwa di Daerah Anda</h5>
                <p>Karena setiap daerah memiliki RSJ yang berbeda, berikut cara mencari informasi RSJ terdekat:</p>
                <ul class="service-benefits mt-3">
                  <li><i class="fa fa-check-circle"></i><strong>Google Maps:</strong> Ketik "Rumah Sakit Jiwa" atau "RSJ" di aplikasi Google Maps</li>
                  <li><i class="fa fa-check-circle"></i><strong>Puskesmas:</strong> Tanyakan rekomendasi RSJ ke Puskesmas/Faskes 1 Anda</li>
                  <li><i class="fa fa-check-circle"></i><strong>Hotline 119:</strong> Hubungi 119 ext 8 untuk informasi RSJ di daerah Anda</li>
                  <li><i class="fa fa-check-circle"></i><strong>Dinas Kesehatan:</strong> Kunjungi website Dinkes provinsi Anda</li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->

      </div>

    </section><!-- /Services Section -->

  </main>

@endsection

@push('styles')
<style>
/* Step Number Styling - fix hover issue */
.services .service-icon-wrapper .step-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--accent-color);
    position: relative !important;
    z-index: 5 !important;
    transition: color 0.3s ease;
    display: block;
}

/* Make step number white when hovered - ensure visibility */
.services .service-item:hover .service-icon-wrapper .step-number,
.services .service-item.step-card:hover .service-icon-wrapper .step-number {
    color: #ffffff !important;
}

/* Emergency Item Styling */
.emergency-item {
    text-align: center;
    padding: 1.5rem;
    background: rgba(220, 53, 69, 0.05);
    border-radius: 12px;
    height: 100%;
}

.emergency-item i {
    font-size: 2rem;
    margin-bottom: 0.75rem;
    display: block;
}

.emergency-item h6 {
    font-weight: 600;
    color: #333;
    margin-bottom: 0.5rem;
}

.emergency-item p {
    font-size: 0.9rem;
    color: #666;
    margin: 0;
}

/* Section Title Styling */
/* Section Title Styling */
.section-title {
    text-align: center;
    margin-bottom: 3rem;
    position: relative;
}

.section-title h2 {
    font-size: 2rem;
    font-weight: 700;
    color: var(--heading-color);
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
    position: relative;
    display: inline-block;
}

.section-title p {
    margin-top: 0.5rem !important;
    margin-bottom: 0 !important;
}

/* Remove default blue underline from main.css if it exists via pseudo-element */
.section-title h2::after {
    content: none !important;
    display: none !important;
    text-decoration: none !important;
}

.section-title p {
    color: #666;
    max-width: 700px;
    margin: 0 auto;
    font-size: 1rem;
    line-height: 1.6;
}
</style>
@endpush

