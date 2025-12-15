@extends('layouts.screening')

@section('title', 'Pertanyaan ' . $step . ' dari ' . $totalSteps . ' - SchizoCheck')

@section('content')

<div class="container">

  <!-- Progress Section -->
  <div class="row justify-content-center mb-4">
    <div class="col-lg-8 col-xl-6">
      <div class="progress-card p-4 bg-white rounded-4 shadow-sm">
        
        <!-- Progress Text -->
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div>
            <span class="fw-bold" style="color: var(--accent-color); font-size: 1.1rem;">
              Pertanyaan {{ $step }} dari {{ $totalSteps }}
            </span>
          </div>
          <span class="badge rounded-pill px-3 py-2" style="background-color: var(--accent-color);">
            {{ round(($step / $totalSteps) * 100) }}%
          </span>
        </div>
        
        <!-- Progress Bar -->
        <div class="progress mb-4" style="height: 8px; border-radius: 4px; background-color: #e9ecef;">
          <div class="progress-bar" role="progressbar" 
               style="width: {{ ($step / $totalSteps) * 100 }}%; background-color: var(--accent-color); border-radius: 4px;" 
               aria-valuenow="{{ ($step / $totalSteps) * 100 }}" 
               aria-valuemin="0" 
               aria-valuemax="100"></div>
        </div>
        
        <!-- Step Dots -->
        <div class="step-dots d-flex justify-content-between">
          @for($i = 1; $i <= $totalSteps; $i++)
            <div class="step-dot-wrapper text-center flex-fill">
              <div class="step-dot mx-auto {{ $i < $step ? 'completed' : '' }} {{ $i == $step ? 'current' : '' }}">
                @if($i < $step)
                  <i class="bi bi-check" style="font-size: 0.8rem;"></i>
                @else
                  {{ $i }}
                @endif
              </div>
            </div>
          @endfor
        </div>
        
      </div>
    </div>
  </div>

  <!-- Questions Form -->
  <form action="{{ route('screening.storeAnswers') }}" method="POST" id="questionForm">
    @csrf
    <input type="hidden" name="step" value="{{ $step }}">
    
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-6">
        
        @foreach($gejalas as $index => $gejala)
          <div class="question-card mb-4 p-4 bg-white rounded-4 shadow-sm">
            
            <!-- Question Header -->
            <div class="question-header d-flex align-items-start mb-3">
              <span class="question-number me-3">
                {{ ($step - 1) * 5 + $index + 1 }}
              </span>
              <h5 class="question-text mb-0">{{ $gejala->nama }}</h5>
            </div>
            
            <!-- Answer Options -->
            <div class="answer-section mt-4">
              <p class="text-muted small mb-3">
                <i class="bi bi-info-circle me-1"></i>
                Seberapa sering Anda mengalami hal ini?
              </p>
              
              <div class="answer-grid">
                @php
                  $options = [
                    'tidak' => ['label' => 'Tidak Pernah', 'icon' => 'bi-x-circle', 'weight' => '0%'],
                    'tidak_tahu' => ['label' => 'Tidak Yakin', 'icon' => 'bi-question-circle', 'weight' => '20%'],
                    'sedikit_yakin' => ['label' => 'Jarang', 'icon' => 'bi-dash-circle', 'weight' => '40%'],
                    'cukup_yakin' => ['label' => 'Kadang', 'icon' => 'bi-circle-half', 'weight' => '60%'],
                    'yakin' => ['label' => 'Sering', 'icon' => 'bi-circle-fill', 'weight' => '80%'],
                    'sangat_yakin' => ['label' => 'Selalu', 'icon' => 'bi-check-circle-fill', 'weight' => '100%'],
                  ];
                  $currentValue = $currentAnswers[$gejala->kode] ?? null;
                @endphp
                
                @foreach($options as $value => $option)
                  <div class="answer-option">
                    <input type="radio" 
                           class="btn-check" 
                           name="answers[{{ $gejala->kode }}]" 
                           id="{{ $gejala->kode }}_{{ $value }}" 
                           value="{{ $value }}"
                           {{ $currentValue === $value ? 'checked' : '' }}
                           required>
                    <label class="answer-label" for="{{ $gejala->kode }}_{{ $value }}">
                      <i class="bi {{ $option['icon'] }}"></i>
                      <span class="label-text">{{ $option['label'] }}</span>
                    </label>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        @endforeach

        <!-- Navigation Buttons -->
        <div class="navigation-buttons d-flex justify-content-between align-items-center mt-5 mb-4">
          @if($step > 1)
            <a href="{{ route('screening.questions', ['step' => $step - 1]) }}" class="btn btn-nav btn-prev">
              <i class="bi bi-arrow-left me-2"></i>Sebelumnya
            </a>
          @else
            <div></div>
          @endif

          <button type="submit" class="btn btn-nav btn-next">
            @if($step < $totalSteps)
              Selanjutnya<i class="bi bi-arrow-right ms-2"></i>
            @else
              <i class="bi bi-check-circle me-2"></i>Lihat Hasil
            @endif
          </button>
        </div>

      </div>
    </div>
  </form>

