@extends('layouts.app')

@section('title', 'Screening Gejala Skizofrenia - SchizoCheck')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Layanan</a></li>
            <li class="breadcrumb-item active current">Screening Gejala</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Screening Gejala Skizofrenia</h1>
        <p>Kuesioner terstruktur untuk membantu mendeteksi tanda-tanda awal skizofrenia</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Assessment Section -->
    <section id="assessment" class="services section">

      <div class="container" data-aos="fade-up">

        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">

            <div class="row gy-4 justify-content-center mb-5">
              <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="50">
                <div class="service-item h-100 p-4 border rounded-3 bg-white shadow-sm">
                  <div class="service-icon-wrapper mb-3 text-primary">
                    <i class="bi bi-clock fs-1"></i>
                  </div>
                  <div class="service-details">
                    <h5 class="fw-bold mb-2">15-20 Menit</h5>
                    <p class="text-muted small mb-0">Tes dapat diselesaikan dalam waktu singkat</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item h-100 p-4 border rounded-3 bg-white shadow-sm">
                  <div class="service-icon-wrapper mb-3 text-primary">
                    <i class="bi bi-shield-lock fs-1"></i>
                  </div>
                  <div class="service-details">
                    <h5 class="fw-bold mb-2">Privasi Terjamin</h5>
                    <p class="text-muted small mb-0">Data kesehatan mental Anda dilindungi dengan enkripsi</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
                <div class="service-item h-100 p-4 border rounded-3 bg-white shadow-sm">
                  <div class="service-icon-wrapper mb-3 text-primary">
                    <i class="bi bi-graph-up fs-1"></i>
                  </div>
                  <div class="service-details">
                    <h5 class="fw-bold mb-2">Hasil Instan</h5>
                    <p class="text-muted small mb-0">Dapatkan laporan penilaian risiko segera setelah selesai</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item h-100 p-4 border rounded-3 bg-white shadow-sm">
                  <div class="service-icon-wrapper mb-3 text-primary">
                    <i class="bi bi-person-check fs-1"></i>
                  </div>
                  <div class="service-details">
                    <h5 class="fw-bold mb-2">Berbasis Ahli</h5>
                    <p class="text-muted small mb-0">Dikembangkan dan divalidasi oleh profesional</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="alert alert-warning d-flex align-items-center p-4 mb-5 mx-auto shadow-sm" role="alert" style="max-width: 800px; text-align: left; border-left: 5px solid #ffc107;" data-aos="fade-up" data-aos-delay="250">
               <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-3 fs-3 text-warning"></i>
               <div>
                 <strong>Catatan Penting:</strong> Screening ini bukan pengganti diagnosa profesional. Jika hasil menunjukkan risiko tinggi, segera konsultasikan dengan ahli psikiatri.
               </div>
            </div>

            <button type="button" class="btn btn-primary btn-lg px-5 py-3 rounded-pill shadow" data-bs-toggle="modal" data-bs-target="#screeningModal" data-aos="zoom-in" data-aos-delay="300" style="background-color: var(--accent-color); border-color: var(--accent-color);">
              Mulai Screening Sekarang <i class="bi bi-arrow-right ms-2"></i>
            </button>

          </div>
        </div>

      </div>

    </section><!-- /Assessment Section -->

    <!-- Screening Modal -->
    <div class="modal fade" id="screeningModal" tabindex="-1" aria-labelledby="screeningModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header" style="background-color: var(--accent-color); color: white;">
            <h5 class="modal-title" id="screeningModalLabel">Data Diri Peserta</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{ route('screening.start') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Masukkan nama lengkap">
              </div>
              <div class="mb-3">
                <label for="age" class="form-label">Umur</label>
                <input type="number" class="form-control" id="age" name="age" required placeholder="Contoh: 25">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="nama@email.com">
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Tempat Tinggal</label>
                <textarea class="form-control" id="address" name="address" rows="2" required placeholder="Alamat domisili saat ini"></textarea>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">No. Telepon / WhatsApp</label>
                <input type="tel" class="form-control" id="phone" name="phone" required placeholder="08xxxxxxxxxx">
              </div>
              
              <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-primary" style="background-color: var(--accent-color); border-color: var(--accent-color);">Lanjut ke Pertanyaan Screening</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</main>

@endsection
