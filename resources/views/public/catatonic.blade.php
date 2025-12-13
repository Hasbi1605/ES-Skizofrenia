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

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="service-details-content">
                    <img src="{{ asset('frontend/assets/img/health/orthopedics-4.webp') }}" alt="Skizofrenia Katatonik" class="img-fluid rounded-4 mb-4 w-100" style="object-fit: cover; max-height: 400px;">
                    
                    <h2 class="mb-4">Apa itu Skizofrenia Katatonik?</h2>
                    <p class="lead mb-4">Skizofrenia katatonik adalah bentuk skizofrenia yang ditandai dengan gangguan psikomotor yang ekstrem. Penderita bisa tampak tidak bergerak sama sekali (stupor) atau justru bergerak berlebihan tanpa tujuan (gaduh gelisah).</p>
                    
                    <p>Kondisi ini mempengaruhi kemampuan seseorang untuk bergerak dan berbicara secara normal. Penderita mungkin mempertahankan posisi tubuh yang aneh dalam waktu lama atau menolak untuk mengikuti instruksi (negativisme).</p>

                    <div class="content-highlight p-4 my-4 rounded-3 border-start border-5" style="background-color: var(--surface-color); border-color: var(--accent-color) !important; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <h4 style="color: var(--accent-color);"><i class="bi bi-lightbulb me-2"></i>Ciri Khas Utama</h4>
                        <p class="mb-0">Gangguan nyata pada fungsi motorik. Bisa berupa imobilitas total (kaku seperti patung) atau aktivitas motorik yang berlebihan dan tidak bertujuan.</p>
                    </div>

                    <h3 class="mt-5 mb-3">Gejala Dominan</h3>
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-box rounded-circle p-3 me-3" style="background-color: color-mix(in srgb, var(--accent-color), transparent 90%); color: var(--accent-color);">
                                            <i class="bi bi-person-standing fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0 fw-bold" style="color: var(--heading-color);">Stupor & Mutisme</h5>
                                    </div>
                                    <p class="card-text text-muted">Penurunan reaktivitas terhadap lingkungan.
                                        <ul class="mt-2 mb-0 ps-3">
                                            <li>Tidak bergerak sama sekali.</li>
                                            <li>Tidak merespon saat diajak bicara (mutisme).</li>
                                            <li>Menatap kosong.</li>
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
                                            <i class="bi bi-arrow-repeat fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0 fw-bold" style="color: var(--heading-color);">Echolalia & Echopraxia</h5>
                                    </div>
                                    <p class="card-text text-muted">Perilaku meniru tanpa sadar.
                                        <ul class="mt-2 mb-0 ps-3">
                                            <li>Mengulangi ucapan orang lain (Echolalia).</li>
                                            <li>Meniru gerakan orang lain (Echopraxia).</li>
                                            <li>Fleksibilitas waxy (mempertahankan posisi tubuh).</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5 mb-3">Dampak pada Kehidupan</h3>
                    <p>Kondisi katatonik bisa berbahaya secara fisik. Jika penderita tidak bergerak atau makan dalam waktu lama, mereka berisiko mengalami malnutrisi, dehidrasi, atau pembekuan darah. Sebaliknya, fase gaduh gelisah bisa menyebabkan kelelahan ekstrem atau cedera.</p>

                    <h3 class="mt-5 mb-3">Penanganan & Terapi</h3>
                    <p>Penanganan skizofrenia katatonik seringkali memerlukan intervensi medis segera, terutama jika kondisi fisik pasien terancam.</p>
                    
                    <div class="accordion mt-4" id="treatmentAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <i class="bi bi-capsule me-2" style="color: var(--accent-color);"></i> Benzodiazepine
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#treatmentAccordion">
                                <div class="accordion-body">
                                    Obat golongan benzodiazepine (seperti lorazepam) sering menjadi lini pertama pengobatan untuk meredakan gejala katatonia dengan cepat.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    <i class="bi bi-lightning-charge me-2" style="color: var(--accent-color);"></i> Terapi Kejang Listrik (ECT)
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
                                    <i class="bi bi-heart-pulse me-2" style="color: var(--accent-color);"></i> Perawatan Fisik Intensif
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                <div class="accordion-body">
                                    Pemantauan tanda vital, asupan cairan, dan nutrisi sangat penting untuk mencegah komplikasi fisik akibat imobilitas atau hiperaktivitas.
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
                            <a href="{{ url('/residual') }}" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                Skizofrenia Residual <i class="bi bi-arrow-right small"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                Tak Terinci <i class="bi bi-arrow-right small"></i>
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
