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
            <div class="content about-content">
              <h2 class="about-title">Apa Itu Skizofrenia?</h2>
              <p class="about-lead">
                Skizofrenia adalah gangguan mental serius yang ditandai dengan ketidakmampuan untuk membedakan antara pengalaman nyata dan tidak nyata. Penyakit ini mempengaruhi cara seseorang berpikir, merasa, dan berperilaku, sering terlihat seperti <strong>hilangnya kontak dengan kenyataan</strong> (psikosis).
              </p>
              <p class="about-text">
                Meskipun skizofrenia terdengar menakutkan, penyakit ini dapat dikelola dengan baik melalui kombinasi pengobatan medis, terapi psikologis, dan dukungan sosial. <strong>Deteksi dan intervensi dini</strong> sangat penting untuk meningkatkan prognosis dan kualitas hidup pasien.
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

        <!-- Penyebab & Faktor Risiko -->
        <div class="risk-factors-section" data-aos="fade-up" data-aos-delay="400">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-header text-center">
                <h3 class="section-title">Penyebab & Faktor Risiko Skizofrenia</h3>
                <p class="section-subtitle">Skizofrenia disebabkan oleh kombinasi faktor genetik, neurologis, dan lingkungan</p>
              </div>
              <div class="row g-4 mt-3">
                <div class="col-md-4">
                  <div class="risk-factor-card">
                    <div class="risk-icon">
                      <i class="bi bi-diagram-3"></i>
                    </div>
                    <h5>Genetik</h5>
                    <p>Risiko meningkat 10% jika orang tua memiliki riwayat skizofrenia, hingga 40-50% jika kedua orang tua terkena.</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="risk-factor-card">
                    <div class="risk-icon">
                      <i class="bi bi-lightning-charge"></i>
                    </div>
                    <h5>Imbalans Neurotransmitter</h5>
                    <p>Ketidakseimbangan dopamin, serotonin, dan glutamat di otak merupakan faktor biologis utama.</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="risk-factor-card">
                    <div class="risk-icon">
                      <i class="bi bi-cloud-lightning"></i>
                    </div>
                    <h5>Stres & Lingkungan</h5>
                    <p>Pengalaman traumatis, stress lingkungan, dan penggunaan zat terlarang dapat memicu onset penyakit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Gejala Section -->
        <div class="gejala-section mt-5 pt-4" data-aos="fade-up" data-aos-delay="500">
          <div class="section-header text-center mb-4">
            <h3 class="section-title">Detail Gejala Skizofrenia</h3>
            <p class="section-subtitle">Penjelasan lengkap mengenai kategori gejala untuk deteksi yang lebih akurat</p>
          </div>

          <div class="accordion gejala-accordion" id="gejalaAccordion">
            
            <!-- Gejala Positif -->
            <div class="accordion-item" id="gejala-positif">
              <h2 class="accordion-header" id="headingPositif">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePositif" aria-expanded="false" aria-controls="collapsePositif">
                  <span class="fw-bold">Gejala Positif (Psikotik)</span>
                </button>
              </h2>
              <div id="collapsePositif" class="accordion-collapse collapse" aria-labelledby="headingPositif" data-bs-parent="#gejalaAccordion">
                <div class="accordion-body">
                  <p class="accordion-desc">Gejala yang "menambah" pengalaman abnormal pada pasien.</p>
                  <ul class="gejala-list">
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Halusinasi:</strong> Mendengar suara, melihat bayangan, atau merasakan sensasi yang tidak nyata.
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Delusi (Waham):</strong> Keyakinan kuat yang salah (misal: merasa dikejar-kejar atau memiliki kekuatan super).
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Kekacauan Berpikir:</strong> Bicara melantur, tidak nyambung, atau menciptakan kata-kata baru.
                      </div>
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
                  <p class="accordion-desc">Hilangnya kemampuan atau fungsi normal.</p>
                  <ul class="gejala-list">
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Afek Tumpul:</strong> Wajah tanpa ekspresi, suara datar, kurang kontak mata.
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Avolisi:</strong> Kehilangan motivasi atau inisiatif untuk melakukan aktivitas sehari-hari.
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Menarik Diri:</strong> Isolasi sosial dan hilangnya minat berinteraksi dengan orang lain.
                      </div>
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
                  <p class="accordion-desc">Masalah pada proses berpikir yang mempengaruhi kemampuan belajar.</p>
                  <ul class="gejala-list">
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Sulit Konsentrasi:</strong> Mudah teralihkan dan sulit fokus pada satu hal.
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Masalah Memori:</strong> Kesulitan mengingat informasi baru atau menggunakan informasi.
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Fungsi Eksekutif:</strong> Kesulitan merencanakan, mengorganisir, dan mengambil keputusan.
                      </div>
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
                  <p class="accordion-desc">Ketidakmampuan mengatur perilaku dan pikiran secara koheren.</p>
                  <ul class="gejala-list">
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Perilaku Aneh:</strong> Bertingkah laku tidak sesuai konteks sosial atau situasi.
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Agitasi:</strong> Gerakan tubuh berlebih atau justru diam mematung (katatonia).
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Kebersihan Buruk:</strong> Mengabaikan perawatan diri dan kebersihan.
                      </div>
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
                  <p class="accordion-desc">Gangguan pada suasana hati dan emosi yang menyertai gejala utama.</p>
                  <ul class="gejala-list">
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Depresi:</strong> Perasaan sedih yang mendalam, putus asa, dan rasa bersalah.
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Kecemasan:</strong> Rasa khawatir berlebihan, panik, dan ketegangan.
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Iritabilitas:</strong> Mudah marah, tersinggung, atau meledak-ledak.
                      </div>
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
                  <p class="accordion-desc">Tanda-tanda peringatan dini sebelum gejala psikotik muncul sepenuhnya.</p>
                  <ul class="gejala-list">
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Perubahan Tidur:</strong> Insomnia atau pola tidur terbalik (siang tidur, malam bangun).
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Penurunan Fungsi:</strong> Nilai sekolah turun atau kinerja kerja memburuk drastis.
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <div>
                        <strong>Kecurigaan:</strong> Menjadi sangat curiga terhadap orang lain tanpa alasan jelas.
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </section><!-- End About Section -->

