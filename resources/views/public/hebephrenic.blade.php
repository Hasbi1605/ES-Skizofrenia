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

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="service-details-content">
                    <img src="{{ asset('frontend/assets/img/health/pediatrics-2.webp') }}" alt="Skizofrenia Hebeferenik" class="img-fluid rounded-4 mb-4 w-100" style="object-fit: cover; max-height: 400px;">
                    
                    <h2 class="mb-4">Apa itu Skizofrenia Hebeferenik?</h2>
                    <p class="lead mb-4">Skizofrenia hebeferenik, juga dikenal sebagai skizofrenia disorganisasi, adalah tipe skizofrenia yang ditandai dengan kekacauan dalam proses berpikir, perilaku, dan emosi. Berbeda dengan tipe paranoid, halusinasi dan delusi pada tipe ini seringkali tidak terorganisir atau terfragmentasi.</p>
                    
                    <p>Penderita sering menunjukkan perilaku yang kekanak-kanakan (regresif), tertawa sendiri tanpa alasan yang jelas, dan bicara yang sulit dipahami. Onset (awal munculnya gejala) biasanya terjadi pada usia muda (remaja atau dewasa awal).</p>

                    <div class="content-highlight p-4 my-4 rounded-3 border-start border-5" style="background-color: var(--surface-color); border-color: var(--accent-color) !important; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <h4 style="color: var(--accent-color);"><i class="bi bi-lightbulb me-2"></i>Ciri Khas Utama</h4>
                        <p class="mb-0">Afek (ekspresi emosi) yang datar atau tidak serasi adalah tanda utama. Penderita mungkin tertawa saat mendengar berita sedih atau marah tanpa pemicu yang jelas.</p>
                    </div>

                    <h3 class="mt-5 mb-3">Gejala Dominan</h3>
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-box rounded-circle p-3 me-3" style="background-color: color-mix(in srgb, var(--accent-color), transparent 90%); color: var(--accent-color);">
                                            <i class="bi bi-chat-quote fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0 fw-bold" style="color: var(--heading-color);">Bicara Kacau</h5>
                                    </div>
                                    <p class="card-text text-muted">Kesulitan mengorganisir pikiran yang tercermin dalam ucapan. Contoh:
                                        <ul class="mt-2 mb-0 ps-3">
                                            <li>Kalimat tidak nyambung (asosiasi longgar).</li>
                                            <li>Menciptakan kata-kata baru (neologisme).</li>
                                            <li>Sering berpindah topik secara tiba-tiba.</li>
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
                                            <i class="bi bi-emoji-dizzy fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0 fw-bold" style="color: var(--heading-color);">Perilaku Disorganisasi</h5>
                                    </div>
                                    <p class="card-text text-muted">Perilaku yang tidak bertujuan atau aneh. Sering berupa:
                                        <ul class="mt-2 mb-0 ps-3">
                                            <li>Perilaku kekanak-kanakan (silly).</li>
                                            <li>Penampilan yang tidak rapi atau kotor.</li>
                                            <li>Agitasi atau gerakan tanpa tujuan.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-5 mb-3">Dampak pada Kehidupan</h3>
                    <p>Tipe ini seringkali memiliki dampak fungsional yang lebih berat dibandingkan tipe paranoid. Kemampuan untuk merawat diri sendiri (mandi, makan, berpakaian) seringkali menurun drastis, sehingga membutuhkan bantuan orang lain dalam aktivitas sehari-hari.</p>

                    <h3 class="mt-5 mb-3">Penanganan & Terapi</h3>
                    <p>Meskipun tantangannya besar, pendekatan komprehensif dapat membantu meningkatkan kualitas hidup penderita.</p>
                    
                    <div class="accordion mt-4" id="treatmentAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <i class="bi bi-capsule me-2" style="color: var(--accent-color);"></i> Farmakoterapi
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#treatmentAccordion">
                                <div class="accordion-body">
                                    Obat antipsikotik digunakan untuk mengendalikan gejala psikotik, meskipun respon terhadap obat mungkin bervariasi dibandingkan tipe lain.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    <i class="bi bi-activity me-2" style="color: var(--accent-color);"></i> Rehabilitasi Psikososial
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
                                    <i class="bi bi-heart-pulse me-2" style="color: var(--accent-color);"></i> Perawatan Diri
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                <div class="accordion-body">
                                    Dukungan intensif dari keluarga atau pengasuh diperlukan untuk memastikan kebutuhan dasar seperti nutrisi dan kebersihan terpenuhi.
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
