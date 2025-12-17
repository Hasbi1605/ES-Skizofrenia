@extends('layouts.app')

@section('title', 'Kontak Developer - SchizoCheck')

@section('content')

 <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Bantuan</a></li>
            <li class="breadcrumb-item active current">Kontak Developer</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Kontak Developer</h1>
        <p>Laporkan bug, masalah teknis, atau berikan saran pengembangan untuk sistem pakar ini.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container">
        <div class="contact-wrapper">
          <div class="contact-info-panel">
            <div class="contact-info-header">
              <h3>Informasi Pengembang</h3>
              <p>Aplikasi ini dikembangkan dan dikelola oleh <strong>Muhammad Hasbi Ash Shiddiqi</strong>. Kami sangat menghargai setiap masukan untuk perbaikan sistem.</p>
            </div>

            <div class="contact-info-cards">
              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-person-badge-fill"></i>
                </div>
                <div class="card-content">
                  <h4>Developer</h4>
                  <p>Muhammad Hasbi Ash Shiddiqi<br>Full Stack Developer</p>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-envelope-open"></i>
                </div>
                <div class="card-content">
                  <h4>Email Support</h4>
                  <p>hasbi@schizocheck.com<br>dev@schizocheck.com</p>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-github"></i>
                </div>
                <div class="card-content">
                  <h4>GitHub</h4>
                  <p><a href="https://github.com/Hasbi1605/ES-Skizofrenia" target="_blank">Hasbi1605/ES-Skizofrenia</a><br>Project Repository</p>
                </div>
              </div>
            </div>

            <div class="social-links-panel">
              <h5>Media Sosial Developer</h5>
              <div class="social-icons">
                <a href="https://www.linkedin.com/in/mhasbia16" target="_blank" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/Hasbi1605" target="_blank" title="GitHub"><i class="bi bi-github"></i></a>
                <a href="https://hasbi1605.github.io/" target="_blank" title="Portfolio"><i class="bi bi-globe"></i></a>
              </div>
            </div>
          </div>

          <div class="contact-form-panel">
            <div class="form-container">
              <h3>Laporkan Masalah Sistem</h3>
              <p>Temukan bug atau error? Silakan laporkan detailnya di sini agar segera kami perbaiki.</p>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row gy-3">
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="nameInput" name="name" placeholder="Nama Pelapor" required="">
                      <label for="nameInput">Nama Pelapor</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="email" class="form-control" id="emailInput" name="email" placeholder="Email Address" required="">
                      <label for="emailInput">Email Address</label>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-floating">
                      <select class="form-select" id="categoryInput" name="category" required="">
                        <option value="">-- Pilih Jenis Laporan --</option>
                        <option value="bug">Bug / Error Aplikasi</option>
                        <option value="ui">Masalah Tampilan (UI/UX)</option>
                        <option value="feature">Saran Fitur Baru</option>
                        <option value="content">Koreksi Konten/Materi</option>
                        <option value="other">Lainnya</option>
                      </select>
                      <label for="categoryInput">Jenis Laporan</label>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="subjectInput" name="subject" placeholder="Judul Masalah" required="">
                      <label for="subjectInput">Judul Masalah</label>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" id="messageInput" name="message" rows="6" placeholder="Deskripsi Masalah (Sertakan langkah-langkah untuk mereproduksi error jika ada)" required="" style="height: 150px"></textarea>
                      <label for="messageInput">Deskripsi Masalah</label>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="loading" style="display:none;">Loading...</div>
                    <div class="error-message"></div>
                    <div class="sent-message" style="display:none;">Laporan Anda telah terkirim. Terima kasih atas kontribusi Anda!</div>

                    <div class="d-grid">
                      <button type="submit" class="btn-submit">Kirim Laporan <i class="bi bi-bug-fill ms-2"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section><!-- /Contact Section -->

  </main>

@endsection