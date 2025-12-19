@extends('layouts.app')

@section('title', 'Hasil Screening - SchizoCheck')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/screening') }}">Screening</a></li>
            <li class="breadcrumb-item active current">Hasil Diagnosis</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Hasil Screening</h1>
        <p>Analisis gejala menggunakan metode Certainty Factor</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Result Section -->
    <section id="result" class="services section">

      <div class="container">

        @php
          $hasil = $hasilDiagnosis->hasil;
          $topDiagnosis = reset($hasil);
          $interpretation = App\Http\Controllers\ScreeningController::getInterpretation($hasilDiagnosis->cf_tertinggi);
          
          // Filter out CF = 0%
          $hasilFiltered = array_filter($hasil, function($item) {
            return $item['cf_percentage'] > 0;
          });
        @endphp

        <!-- Main Result Card -->
        <div class="row justify-content-center mb-5">
          <div class="col-lg-8">
            <div class="result-main-card p-5 text-center rounded-4 shadow"
                 style="background: linear-gradient(135deg, var(--accent-color) 0%, #004d4d 100%); color: white;">
              
              <div class="result-icon mb-4">
                <i class="bi bi-clipboard2-pulse" style="font-size: 4rem;"></i>
              </div>
              
              <h2 class="mb-3" style="color: white; font-weight: 700;">{{ $hasilDiagnosis->diagnosis_utama }}</h2>
              
              <div class="cf-score mb-4">
                <div class="cf-circle mx-auto" style="width: 120px; height: 120px; border: 6px solid rgba(255,255,255,0.3); border-radius: 50%; display: flex; align-items: center; justify-content: center; background: rgba(255,255,255,0.1);">
                  <span style="font-size: 2.2rem; font-weight: bold;">{{ round($hasilDiagnosis->cf_tertinggi * 100) }}%</span>
                </div>
              </div>
              
              <div class="alert d-inline-block px-4 py-2 rounded-pill mb-3" 
                   style="background: rgba(255,255,255,0.2); border: none;">
                <i class="bi bi-info-circle me-2"></i>
                Tingkat Kepastian: <strong>{{ $interpretation['level'] }}</strong>
              </div>
              
              <p class="mb-0 px-lg-5" style="opacity: 0.9;">
                {{ $interpretation['desc'] }}
              </p>
            </div>
          </div>
        </div>

        <!-- User Info Card -->
        <div class="row justify-content-center mb-4">
          <div class="col-lg-8">
            <div class="user-info-card p-4 bg-white rounded-3 shadow-sm">
              <h5 class="mb-3" style="color: var(--heading-color);">
                <i class="bi bi-person-circle me-2" style="color: var(--accent-color);"></i>
                Data Peserta
              </h5>
              <div class="row g-3">
                <div class="col-md-6">
                  <small class="text-muted">Nama</small>
                  <p class="mb-0 fw-bold" style="color: var(--heading-color);">{{ $hasilDiagnosis->nama_pasien }}</p>
                </div>
                <div class="col-md-3">
                  <small class="text-muted">Umur</small>
                  <p class="mb-0 fw-bold" style="color: var(--heading-color);">{{ $hasilDiagnosis->umur }} tahun</p>
                </div>
                <div class="col-md-3">
                  <small class="text-muted">Tanggal Screening</small>
                  <p class="mb-0 fw-bold" style="color: var(--heading-color);">{{ $hasilDiagnosis->created_at->format('d M Y, H:i') }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Disclaimer -->
        <div class="row justify-content-center mb-4">
          <div class="col-lg-8">
            <div class="alert alert-warning d-flex align-items-start p-4 shadow-sm" role="alert" 
                 style="border-left: 5px solid #ffc107; border-radius: 8px;">
              <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-3 fs-3 text-warning"></i>
              <div>
                <strong>Disclaimer Penting:</strong><br>
                Hasil screening ini merupakan analisis awal menggunakan sistem pakar dan <strong>BUKAN merupakan diagnosis medis resmi</strong>. 
                Untuk diagnosis dan penanganan yang tepat, silakan konsultasikan dengan psikiater atau profesional kesehatan mental terkualifikasi.
              </div>
            </div>
          </div>
        </div>

        <!-- Accordions for Details -->
        <div class="row justify-content-center mb-4">
          <div class="col-lg-8">
            <div class="accordion" id="resultAccordion">
              
              <!-- All Diagnosis Results (Accordion) -->
              <div class="accordion-item border-0 shadow-sm rounded-3 mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAllDiagnosis">
                    <i class="bi bi-bar-chart-fill me-2" style="color: var(--accent-color);"></i>
                    <strong>Hasil Analisis Semua Diagnosis</strong>
                  </button>
                </h2>
                <div id="collapseAllDiagnosis" class="accordion-collapse collapse" data-bs-parent="#resultAccordion">
                  <div class="accordion-body">
                    
                    @forelse($hasilFiltered as $kode => $item)
                      @php
                        $diagnosisData = $item['diagnosis'];
                        $cfPercent = $item['cf_percentage'];
                        $barColor = $cfPercent >= 60 ? '#dc3545' : ($cfPercent >= 40 ? '#ffc107' : ($cfPercent >= 20 ? '#17a2b8' : '#6c757d'));
                        $isTop = ($kode === array_key_first($hasil));
                      @endphp
                      <div class="diagnosis-item mb-3 p-3 rounded {{ $isTop ? 'border border-2' : '' }}" 
                           style="background: {{ $isTop ? '#e7f5f5' : '#f8f9fa' }}; {{ $isTop ? 'border-color: var(--accent-color) !important;' : '' }}">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <div>
                            <span class="badge me-2" style="background-color: var(--accent-color);">{{ $kode }}</span>
                            <strong style="color: var(--heading-color);">{{ $diagnosisData['nama'] }}</strong>
                            @if($isTop)
                              <span class="badge bg-success ms-2">Tertinggi</span>
                            @endif
                          </div>
                          <span class="fw-bold" style="color: {{ $barColor }}; font-size: 1.1rem;">{{ $cfPercent }}%</span>
                        </div>
                        <div class="progress" style="height: 8px; border-radius: 4px;">
                          <div class="progress-bar" role="progressbar" 
                               style="width: {{ $cfPercent }}%; background-color: {{ $barColor }};" 
                               aria-valuenow="{{ $cfPercent }}" 
                               aria-valuemin="0" 
                               aria-valuemax="100"></div>
                        </div>
                        <small class="text-muted d-block mt-2">{{ $diagnosisData['deskripsi'] }}</small>
                      </div>
                    @empty
                      <p class="text-muted text-center mb-0">Tidak ada gejala terdeteksi</p>
                    @endforelse
                    
                  </div>
                </div>
              </div>
              
              <!-- Calculation Details (Accordion) -->
              <div class="accordion-item border-0 shadow-sm rounded-3 mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCalculation">
                    <i class="bi bi-calculator me-2" style="color: var(--accent-color);"></i>
                    <strong>Detail Perhitungan Certainty Factor</strong>
                  </button>
                </h2>
                <div id="collapseCalculation" class="accordion-collapse collapse" data-bs-parent="#resultAccordion">
                  <div class="accordion-body">
                    
                    @foreach($hasilFiltered as $kode => $item)
                      @if(!empty($item['details']))
                        <div class="calculation-section mb-4">
                          <h6 class="mb-3" style="color: var(--accent-color);">
                            {{ $kode }} - {{ $item['diagnosis']['nama'] }}
                            <span class="badge bg-secondary ms-2">CF Final: {{ $item['cf_percentage'] }}%</span>
                          </h6>
                          
                          <div class="table-responsive">
                            <table class="table table-sm table-bordered">
                              <thead class="table-light">
                                <tr>
                                  <th>Gejala</th>
                                  <th>Jawaban</th>
                                  <th>CF Pakar</th>
                                  <th>CF User</th>
                                  <th>CF Kombinasi</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($item['details'] as $detail)
                                  <tr>
                                    <td>
                                      <small class="fw-bold">{{ $detail['gejala_kode'] }}</small><br>
                                      <small class="text-muted">{{ Str::limit($detail['gejala_nama'], 40) }}</small>
                                    </td>
                                    <td>{{ ucwords(str_replace('_', ' ', $detail['jawaban'])) }}</td>
                                    <td>{{ $detail['cf_pakar'] }}</td>
                                    <td>{{ $detail['cf_user'] }}</td>
                                    <td class="fw-bold">{{ round($detail['cf_kombinasi'], 4) }}</td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          
                          <div class="formula-box p-3 rounded mb-3" style="background: #e7f5f5;">
                            <small class="text-muted">Rumus CF Kombinasi: CF = CF₁ + CF₂ × (1 - CF₁)</small><br>
                            <strong style="color: var(--accent-color);">CF Final {{ $kode }} = {{ round($item['cf_final'], 4) }} ({{ $item['cf_percentage'] }}%)</strong>
                          </div>
                        </div>
                        @if(!$loop->last)
                          <hr>
                        @endif
                      @endif
                    @endforeach

                  </div>
                </div>
              </div>
              
              <!-- Family Guide (Accordion) -->
              <div class="accordion-item border-0 shadow-sm rounded-3 mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFamilyGuide">
                    <i class="bi bi-people-fill me-2" style="color: var(--accent-color);"></i>
                    <strong>Panduan untuk Keluarga</strong>
                  </button>
                </h2>
                <div id="collapseFamilyGuide" class="accordion-collapse collapse" data-bs-parent="#resultAccordion">
                  <div class="accordion-body">
                    
                    @php
                      // Map diagnosis to partial file based on top diagnosis code
                      $topDiagnosisCode = array_key_first($hasil) ?? 'P001';
                      $diagnosisKey = strtolower($topDiagnosisCode);
                      $guideMap = [
                        'p001' => 'paranoid',
                        'p002' => 'hebephrenic',
                        'p003' => 'catatonic',
                        'p004' => 'residual',
                        'p005' => 'undifferentiated',
                      ];
                      $guidePartial = $guideMap[$diagnosisKey] ?? 'paranoid';
                    @endphp
                    
                    @include('public.partials.family-guide.' . $guidePartial)
                    
                    <hr class="my-4">
                    
                    <div class="text-center">
                      <a href="{{ url('/guide#services-family') }}" class="btn btn-outline-primary" style="color: var(--accent-color); border-color: var(--accent-color);">
                        <i class="bi bi-book me-2"></i>Baca Panduan Lengkap
                      </a>
                    </div>
                    
                  </div>
                </div>
              </div>
              
              <!-- Recommendations (Accordion) -->
              <div class="accordion-item border-0 shadow-sm rounded-3 mb-3">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRecommendations">
                    <i class="bi bi-lightbulb me-2" style="color: var(--accent-color);"></i>
                    <strong>Rekomendasi</strong>
                  </button>
                </h2>
                <div id="collapseRecommendations" class="accordion-collapse collapse" data-bs-parent="#resultAccordion">
                  <div class="accordion-body">
                    
                    <div class="row g-4">
                      <div class="col-md-6">
                        <div class="service-item h-100 p-3 pt-4">
                          <div class="service-icon-wrapper">
                            <i class="fa fa-user-md"></i>
                          </div>
                          <div class="service-details">
                            <h6>Konsultasi Profesional</h6>
                            <p class="small text-muted mb-0">Jika hasil menunjukkan risiko sedang-tinggi, segera konsultasikan dengan psikiater atau psikolog klinis.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="service-item h-100 p-3 pt-4">
                          <div class="service-icon-wrapper">
                            <i class="fa fa-phone-alt"></i>
                          </div>
                          <div class="service-details">
                            <h6>Hotline Kesehatan Mental</h6>
                            <p class="small text-muted mb-0">Into The Light: 119 ext 8 <br> Sejiwa: 119 ext 8 (24 jam)</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="service-item h-100 p-3 pt-4">
                          <div class="service-icon-wrapper">
                            <i class="fa fa-book-open"></i>
                          </div>
                          <div class="service-details">
                            <h6>Pelajari Lebih Lanjut</h6>
                            <p class="small text-muted mb-0">Baca informasi lengkap tentang skizofrenia dan penanganannya di halaman <a href="{{ url('/about') }}">Tentang Skizofrenia</a>.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="service-item h-100 p-3 pt-4">
                          <div class="service-icon-wrapper">
                            <i class="fa fa-hospital"></i>
                          </div>
                          <div class="service-details">
                            <h6>Fasilitas Kesehatan</h6>
                            <p class="small text-muted mb-0">Temukan daftar rumah sakit dan klinik kesehatan mental terdekat di halaman <a href="{{ url('/referrals') }}">Rujukan</a>.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="action-buttons d-flex flex-wrap justify-content-center gap-3">
              <a href="{{ url('/screening') }}" class="btn btn-primary px-4 py-2" style="background-color: var(--accent-color); border-color: var(--accent-color);">
                <i class="bi bi-arrow-repeat me-2"></i>Screening Ulang
              </a>
              <a href="{{ url('/') }}" class="btn btn-outline-primary px-4 py-2" style="color: var(--accent-color); border-color: var(--accent-color);">
                <i class="bi bi-house me-2"></i>Kembali ke Home
              </a>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Result Section -->

</main>

@endsection
