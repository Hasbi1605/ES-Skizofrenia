@extends('layouts.app')

@section('title', 'Skizofrenia Tak Terinci - SchizoCheck')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/types') }}">Jenis Skizofrenia</a></li>
            <li class="breadcrumb-item active current">Skizofrenia Tak Terinci</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Skizofrenia Tak Terinci</h1>
        <p>Memahami tipe skizofrenia dengan gejala campuran atau yang tidak memenuhi kriteria tipe spesifik lainnya.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Undifferentiated Detail Section -->
    <section id="undifferentiated-detail" class="services section">

      <div class="container">

        <div class="row gy-5">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="service-details-content">
                    <img src="{{ asset('frontend/assets/img/health/dermatology-3.webp') }}" alt="Skizofrenia Tak Terinci" class="img-fluid rounded-4 mb-5 w-100" style="object-fit: cover; max-height: 400px;">
                    
                    <!-- Introduction -->
                    <article class="content-article">
                        <h2 class="section-heading">Apa itu Skizofrenia Tak Terinci?</h2>
                        
                        <p class="lead-text">
                            Skizofrenia tak terinci (undifferentiated schizophrenia) adalah diagnosis yang diberikan ketika seseorang menunjukkan gejala-gejala skizofrenia yang jelas, namun <strong>tidak memenuhi kriteria lengkap</strong> untuk dikategorikan ke dalam tipe paranoid, hebeferenik, atau katatonik.
                        </p>
                        
                        <p class="body-text">
                            Tipe ini seringkali dianggap sebagai "kategori penampungan" untuk kasus-kasus yang memiliki gejala campuran. Misalnya, seseorang mungkin memiliki delusi (seperti pada tipe paranoid) dan juga menunjukkan emosi yang datar (seperti pada tipe hebeferenik), namun tidak cukup dominan untuk masuk ke salah satu kategori tersebut secara eksklusif.
                        </p>
                    </article>

                    <!-- Highlight Box -->
                    <div class="highlight-box">
                        <div class="highlight-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <div class="highlight-content">
                            <h4>Karakteristik Utama</h4>
                            <p>
                                Gejala yang muncul sangat <strong>bervariasi</strong> dan seringkali merupakan kombinasi dari berbagai tipe skizofrenia lainnya, membuat gambaran klinisnya menjadi unik untuk setiap individu.
                            </p>
                        </div>
                    </div>

                    <!-- Symptoms Section -->
                    <article class="content-article">
                        <h3 class="section-heading">Gejala yang Mungkin Muncul</h3>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="symptom-card">
                                    <div class="symptom-header">
                                        <div class="symptom-icon">
                                            <i class="bi bi-shuffle"></i>
                                        </div>
                                        <h5>Gejala Campuran</h5>
                                    </div>
                                    <p class="symptom-desc">
                                        Kombinasi gejala dari tipe lain tanpa ada yang mendominasi:
                                    </p>
                                    <ul class="symptom-list">
                                        <li>Adanya waham atau halusinasi</li>
                                        <li>Bicara atau perilaku yang tidak teratur</li>
                                        <li>Gejala negatif (menarik diri, afek datar)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="symptom-card">
                                    <div class="symptom-header">
                                        <div class="symptom-icon">
                                            <i class="bi bi-clipboard-data"></i>
                                        </div>
                                        <h5>Diagnosis Awal</h5>
                                    </div>
                                    <p class="symptom-desc">
                                        Sering menjadi diagnosis sementara:
                                    </p>
                                    <ul class="symptom-list">
                                        <li>Fase awal penyakit sebelum gejala spesifik muncul</li>
                                        <li>Masa transisi antar episode</li>
                                        <li>Gejala yang berubah-ubah seiring waktu</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Treatment Section -->
                    <article class="content-article">
                        <h3 class="section-heading">Tantangan & Penanganan</h3>
                        <p class="body-text">
                            Karena gejalanya yang beragam, pendekatan pengobatan harus sangat <strong>personal (tailored)</strong> sesuai dengan gejala yang paling mengganggu pasien saat itu.
                        </p>
                        
                        <div class="accordion treatment-accordion" id="treatmentAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <i class="bi bi-capsule me-2"></i> Pengobatan Simtomatik
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Dokter akan meresepkan antipsikotik yang disesuaikan dengan profil gejala pasien, apakah lebih dominan gejala positif (halusinasi) atau gejala negatif.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        <i class="bi bi-search me-2"></i> Evaluasi Berkala
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Penting untuk melakukan evaluasi rutin karena diagnosis bisa berubah menjadi tipe yang lebih spesifik seiring berjalannya waktu dan perkembangan gejala.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        <i class="bi bi-heart-pulse me-2"></i> Rehabilitasi Psikososial
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Pelatihan keterampilan sosial dan vokasional membantu pasien untuk tetap berfungsi dalam masyarakat meskipun memiliki gejala yang kompleks.
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
                                <a href="{{ url('/residual') }}" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                    Skizofrenia Residual <i class="bi bi-arrow-right small"></i>
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