</main>

<style>
/* About Page Typography Improvements */
.about-content .about-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--heading-color);
    margin-bottom: 0.5rem;
    padding-bottom: 0.25rem;
    border-bottom: 3px solid var(--accent-color);
    display: inline-block;
}

.about-content .about-lead {
    font-size: 1.1rem;
    line-height: 1.8;
    color: var(--default-color);
    margin-bottom: 1rem;
}

.about-content .about-text {
    font-size: 1rem;
    line-height: 1.75;
    color: #555;
    margin-bottom: 1.5rem;
}

/* Section Headers */
.section-header {
    margin-bottom: 0;
}

.section-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--heading-color);
    margin-bottom: 1rem !important;
    padding-bottom: 0 !important;
    margin-top: 0 !important;
}

.section-subtitle {
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
    margin-bottom: 0 !important;
    margin-top: 0 !important;
    padding-top: 0.6rem !important;
}

/* Risk Factor Cards */
.risk-factors-section {
    margin-top: 3rem;
    padding-top: 2rem;
}

.risk-factor-card {
    background: white;
    border-radius: 16px;
    padding: 2rem;
    height: 100%;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    border: 1px solid rgba(0, 0, 0, 0.04);
    transition: all 0.3s ease;
    text-align: center;
}

.risk-factor-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
}

.risk-factor-card .risk-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, rgba(0, 127, 127, 0.1) 0%, rgba(0, 127, 127, 0.05) 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.25rem;
}

.risk-factor-card .risk-icon i {
    font-size: 1.75rem;
    color: var(--accent-color);
}

.risk-factor-card h5 {
    font-weight: 700;
    color: var(--heading-color);
    margin-bottom: 0.75rem;
    font-size: 1.1rem;
}

.risk-factor-card p {
    font-size: 0.95rem;
    line-height: 1.65;
    color: #666;
    margin: 0;
}

/* Gejala Accordion */
.gejala-accordion .accordion-item {
    border: none;
    margin-bottom: 0.75rem;
    border-radius: 12px !important;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
}

.gejala-accordion .accordion-button {
    font-weight: 600;
    padding: 1.25rem 1.5rem;
    background: white;
    color: var(--heading-color);
    font-size: 1rem;
}

.gejala-accordion .accordion-button:not(.collapsed) {
    background: rgba(0, 127, 127, 0.05);
    color: var(--accent-color);
}

.gejala-accordion .accordion-body {
    padding: 1.25rem 1.5rem 1.5rem;
}

.gejala-accordion .accordion-desc {
    color: #666;
    margin-bottom: 1.25rem;
    line-height: 1.6;
    font-size: 0.95rem;
}

.gejala-list {
    list-style: none;
    margin: 0;
    padding: 0;
}

.gejala-list li {
    display: flex;
    gap: 0.75rem;
    margin-bottom: 1rem;
    line-height: 1.6;
}

.gejala-list li:last-child {
    margin-bottom: 0;
}

.gejala-list li i {
    color: var(--accent-color);
    flex-shrink: 0;
    margin-top: 3px;
}

.gejala-list li div {
    color: #555;
    font-size: 0.95rem;
}

.gejala-list li strong {
    color: var(--heading-color);
}
</style>

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