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

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="service-details-content">
                    <img src="{{ asset('frontend/assets/img/health/dermatology-3.webp') }}" alt="Skizofrenia Tak Terinci" class="img-fluid rounded-4 mb-4 w-100" style="object-fit: cover; max-height: 400px;">
                    
                    <h2 class="mb-4">Apa itu Skizofrenia Tak Terinci?</h2>
                    <p class="lead mb-4">Skizofrenia tak terinci (undifferentiated schizophrenia) adalah diagnosis yang diberikan ketika seseorang menunjukkan gejala-gejala skizofrenia yang jelas, namun tidak memenuhi kriteria lengkap untuk dikategorikan ke dalam tipe paranoid, hebeferenik, atau katatonik.</p>
                    
                    <p>Tipe ini seringkali dianggap sebagai "kategori penampungan" untuk kasus-kasus yang memiliki gejala campuran. Misalnya, seseorang mungkin memiliki delusi (seperti pada tipe paranoid) dan juga menunjukkan emosi yang datar (seperti pada tipe hebeferenik), namun tidak cukup dominan untuk masuk ke salah satu kategori tersebut secara eksklusif.</p>

                    <div class="content-highlight p-4 my-4 rounded-3 border-start border-5" style="background-color: var(--surface-color); border-color: var(--accent-color) !important; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <h4 style="color: var(--accent-color);"><i class="bi bi-lightbulb me-2"></i>Karakteristik Utama</h4>
                        <p class="mb-0">Gejala yang muncul sangat bervariasi dan seringkali merupakan kombinasi dari berbagai tipe skizofrenia lainnya, membuat gambaran klinisnya menjadi unik untuk setiap individu.</p>
                    </div>

                    <h3 class="mt-5 mb-3">Gejala yang Mungkin Muncul</h3>
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-box rounded-circle p-3 me-3" style="background-color: color-mix(in srgb, var(--accent-color), transparent 90%); color: var(--accent-color);">
                                            <i class="bi bi-shuffle fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0 fw-bold" style="color: var(--heading-color);">Gejala Campuran</h5>
                                    </div>
                                    <p class="card-text text-muted">Kombinasi gejala dari tipe lain tanpa ada yang mendominasi secara mutlak.
                                        <ul class="mt-2 mb-0 ps-3">
                                            <li>Adanya waham atau halusinasi.</li>
                                            <li>Bicara atau perilaku yang tidak teratur.</li>
                                            <li>Gejala negatif (menarik diri, afek datar).</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-box rounded-circle p-3 me-3" style="background-color: color-mix(in srgb, var(--accent-color), transparent 90%); color: var(--accent-color);">
                                            <i class="bi bi-clipboard-data fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0 fw-bold" style="color: var(--heading-color);">Diagnosis Awal</h5>
                                    </div>
                                    <p class="card-text text-muted">Sering menjadi diagnosis sementara.
                                        <ul class="mt-2 mb-0 ps-3">
                                            <li>Fase awal penyakit sebelum gejala spesifik muncul.</li>
                                            <li>Masa transisi antar episode.</li>
                                            <li>Gejala yang berubah-ubah seiring waktu.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5 mb-3">Tantangan & Penanganan</h3>
                    <p>Karena gejalanya yang beragam, pendekatan pengobatan harus sangat personal (tailored) sesuai dengan gejala yang paling mengganggu pasien saat itu.</p>
                    
                    <div class="accordion mt-4" id="treatmentAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <i class="bi bi-capsule me-2" style="color: var(--accent-color);"></i> Pengobatan Simtomatik
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
                                    <i class="bi bi-search me-2" style="color: var(--accent-color);"></i> Evaluasi Berkala
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
                                    <i class="bi bi-heart-pulse me-2" style="color: var(--accent-color);"></i> Rehabilitasi Psikososial
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                <div class="accordion-body">
                                    Pelatihan keterampilan sosial dan vokasional membantu pasien untuk tetap berfungsi dalam masyarakat meskipun memiliki gejala yang kompleks.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Sidebar content styled to match -->
                <div class="services-list-sidebar" style="background: var(--surface-color); padding: 30px; border-radius: 15px; box-shadow: 0 0 20px rgba(0,0,0,0.05); border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);">
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

                <div class="mt-4 p-4 rounded-4 text-center text-white" style="background: var(--accent-color);">
                    <i class="bi bi-clipboard2-pulse fs-1 mb-3"></i>
                    <h4 class="text-white mb-3">Cek Risiko Anda</h4>
                    <p class="small mb-4 text-white-50">Lakukan screening awal untuk mengetahui risiko skizofrenia.</p>
                    <a href="{{ url('/screening') }}" class="btn btn-light w-100 rounded-pill fw-bold" style="color: var(--accent-color);">Mulai Screening</a>
                </div>
            </div>

        </div>

      </div>

    </section>

</main>

@endsection
