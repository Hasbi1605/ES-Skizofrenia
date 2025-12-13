@extends('layouts.app')

@section('title', 'About - SchizoCheck')

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Kategori</a></li>
            <li class="breadcrumb-item active current">Tentang Skizofrenia</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Tentang Skizofrenia</h1>
        <p>Memahami gejala dan pentingnya deteksi dini untuk pengobatan yang lebih efektif</p>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-12">
            <div class="content">
              <h2>Apa Itu Skizofrenia?</h2>
              <p>
                Skizofrenia adalah gangguan mental serius yang ditandai dengan ketidakmampuan untuk membedakan antara pengalaman nyata dan tidak nyata. Penyakit ini mempengaruhi cara seseorang berpikir, merasa, dan berperilaku, sering terlihat seperti hilangnya kontak dengan kenyataan (psikosis).
              </p>
              <p>
                Meskipun skizofrenia terdengar menakutkan, penyakit ini dapat dikelola dengan baik melalui kombinasi pengobatan medis, terapi psikologis, dan dukungan sosial. Deteksi dan intervensi dini sangat penting untuk meningkatkan prognosis dan kualitas hidup pasien.
              </p>

              <div class="stats-container" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                  <div class="col-sm-6 col-lg-12 col-xl-6">
                    <div class="stat-item">
                      <div class="stat-number">
                        <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>%
                      </div>
                      <div class="stat-label">Prevalensi Populasi Global</div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-12 col-xl-6">
                    <div class="stat-item">
                      <div class="stat-number">
                        <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1" class="purecounter"></span> tahun
                      </div>
                      <div class="stat-label">Usia Onset Rata-rata</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
                <a href="{{ url('/screening') }}" class="btn-primary">Mulai Tes Sekarang</a>
                <a href="{{ url('/guide') }}" class="btn-secondary">Lihat Fitur Kami</a>
              </div>
            </div>
          </div>
        </div>

        <div class="certifications-section" data-aos="fade-up" data-aos-delay="400">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-header">
                <h3>Penyebab & Faktor Risiko Skizofrenia</h3>
                <p>Skizofrenia disebabkan oleh kombinasi faktor genetik, neurologis, dan lingkungan</p>
              </div>
              <div class="row g-4 mt-4">
                <div class="col-md-4">
                  <div class="risk-factor-card p-4" style="background: #fff; border: 1px solid #e0e0e0; border-radius: 8px;">
                    <div class="factor-icon mb-3" style="font-size: 2.5rem; color: #007bff;">
                    </div>
                    <h5>Genetik</h5>
                    <p class="small">Risiko meningkat 10% jika orang tua memiliki riwayat skizofrenia, hingga 40-50% jika kedua orang tua terkena.</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="risk-factor-card p-4" style="background: #fff; border: 1px solid #e0e0e0; border-radius: 8px;">
                    <div class="factor-icon mb-3" style="font-size: 2.5rem; color: #28a745;">
                    </div>
                    <h5>Imbalans Neurotransmitter</h5>
                    <p class="small">Ketidakseimbangan dopamin, serotonin, dan glutamat di otak merupakan faktor biologis utama.</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="risk-factor-card p-4" style="background: #fff; border: 1px solid #e0e0e0; border-radius: 8px;">
                    <div class="factor-icon mb-3" style="font-size: 2.5rem; color: #ffc107;">
                    </div>
                    <h5>Stres & Lingkungan</h5>
                    <p class="small">Pengalaman traumatis, stress lingkungan, dan penggunaan zat terlarang dapat memicu onset penyakit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Gejala Section -->
        <div class="gejala-section mt-5 pt-4" data-aos="fade-up" data-aos-delay="500">
          <div class="section-header text-center mb-5">
            <h3>Detail Gejala Skizofrenia</h3>
            <p>Penjelasan lengkap mengenai kategori gejala untuk deteksi yang lebih akurat</p>
          </div>

          <div class="accordion" id="gejalaAccordion">
            
            <!-- Gejala Positif -->
            <div class="accordion-item" id="gejala-positif">
              <h2 class="accordion-header" id="headingPositif">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePositif" aria-expanded="false" aria-controls="collapsePositif">
                  <span class="fw-bold">Gejala Positif (Psikotik)</span>
                </button>
              </h2>
              <div id="collapsePositif" class="accordion-collapse collapse" aria-labelledby="headingPositif" data-bs-parent="#gejalaAccordion">
                <div class="accordion-body">
                  <p class="text-muted small mb-4">Gejala yang "menambah" pengalaman abnormal pada pasien.</p>
                  <ul class="list-unstyled small">
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Halusinasi:</strong> Mendengar suara, melihat bayangan, atau merasakan sensasi yang tidak nyata.</span>
                    </li>
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Delusi (Waham):</strong> Keyakinan kuat yang salah (misal: merasa dikejar-kejar atau memiliki kekuatan super).</span>
                    </li>
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Kekacauan Berpikir:</strong> Bicara melantur, tidak nyambung, atau menciptakan kata-kata baru.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Gejala Negatif -->
            <div class="accordion-item" id="gejala-negatif">
              <h2 class="accordion-header" id="headingNegatif">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNegatif" aria-expanded="false" aria-controls="collapseNegatif">
                  <span class="fw-bold">Gejala Negatif (Defisit)</span>
                </button>
              </h2>
              <div id="collapseNegatif" class="accordion-collapse collapse" aria-labelledby="headingNegatif" data-bs-parent="#gejalaAccordion">
                <div class="accordion-body">
                  <p class="text-muted small mb-4">Hilangnya kemampuan atau fungsi normal.</p>
                  <ul class="list-unstyled small">
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Afek Tumpul:</strong> Wajah tanpa ekspresi, suara datar, kurang kontak mata.</span>
                    </li>
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Avolisi:</strong> Kehilangan motivasi atau inisiatif untuk melakukan aktivitas sehari-hari.</span>
                    </li>
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Menarik Diri:</strong> Isolasi sosial dan hilangnya minat berinteraksi dengan orang lain.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Gejala Kognitif -->
            <div class="accordion-item" id="gejala-kognitif">
              <h2 class="accordion-header" id="headingKognitif">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKognitif" aria-expanded="false" aria-controls="collapseKognitif">
                  <span class="fw-bold">Gejala Kognitif</span>
                </button>
              </h2>
              <div id="collapseKognitif" class="accordion-collapse collapse" aria-labelledby="headingKognitif" data-bs-parent="#gejalaAccordion">
                <div class="accordion-body">
                  <p class="text-muted small mb-4">Masalah pada proses berpikir yang mempengaruhi kemampuan belajar.</p>
                  <ul class="list-unstyled small">
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Sulit Konsentrasi:</strong> Mudah teralihkan dan sulit fokus pada satu hal.</span>
                    </li>
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Masalah Memori:</strong> Kesulitan mengingat informasi baru atau menggunakan informasi.</span>
                    </li>
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Fungsi Eksekutif:</strong> Kesulitan merencanakan, mengorganisir, dan mengambil keputusan.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Gejala Disorganisasi -->
            <div class="accordion-item" id="gejala-disorganisasi">
              <h2 class="accordion-header" id="headingDisorganisasi">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDisorganisasi" aria-expanded="false" aria-controls="collapseDisorganisasi">
                  <span class="fw-bold">Gejala Disorganisasi</span>
                </button>
              </h2>
              <div id="collapseDisorganisasi" class="accordion-collapse collapse" aria-labelledby="headingDisorganisasi" data-bs-parent="#gejalaAccordion">
                <div class="accordion-body">
                  <p class="text-muted small mb-4">Ketidakmampuan mengatur perilaku dan pikiran secara koheren.</p>
                  <ul class="list-unstyled small">
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Perilaku Aneh:</strong> Bertingkah laku tidak sesuai konteks sosial atau situasi.</span>
                    </li>
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Agitasi:</strong> Gerakan tubuh berlebih atau justru diam mematung (katatonia).</span>
                    </li>
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Kebersihan Buruk:</strong> Mengabaikan perawatan diri dan kebersihan.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Gejala Afektif -->
            <div class="accordion-item" id="gejala-afektif">
              <h2 class="accordion-header" id="headingAfektif">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAfektif" aria-expanded="false" aria-controls="collapseAfektif">
                  <span class="fw-bold">Gejala Afektif</span>
                </button>
              </h2>
              <div id="collapseAfektif" class="accordion-collapse collapse" aria-labelledby="headingAfektif" data-bs-parent="#gejalaAccordion">
                <div class="accordion-body">
                  <p class="text-muted small mb-4">Gangguan pada suasana hati dan emosi yang menyertai gejala utama.</p>
                  <ul class="list-unstyled small">
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Depresi:</strong> Perasaan sedih yang mendalam, putus asa, dan rasa bersalah.</span>
                    </li>
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Kecemasan:</strong> Rasa khawatir berlebihan, panik, dan ketegangan.</span>
                    </li>
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Iritabilitas:</strong> Mudah marah, tersinggung, atau meledak-ledak.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Fase Prodromal -->
            <div class="accordion-item" id="fase-prodromal">
              <h2 class="accordion-header" id="headingProdromal">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProdromal" aria-expanded="false" aria-controls="collapseProdromal">
                  <span class="fw-bold">Fase Prodromal</span>
                </button>
              </h2>
              <div id="collapseProdromal" class="accordion-collapse collapse" aria-labelledby="headingProdromal" data-bs-parent="#gejalaAccordion">
                <div class="accordion-body">
                  <p class="text-muted small mb-4">Tanda-tanda peringatan dini sebelum gejala psikotik muncul sepenuhnya.</p>
                  <ul class="list-unstyled small">
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Perubahan Tidur:</strong> Insomnia atau pola tidur terbalik (siang tidur, malam bangun).</span>
                    </li>
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Penurunan Fungsi:</strong> Nilai sekolah turun atau kinerja kerja memburuk drastis.</span>
                    </li>
                    <li class="mb-3 d-flex">
                      <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="margin-top: 3px; color: var(--accent-color);"></i>
                      <span><strong>Kecurigaan:</strong> Menjadi sangat curiga terhadap orang lain tanpa alasan jelas.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>

  </main>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Check if there is a hash in the URL
      if (window.location.hash) {
        var targetId = window.location.hash.substring(1); // Remove the '#'
        var targetElement = document.getElementById(targetId);
        
        // If the target exists and is an accordion item
        if (targetElement && targetElement.classList.contains('accordion-item')) {
          var collapseElement = targetElement.querySelector('.accordion-collapse');
          var buttonElement = targetElement.querySelector('.accordion-button');
          
          if (collapseElement && buttonElement) {
            // Open the accordion item
            collapseElement.classList.add('show');
            buttonElement.classList.remove('collapsed');
            buttonElement.setAttribute('aria-expanded', 'true');
            
            // Scroll to the element to ensure it's visible
            setTimeout(function() {
              targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 100);
          }
        }
      }
    });
  </script>

@endsection