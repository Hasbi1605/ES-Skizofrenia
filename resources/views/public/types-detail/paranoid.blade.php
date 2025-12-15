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

      <div class="container">

        <div class="row gy-5">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="service-details-content">
                    <img src="{{ asset('frontend/assets/img/health/neurology-4.webp') }}" alt="Skizofrenia Paranoid" class="img-fluid rounded-4 mb-5 w-100" style="object-fit: cover; max-height: 400px;">
                    
                    <!-- Introduction -->
                    <article class="content-article">
                        <h2 class="section-heading">Apa itu Skizofrenia Paranoid?</h2>
                        
                        <p class="lead-text">
                            Skizofrenia paranoid adalah <strong>subtipe skizofrenia yang paling umum</strong> ditemui. Karakteristik utamanya adalah adanya delusi (waham) dan halusinasi pendengaran yang menonjol.
                        </p>
                        
                        <p class="body-text">
                            Fungsi kognitif dan afek (emosi) relatif lebih terjaga dibandingkan tipe lainnya. Penderita skizofrenia paranoid seringkali merasa diawasi, dikejar, atau dicurigai oleh orang lain (waham kejar).
                        </p>
                        
                        <p class="body-text">
                            Mereka mungkin mendengar suara-suara yang mengancam atau memberikan perintah, yang bagi mereka terasa sangat nyata.
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
                                Individu dengan tipe ini seringkali tampak normal dalam interaksi sosial yang dangkal, namun <strong>kecurigaan dan ide-ide paranoid</strong> mereka akan muncul saat pembicaraan menjadi lebih mendalam.
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
                                            <i class="bi bi-eye-slash"></i>
                                        </div>
                                        <h5>Delusi (Waham)</h5>
                                    </div>
                                    <p class="symptom-desc">
                                        Keyakinan kuat yang salah dan tidak sesuai realita:
                                    </p>
                                    <ul class="symptom-list">
                                        <li>Merasa dimata-matai tetangga atau pemerintah</li>
                                        <li>Merasa memiliki kekuatan super atau misi khusus</li>
                                        <li>Merasa pasangan berselingkuh tanpa bukti</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="symptom-card">
                                    <div class="symptom-header">
                                        <div class="symptom-icon">
                                            <i class="bi bi-ear"></i>
                                        </div>
                                        <h5>Halusinasi</h5>
                                    </div>
                                    <p class="symptom-desc">
                                        Persepsi indra tanpa stimulus nyata, paling sering berupa:
                                    </p>
                                    <ul class="symptom-list">
                                        <li>Mendengar suara bisikan atau bentakan</li>
                                        <li>Suara yang mengomentari perilaku penderita</li>
                                        <li>Suara yang memerintah untuk melakukan sesuatu</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Impact Section -->
                    <article class="content-article">
                        <h3 class="section-heading">Dampak pada Kehidupan</h3>
                        <p class="body-text">
                            Kondisi ini dapat sangat mengganggu kehidupan sehari-hari. Rasa curiga yang berlebihan membuat penderita sulit menjalin <strong>hubungan sosial</strong>, mempertahankan pekerjaan, atau mempercayai keluarga sendiri. Hal ini sering berujung pada isolasi sosial dan konflik interpersonal.
                        </p>
                    </article>

                    <!-- Treatment Section -->
                    <article class="content-article">
                        <h3 class="section-heading">Penanganan & Terapi</h3>
                        <p class="body-text">
                            Skizofrenia paranoid adalah kondisi kronis yang membutuhkan perawatan seumur hidup, namun <strong>sangat bisa dikelola</strong>. Kombinasi pengobatan yang tepat memungkinkan banyak penderita untuk hidup produktif.
                        </p>
                        
                        <div class="accordion treatment-accordion" id="treatmentAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <i class="bi bi-capsule me-2"></i> Farmakoterapi (Obat-obatan)
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
                                        <i class="bi bi-people me-2"></i> Psikoterapi
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
                                        <i class="bi bi-house-heart me-2"></i> Dukungan Keluarga
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Edukasi keluarga sangat penting agar lingkungan rumah mendukung pemulihan dan mengurangi stres yang bisa memicu gejala.
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
                                <a href="{{ url('/hebephrenic') }}" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                    Skizofrenia Hebeferenik <i class="bi bi-arrow-right small"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-3 border-bottom" style="border-color: color-mix(in srgb, var(--default-color), transparent 90%);">
                                <a href="{{ url('/catatonic') }}" class="d-flex justify-content-between align-items-center text-decoration-none" style="color: var(--default-color); transition: 0.3s;" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='var(--default-color)'">
                                    Skizofrenia Katatonik <i class="bi bi-arrow-right small"></i>
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
