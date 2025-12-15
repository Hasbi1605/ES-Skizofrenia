@extends('layouts.app')

@section('title', 'Skizofrenia Hebeferenik - SchizoCheck')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/types') }}">Jenis Skizofrenia</a></li>
            <li class="breadcrumb-item active current">Skizofrenia Hebeferenik</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Skizofrenia Hebeferenik</h1>
        <p>Memahami tipe skizofrenia yang ditandai dengan perilaku dan emosi yang tidak terorganisir.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Hebephrenic Detail Section -->
    <section id="hebephrenic-detail" class="services section">

      <div class="container">

        <div class="row gy-5">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="service-details-content">
                    <img src="{{ asset('frontend/assets/img/health/pediatrics-2.webp') }}" alt="Skizofrenia Hebeferenik" class="img-fluid rounded-4 mb-5 w-100" style="object-fit: cover; max-height: 400px;">
                    
                    <!-- Introduction -->
                    <article class="content-article">
                        <h2 class="section-heading">Apa itu Skizofrenia Hebeferenik?</h2>
                        
                        <p class="lead-text">
                            Skizofrenia hebeferenik, juga dikenal sebagai <strong>skizofrenia disorganisasi</strong>, adalah tipe skizofrenia yang ditandai dengan kekacauan dalam proses berpikir, perilaku, dan emosi.
                        </p>
                        
                        <p class="body-text">
                            Berbeda dengan tipe paranoid, halusinasi dan delusi pada tipe ini seringkali tidak terorganisir atau terfragmentasi. Penderita sering menunjukkan perilaku yang kekanak-kanakan (regresif), tertawa sendiri tanpa alasan yang jelas, dan bicara yang sulit dipahami.
                        </p>
                        
                        <p class="body-text">
                            Onset (awal munculnya gejala) biasanya terjadi pada <strong>usia muda</strong>, yaitu masa remaja atau dewasa awal.
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
                                <strong>Afek</strong> (ekspresi emosi) yang datar atau tidak serasi adalah tanda utama. Penderita mungkin tertawa saat mendengar berita sedih atau marah tanpa pemicu yang jelas.
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
                                            <i class="bi bi-chat-quote"></i>
                                        </div>
                                        <h5>Bicara Kacau</h5>
                                    </div>
                                    <p class="symptom-desc">
                                        Kesulitan mengorganisir pikiran yang tercermin dalam ucapan:
                                    </p>
                                    <ul class="symptom-list">
                                        <li>Kalimat tidak nyambung (asosiasi longgar)</li>
                                        <li>Menciptakan kata-kata baru (neologisme)</li>
                                        <li>Sering berpindah topik secara tiba-tiba</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="symptom-card">
                                    <div class="symptom-header">
                                        <div class="symptom-icon">
                                            <i class="bi bi-emoji-dizzy"></i>
                                        </div>
                                        <h5>Perilaku Disorganisasi</h5>
                                    </div>
                                    <p class="symptom-desc">
                                        Perilaku yang tidak bertujuan atau aneh, seperti:
                                    </p>
                                    <ul class="symptom-list">
                                        <li>Perilaku kekanak-kanakan (silly)</li>
                                        <li>Penampilan yang tidak rapi atau kotor</li>
                                        <li>Agitasi atau gerakan tanpa tujuan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Impact Section -->
                    <article class="content-article">
                        <h3 class="section-heading">Dampak pada Kehidupan</h3>
                        <p class="body-text">
                            Tipe ini seringkali memiliki <strong>dampak fungsional yang lebih berat</strong> dibandingkan tipe paranoid. Kemampuan untuk merawat diri sendiri (mandi, makan, berpakaian) seringkali menurun drastis, sehingga membutuhkan bantuan orang lain dalam aktivitas sehari-hari.
                        </p>
                    </article>

                    <!-- Treatment Section -->
                    <article class="content-article">
                        <h3 class="section-heading">Penanganan &amp; Terapi</h3>
                        <p class="body-text">
                            Meskipun tantangannya besar, pendekatan komprehensif dapat membantu meningkatkan kualitas hidup penderita.
                        </p>
                        
                        <div class="accordion treatment-accordion" id="treatmentAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <i class="bi bi-capsule me-2"></i> Farmakoterapi
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Obat antipsikotik digunakan untuk mengendalikan gejala psikotik, meskipun respon terhadap obat mungkin bervariasi dibandingkan tipe lain.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        <i class="bi bi-activity me-2"></i> Rehabilitasi Psikososial
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Latihan keterampilan sosial dan aktivitas harian sangat penting untuk membantu pasien mempertahankan kemandirian dasar.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        <i class="bi bi-heart-pulse me-2"></i> Perawatan Diri
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body">
                                        Dukungan intensif dari keluarga atau pengasuh diperlukan untuk memastikan kebutuhan dasar seperti nutrisi dan kebersihan terpenuhi.
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