</div>

<style>
  .progress-card {
    border: 1px solid rgba(0,0,0,0.05);
  }
  
  .step-dot {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #e9ecef;
    color: #6c757d;
    font-size: 0.85rem;
    font-weight: 600;
    transition: all 0.3s ease;
  }
  
  .step-dot.completed {
    background-color: var(--accent-color);
    color: white;
  }
  
  .step-dot.current {
    background-color: var(--accent-color);
    color: white;
    box-shadow: 0 0 0 4px rgba(0, 127, 127, 0.15);
    transform: scale(1.1);
  }
  
  .question-card {
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
  }
  
  .question-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
  }
  
  .question-number {
    background-color: var(--accent-color);
    color: white;
    width: 36px;
    height: 36px;
    min-width: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 0.9rem;
  }
  
  .question-text {
    color: var(--heading-color);
    font-weight: 500;
    line-height: 1.5;
    font-size: 1rem;
  }
  
  .answer-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
  }
  
  @media (max-width: 576px) {
    .answer-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }
  
  .answer-label {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 12px 8px;
    border: 2px solid #e9ecef;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.2s ease;
    background: #fafafa;
    text-align: center;
    min-height: 80px;
  }
  
  .answer-label i {
    font-size: 1.3rem;
    margin-bottom: 6px;
    color: #6c757d;
    transition: all 0.2s ease;
  }
  
  .answer-label .label-text {
    font-size: 0.75rem;
    color: #6c757d;
    font-weight: 500;
  }
  
  .answer-label:hover {
    border-color: var(--accent-color);
    background: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 127, 127, 0.15);
  }
  
  .answer-label:hover i,
  .answer-label:hover .label-text {
    color: var(--accent-color);
  }
  
  .btn-check:checked + .answer-label {
    background-color: var(--accent-color);
    border-color: var(--accent-color);
    box-shadow: 0 4px 15px rgba(0, 127, 127, 0.3);
  }
  
  .btn-check:checked + .answer-label i,
  .btn-check:checked + .answer-label .label-text {
    color: white;
  }
  
  .btn-nav {
    padding: 12px 28px;
    border-radius: 50px;
    font-weight: 500;
    transition: all 0.3s ease;
  }
  
  .btn-prev {
    background: white;
    border: 2px solid #e9ecef;
    color: #6c757d;
  }
  
  .btn-prev:hover {
    background: #f8f9fa;
    border-color: var(--accent-color);
    color: var(--accent-color);
  }
  
  .btn-next {
    background: var(--accent-color);
    border: 2px solid var(--accent-color);
    color: white;
    box-shadow: 0 4px 15px rgba(0, 127, 127, 0.3);
  }
  
  .btn-next:hover {
    background: #005f5f;
    border-color: #005f5f;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 127, 127, 0.4);
  }
</style>

@endsection
