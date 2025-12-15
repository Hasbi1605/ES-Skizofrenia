@extends('layouts.screening')

@section('title', 'Konfirmasi Screening - SchizoCheck')

@section('content')

<div class="container">
  <div class="row justify-content-center align-items-center" style="min-height: calc(100vh - 120px);">
    <div class="col-lg-6 col-md-8">
      
      <div class="confirm-card text-center p-5 bg-white rounded-4 shadow" data-aos="zoom-in">
        
        <!-- Icon -->
        <div class="confirm-icon mb-4">
          <div class="icon-circle mx-auto" style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--accent-color) 0%, #004d4d 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <i class="bi bi-clipboard-check" style="font-size: 3rem; color: white;"></i>
          </div>
        </div>
        
        <!-- Title -->
        <h2 class="mb-3" style="color: var(--heading-color);">Siap Memulai Screening?</h2>
        
        <!-- User Info -->
        <div class="user-info mb-4 p-3 rounded-3" style="background: #f8f9fa;">
          <p class="mb-0 text-muted">
            <i class="bi bi-person-circle me-2"></i>
            Halo, <strong style="color: var(--accent-color);">{{ session('screening_user.nama') }}</strong>
          </p>
        </div>
        
        <!-- Instructions -->
        <div class="instructions text-start mb-4 p-4 rounded-3" style="background: #fff8e1; border-left: 4px solid #ffc107;">
          <h6 class="mb-3 d-flex align-items-center" style="color: #856404;">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            Petunjuk Penting
          </h6>
          <ul class="mb-0 ps-3" style="color: #856404;">
            <li class="mb-2">Jawab setiap pertanyaan dengan <strong>jujur</strong> sesuai kondisi yang Anda alami</li>
            <li class="mb-2">Tidak ada jawaban yang benar atau salah</li>
            <li class="mb-2">Hasil akurat bergantung pada kejujuran jawaban Anda</li>
            <li class="mb-0">Selesaikan <strong>semua pertanyaan</strong> untuk mendapatkan hasil diagnosis</li>
          </ul>
        </div>
        
        <!-- Statistics -->
        <div class="row g-3 mb-4">
          <div class="col-4">
            <div class="stat-item p-3 rounded-3" style="background: #f0f9f9;">
              <i class="bi bi-list-check d-block mb-1" style="font-size: 1.5rem; color: var(--accent-color);"></i>
              <strong style="color: var(--heading-color);">17</strong>
              <small class="d-block text-muted">Pertanyaan</small>
            </div>
          </div>
          <div class="col-4">
            <div class="stat-item p-3 rounded-3" style="background: #f0f9f9;">
              <i class="bi bi-clock d-block mb-1" style="font-size: 1.5rem; color: var(--accent-color);"></i>
              <strong style="color: var(--heading-color);">5-10</strong>
              <small class="d-block text-muted">Menit</small>
            </div>
          </div>
          <div class="col-4">
            <div class="stat-item p-3 rounded-3" style="background: #f0f9f9;">
              <i class="bi bi-layers d-block mb-1" style="font-size: 1.5rem; color: var(--accent-color);"></i>
              <strong style="color: var(--heading-color);">5</strong>
              <small class="d-block text-muted">Tahap</small>
            </div>
          </div>
        </div>

        <!-- Confirmation Question -->
        <p class="mb-4 fw-medium" style="color: var(--heading-color);">
          Apakah Anda yakin ingin melanjutkan?
        </p>
        
        <!-- Action Buttons -->
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
          <a href="{{ url('/screening') }}" class="btn btn-outline-secondary px-4 py-2 rounded-pill">
            <i class="bi bi-arrow-left me-2"></i>Kembali
          </a>
          <a href="{{ route('screening.questions', ['step' => 1]) }}" class="btn btn-primary px-5 py-2 rounded-pill" 
             style="background-color: var(--accent-color); border-color: var(--accent-color);">
            Ya, Mulai Sekarang<i class="bi bi-arrow-right ms-2"></i>
          </a>
        </div>
        
      </div>
      
    </div>
  </div>
</div>

<style>
  .confirm-card {
    animation: fadeInUp 0.6s ease;
  }
  
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  .icon-circle {
    animation: pulse 2s infinite;
  }
  
  @keyframes pulse {
    0%, 100% {
      box-shadow: 0 0 0 0 rgba(0, 127, 127, 0.4);
    }
    50% {
      box-shadow: 0 0 0 15px rgba(0, 127, 127, 0);
    }
  }
</style>

@endsection
