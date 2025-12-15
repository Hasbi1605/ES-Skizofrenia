@extends('layouts.app')

@section('title', 'Skizofrenia Residual - SchizoCheck')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/types') }}">Jenis Skizofrenia</a></li>
            <li class="breadcrumb-item active current">Skizofrenia Residual</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Skizofrenia Residual</h1>
        <p>Memahami fase lanjutan di mana gejala positif mereda namun gejala negatif masih menetap.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Residual Detail Section -->
    <section id="residual-detail" class="services section">

      <div class="container">

        <div class="row gy-5">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="service-details-content">
                    <img src="{{ asset('frontend/assets/img/health/cardiology-2.webp') }}" alt="Skizofrenia Residual" class="img-fluid rounded-4 mb-5 w-100" style="object-fit: cover; max-height: 400px;">
                    
                    <!-- Introduction -->
                    <article class="content-article">
                        <h2 class="section-heading">Apa itu Skizofrenia Residual?</h2>
                        
                        <p class="lead-text">
                            Skizofrenia residual adalah kondisi di mana penderita memiliki riwayat setidaknya satu <strong>episode psikotik</strong> di masa lalu, namun saat ini gejala-gejala positif tersebut sudah tidak menonjol atau bahkan hilang sama sekali.
                        </p>
                        
                        <p class="body-text">
                            Meskipun gejala "gaduh gelisah" sudah mereda, penderita masih menunjukkan tanda-tanda gangguan berupa gejala negatif yang persisten. Fase ini sering dianggap sebagai fase kronis atau fase sisa dari penyakit skizofrenia.
                        </p>
                    </article>

                    <!-- Highlight Box -->
                    <div class="highlight-box">
                        <div class="highlight-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <div class="highlight-content">
                            <h4>Ciri Khas Utama</h4>
                            <p>
                                <strong>Dominasi gejala negatif</strong> seperti penarikan diri dari lingkungan sosial, emosi yang tumpul, dan kurangnya motivasi atau inisiatif untuk melakukan aktivitas.
                            </p>
                        </div>
                    </div>

                    <!-- Symptoms Section -->
                    <article class="content-article">
                        <h3 class="section-heading">Gejala Dominan</h3>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="symptom-card">
                                    <div class="symptom-header">
                                        <div class="symptom-icon">
                                            <i class="bi bi-person-dash"></i>
                                        </div>
                                        <h5>Penarikan Sosial</h5>
                                    </div>
                                    <p class="symptom-desc">
                                        Hilangnya minat untuk berinteraksi dengan orang lain:
                                    </p>
                                    <ul class="symptom-list">
                                        <li>Lebih suka menyendiri</li>
                                        <li>Menghindari kontak mata</li>
                                        <li>Kurang responsif secara emosional</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="symptom-card">
                                    <div class="symptom-header">
                                        <div class="symptom-icon">
                                            <i class="bi bi-battery-half"></i>
                                        </div>
                                        <h5>Avolisi (Kurang Motivasi)</h5>
                                    </div>
                                    <p class="symptom-desc">
                                        Hilangnya dorongan untuk melakukan aktivitas:
                                    </p>
                                    <ul class="symptom-list">
                                        <li>Malas mandi atau merawat diri</li>
                                        <li>Sulit memulai pekerjaan</li>
                                        <li>Pasif dan apatis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Impact Section -->
                    <article class="content-article">
                        <h3 class="section-heading">Dampak pada Kehidupan</h3>
                        <p class="body-text">
                            Karena gejala utamanya adalah pasif dan kurang motivasi, penderita skizofrenia residual seringkali kesulitan mempertahankan pekerjaan atau menyelesaikan pendidikan. Mereka mungkin terlihat <strong>"malas" bagi orang awam</strong>, padahal ini adalah bagian dari gejala penyakitnya.
                        </p>
                    </article>

                    <!-- Treatment Section -->
                    <article class="content-article">
                        <h3 class="section-heading">Penanganan & Terapi</h3>
                        <p class="body-text">
                            Fokus pengobatan pada fase ini bergeser dari meredakan gejala psikotik menjadi <strong>rehabilitasi fungsi sosial dan kognitif</strong>.
                        </p>
                        
                        <div class="accordion treatment-accordion" id="treatmentAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <i class="bi bi-capsule me-2"></i> Pemeliharaan Obat
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Dosis antipsikotik mungkin disesuaikan (dosis pemeliharaan) untuk mencegah kambuhnya gejala positif (relapse prevention).
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        <i class="bi bi-people me-2"></i> Terapi Okupasi
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Membantu pasien melatih kembali keterampilan sehari-hari dan keterampilan kerja agar bisa kembali produktif secara bertahap.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        <i class="bi bi-sun me-2"></i> Aktivasi Perilaku
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Mendorong pasien untuk melakukan aktivitas terjadwal yang menyenangkan atau memberikan rasa pencapaian untuk melawan apati.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar-sticky">
                    <!-- Other Types -->
                    <div class="services-list-sidebar" style="background: var(--surface-color); padding: 30px; border-radius: 15px; box-shadow: 0 0 20px rgba(0,0,0,0.05); border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%); margin-bottom: 1.5rem;">
                        <h4 class="mb-4" style="color: var(--heading-color); font-weight: 700;">Jenis Lainnya</h4>
                        <ul class="list-unstyled m-0">
                            <li class="mb-3 pb-3 border-bottom" style="border-color: color-mix(in srgb, var(--default-color), transparent 90%);">
                                <a href="{{ url('/paranoid') }}" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                    Skizofrenia Paranoid <i class="bi bi-arrow-right small"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-3 border-bottom" style="border-color: color-mix(in srgb, var(--default-color), transparent 90%);">
                                <a href="{{ url('/hebephrenic') }}" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                    Skizofrenia Hebeferenik <i class="bi bi-arrow-right small"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-3 border-bottom" style="border-color: color-mix(in srgb, var(--default-color), transparent 90%);">
                                <a href="{{ url('/catatonic') }}" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                    Skizofrenia Katatonik <i class="bi bi-arrow-right small"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/undifferentiated') }}" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                    Tak Terinci <i class="bi bi-arrow-right small"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- CTA Box -->
                    <div class="sidebar-cta">
                        <i class="bi bi-clipboard2-pulse"></i>
                        <h4>Cek Risiko Anda</h4>
                        <p>Lakukan screening awal untuk mengetahui risiko skizofrenia.</p>
                        <a href="{{ url('/screening') }}" class="btn btn-light">Mulai Screening</a>
                    </div>
                </div>
            </div>

        </div>

      </div>

    </section>

</main>

@include('public.partials.detail-styles')

@endsection
