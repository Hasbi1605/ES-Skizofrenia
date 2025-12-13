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

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="service-details-content">
                    <img src="{{ asset('frontend/assets/img/health/cardiology-2.webp') }}" alt="Skizofrenia Residual" class="img-fluid rounded-4 mb-4 w-100" style="object-fit: cover; max-height: 400px;">
                    
                    <h2 class="mb-4">Apa itu Skizofrenia Residual?</h2>
                    <p class="lead mb-4">Skizofrenia residual adalah kondisi di mana penderita memiliki riwayat setidaknya satu episode psikotik (seperti delusi atau halusinasi) di masa lalu, namun saat ini gejala-gejala positif tersebut sudah tidak menonjol atau bahkan hilang sama sekali.</p>
                    
                    <p>Meskipun gejala "gaduh gelisah" sudah mereda, penderita masih menunjukkan tanda-tanda gangguan berupa gejala negatif yang persisten. Fase ini sering dianggap sebagai fase kronis atau fase sisa dari penyakit skizofrenia.</p>

                    <div class="content-highlight p-4 my-4 rounded-3 border-start border-5" style="background-color: var(--surface-color); border-color: var(--accent-color) !important; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <h4 style="color: var(--accent-color);"><i class="bi bi-lightbulb me-2"></i>Ciri Khas Utama</h4>
                        <p class="mb-0">Dominasi gejala negatif seperti penarikan diri dari lingkungan sosial, emosi yang tumpul, dan kurangnya motivasi atau inisiatif untuk melakukan aktivitas.</p>
                    </div>

                    <h3 class="mt-5 mb-3">Gejala Dominan</h3>
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-box rounded-circle p-3 me-3" style="background-color: color-mix(in srgb, var(--accent-color), transparent 90%); color: var(--accent-color);">
                                            <i class="bi bi-person-dash fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0 fw-bold" style="color: var(--heading-color);">Penarikan Sosial</h5>
                                    </div>
                                    <p class="card-text text-muted">Hilangnya minat untuk berinteraksi dengan orang lain.
                                        <ul class="mt-2 mb-0 ps-3">
                                            <li>Lebih suka menyendiri.</li>
                                            <li>Menghindari kontak mata.</li>
                                            <li>Kurang responsif secara emosional.</li>
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
                                            <i class="bi bi-battery-half fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0 fw-bold" style="color: var(--heading-color);">Avolisi (Kurang Motivasi)</h5>
                                    </div>
                                    <p class="card-text text-muted">Hilangnya dorongan untuk melakukan aktivitas yang bertujuan.
                                        <ul class="mt-2 mb-0 ps-3">
                                            <li>Malas mandi atau merawat diri.</li>
                                            <li>Sulit memulai pekerjaan.</li>
                                            <li>Pasif dan apatis.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5 mb-3">Dampak pada Kehidupan</h3>
                    <p>Karena gejala utamanya adalah pasif dan kurang motivasi, penderita skizofrenia residual seringkali kesulitan mempertahankan pekerjaan atau menyelesaikan pendidikan. Mereka mungkin terlihat "malas" bagi orang awam, padahal ini adalah bagian dari gejala penyakitnya.</p>

                    <h3 class="mt-5 mb-3">Penanganan & Terapi</h3>
                    <p>Fokus pengobatan pada fase ini bergeser dari meredakan gejala psikotik menjadi rehabilitasi fungsi sosial dan kognitif.</p>
                    
                    <div class="accordion mt-4" id="treatmentAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <i class="bi bi-capsule me-2" style="color: var(--accent-color);"></i> Pemeliharaan Obat
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#treatmentAccordion">
                                <div class="accordion-body">
                                    Dosis antipsikotik mungkin disesuaikan (dosis pemeliharaan) untuk mencegah kambuhnya gejala positif (relapse prevention).
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    <i class="bi bi-people me-2" style="color: var(--accent-color);"></i> Terapi Okupasi
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
                                    <i class="bi bi-sun me-2" style="color: var(--accent-color);"></i> Aktivasi Perilaku
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                <div class="accordion-body">
                                    Mendorong pasien untuk melakukan aktivitas terjadwal yang menyenangkan atau memberikan rasa pencapaian untuk melawan apati.
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
                            <a href="#" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                Skizofrenia Katatonik <i class="bi bi-arrow-right small"></i>
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
