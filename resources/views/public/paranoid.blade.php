@extends('layouts.app')

@section('title', 'Skizofrenia Paranoid - SchizoCheck')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/types') }}">Jenis Skizofrenia</a></li>
            <li class="breadcrumb-item active current">Skizofrenia Paranoid</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Skizofrenia Paranoid</h1>
        <p>Memahami tipe skizofrenia yang paling umum: Gejala, Penyebab, dan Penanganan.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Paranoid Detail Section -->
    <section id="paranoid-detail" class="services section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="service-details-content">
                    <img src="{{ asset('frontend/assets/img/health/neurology-4.webp') }}" alt="Skizofrenia Paranoid" class="img-fluid rounded-4 mb-4 w-100" style="object-fit: cover; max-height: 400px;">
                    
                    <h2 class="mb-4">Apa itu Skizofrenia Paranoid?</h2>
                    <p class="lead mb-4">Skizofrenia paranoid adalah subtipe skizofrenia yang paling umum ditemui. Karakteristik utamanya adalah adanya delusi (waham) dan halusinasi pendengaran yang menonjol, sementara fungsi kognitif dan afek (emosi) relatif lebih terjaga dibandingkan tipe lainnya.</p>
                    
                    <p>Penderita skizofrenia paranoid seringkali merasa diawasi, dikejar, atau dicurigai oleh orang lain (waham kejar). Mereka mungkin mendengar suara-suara yang mengancam atau memberikan perintah, yang bagi mereka terasa sangat nyata.</p>

                    <div class="content-highlight p-4 my-4 rounded-3 border-start border-5" style="background-color: var(--surface-color); border-color: var(--accent-color) !important; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <h4 style="color: var(--accent-color);"><i class="bi bi-lightbulb me-2"></i>Ciri Khas Utama</h4>
                        <p class="mb-0">Individu dengan tipe ini seringkali tampak normal dalam interaksi sosial yang dangkal, namun kecurigaan dan ide-ide paranoid mereka akan muncul saat pembicaraan menjadi lebih mendalam.</p>
                    </div>

                    <h3 class="mt-5 mb-3">Gejala Dominan</h3>
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-box rounded-circle p-3 me-3" style="background-color: color-mix(in srgb, var(--accent-color), transparent 90%); color: var(--accent-color);">
                                            <i class="bi bi-eye-slash fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0 fw-bold" style="color: var(--heading-color);">Delusi (Waham)</h5>
                                    </div>
                                    <p class="card-text text-muted">Keyakinan kuat yang salah dan tidak sesuai realita. Contoh:
                                        <ul class="mt-2 mb-0 ps-3">
                                            <li>Merasa dimata-matai tetangga atau pemerintah.</li>
                                            <li>Merasa memiliki kekuatan super atau misi khusus.</li>
                                            <li>Merasa pasangan berselingkuh tanpa bukti.</li>
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
                                            <i class="bi bi-ear fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0 fw-bold" style="color: var(--heading-color);">Halusinasi</h5>
                                    </div>
                                    <p class="card-text text-muted">Persepsi indra tanpa stimulus nyata. Paling sering berupa:
                                        <ul class="mt-2 mb-0 ps-3">
                                            <li>Mendengar suara bisikan atau bentakan.</li>
                                            <li>Suara yang mengomentari perilaku penderita.</li>
                                            <li>Suara yang memerintah untuk melakukan sesuatu.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5 mb-3">Dampak pada Kehidupan</h3>
                    <p>Kondisi ini dapat sangat mengganggu kehidupan sehari-hari. Rasa curiga yang berlebihan membuat penderita sulit menjalin hubungan sosial, mempertahankan pekerjaan, atau mempercayai keluarga sendiri. Hal ini sering berujung pada isolasi sosial dan konflik interpersonal.</p>

                    <h3 class="mt-5 mb-3">Penanganan & Terapi</h3>
                    <p>Skizofrenia paranoid adalah kondisi kronis yang membutuhkan perawatan seumur hidup, namun <strong>sangat bisa dikelola</strong>. Kombinasi pengobatan yang tepat memungkinkan banyak penderita untuk hidup produktif.</p>
                    
                    <div class="accordion mt-4" id="treatmentAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <i class="bi bi-capsule me-2" style="color: var(--accent-color);"></i> Farmakoterapi (Obat-obatan)
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                <div class="accordion-body">
                                    Antipsikotik adalah pengobatan utama untuk mengurangi gejala delusi dan halusinasi. Kepatuhan minum obat sangat krusial untuk mencegah kekambuhan (relapse).
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    <i class="bi bi-people me-2" style="color: var(--accent-color);"></i> Psikoterapi
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                <div class="accordion-body">
                                    Terapi Perilaku Kognitif (CBT) membantu pasien mengidentifikasi dan mengubah pola pikir negatif serta belajar membedakan realita dan delusi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    <i class="bi bi-house-heart me-2" style="color: var(--accent-color);"></i> Dukungan Keluarga
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                <div class="accordion-body">
                                    Edukasi keluarga sangat penting agar lingkungan rumah mendukung pemulihan dan mengurangi stres yang bisa memicu gejala.
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
                            <a href="#" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                Skizofrenia Hebeferenik <i class="bi bi-arrow-right small"></i>
                            </a>
                        </li>
                        <li class="mb-3 pb-3 border-bottom" style="border-color: color-mix(in srgb, var(--default-color), transparent 90%);">
                            <a href="#" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                Skizofrenia Katatonik <i class="bi bi-arrow-right small"></i>
                            </a>
                        </li>
                        <li class="mb-3 pb-3 border-bottom" style="border-color: color-mix(in srgb, var(--default-color), transparent 90%);">
                            <a href="#" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
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
