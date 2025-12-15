@extends('layouts.app')

@section('title', 'Skizofrenia Katatonik - SchizoCheck')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/types') }}">Jenis Skizofrenia</a></li>
            <li class="breadcrumb-item active current">Skizofrenia Katatonik</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Skizofrenia Katatonik</h1>
        <p>Memahami tipe skizofrenia yang mempengaruhi gerak tubuh dan respon fisik.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Catatonic Detail Section -->
    <section id="catatonic-detail" class="services section">

      <div class="container">

        <div class="row gy-5">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="service-details-content">
                    <img src="{{ asset('frontend/assets/img/health/orthopedics-4.webp') }}" alt="Skizofrenia Katatonik" class="img-fluid rounded-4 mb-5 w-100" style="object-fit: cover; max-height: 400px;">
                    
                    <!-- Introduction -->
                    <article class="content-article">
                        <h2 class="section-heading">Apa itu Skizofrenia Katatonik?</h2>
                        
                        <p class="lead-text">
                            Skizofrenia katatonik adalah bentuk skizofrenia yang ditandai dengan <strong>gangguan psikomotor yang ekstrem</strong>. Penderita bisa tampak tidak bergerak sama sekali (stupor) atau justru bergerak berlebihan tanpa tujuan.
                        </p>
                        
                        <p class="body-text">
                            Kondisi ini mempengaruhi kemampuan seseorang untuk bergerak dan berbicara secara normal. Penderita mungkin mempertahankan posisi tubuh yang aneh dalam waktu lama atau menolak untuk mengikuti instruksi (negativisme).
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
                                <strong>Gangguan nyata pada fungsi motorik.</strong> Bisa berupa imobilitas total (kaku seperti patung) atau aktivitas motorik yang berlebihan dan tidak bertujuan.
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
                                            <i class="bi bi-person-standing"></i>
                                        </div>
                                        <h5>Stupor & Mutisme</h5>
                                    </div>
                                    <p class="symptom-desc">
                                        Penurunan reaktivitas terhadap lingkungan:
                                    </p>
                                    <ul class="symptom-list">
                                        <li>Tidak bergerak sama sekali</li>
                                        <li>Tidak merespon saat diajak bicara (mutisme)</li>
                                        <li>Menatap kosong</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="symptom-card">
                                    <div class="symptom-header">
                                        <div class="symptom-icon">
                                            <i class="bi bi-arrow-repeat"></i>
                                        </div>
                                        <h5>Echolalia & Echopraxia</h5>
                                    </div>
                                    <p class="symptom-desc">
                                        Perilaku meniru tanpa sadar:
                                    </p>
                                    <ul class="symptom-list">
                                        <li>Mengulangi ucapan orang lain (Echolalia)</li>
                                        <li>Meniru gerakan orang lain (Echopraxia)</li>
                                        <li>Fleksibilitas waxy (mempertahankan posisi tubuh)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Impact Section -->
                    <article class="content-article">
                        <h3 class="section-heading">Dampak pada Kehidupan</h3>
                        <p class="body-text">
                            Kondisi katatonik bisa <strong>berbahaya secara fisik</strong>. Jika penderita tidak bergerak atau makan dalam waktu lama, mereka berisiko mengalami malnutrisi, dehidrasi, atau pembekuan darah. Sebaliknya, fase gaduh gelisah bisa menyebabkan kelelahan ekstrem atau cedera.
                        </p>
                    </article>

                    <!-- Treatment Section -->
                    <article class="content-article">
                        <h3 class="section-heading">Penanganan & Terapi</h3>
                        <p class="body-text">
                            Penanganan skizofrenia katatonik seringkali memerlukan <strong>intervensi medis segera</strong>, terutama jika kondisi fisik pasien terancam.
                        </p>
                        
                        <div class="accordion treatment-accordion" id="treatmentAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <i class="bi bi-capsule me-2"></i> Benzodiazepine
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Obat golongan benzodiazepine (seperti lorazepam) sering menjadi lini pertama pengobatan untuk meredakan gejala katatonia dengan cepat.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        <i class="bi bi-lightning-charge me-2"></i> Terapi Kejang Listrik (ECT)
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Jika obat tidak efektif atau kondisi pasien mengancam nyawa (misal: menolak makan total), ECT terbukti sangat efektif untuk mengatasi katatonia.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        <i class="bi bi-heart-pulse me-2"></i> Perawatan Fisik Intensif
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Pemantauan tanda vital, asupan cairan, dan nutrisi sangat penting untuk mencegah komplikasi fisik akibat imobilitas atau hiperaktivitas.
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
                                <a href="{{ url('/residual') }}" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                    Skizofrenia Residual <i class="bi bi-arrow-right small"></i>
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
