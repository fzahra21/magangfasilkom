@extends('layouts.master')

@section('title')
Home
@endsection

@section('home')
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Peluang Magang</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Find the jobs that matter to you!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="{{url('/infopeluang')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('/tema/img/hero-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
@endsection

@section('main')

  <!-- Features Section -->
  <section id="features" class="features">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Knowledge</h2>
        <p>Manfaat Magang bagi Mahasiswa</p>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <img src="{{asset('/tema/img/features.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Pengalaman Kerja Profesional</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Mengasah Skill</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Mendapat Mentor</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Nilai Lebih Dalam CV</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Penghasilan Tambahan</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Meningkatkan Kepercayaan Diri</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Kesempatan Mendapat Pekerjaan</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Memperluas Relasi</h3>
              </div>
            </div>

          </div>
        </div>

      </div> <!-- / row -->

      <!-- Feature Tabs -->
      <div class="row feture-tabs" data-aos="fade-up">
        <div class="col-lg-6">
          <h3>Syarat Magang Mahasiswa</h3>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
            <li>
              <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Syarat & Ketentuan</a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#tab2">Jenjang Pendidikan</a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#tab3">Dokumen</a>
            </li>
          </ul><!-- End Tabs -->

          <!-- Tab Content -->
          <div class="tab-content">

            <div class="tab-pane fade show active" id="tab1">
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Mahasiswa dari seluruh Indonesia tanpa memandang ras, warna kulit, jenis kelamin, bahasa, agama, serta situasi ekonomi dan sosial lainnya.</h4>
              </div>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Mahasiswa aktif dan terdaftar di Pangkalan Data Pendidikan Tinggi (PDDIKTI) atau yang belum dinyatakan lulus dari program studi terakreditasi dari seluruh Perguruan Tinggi Negeri (PTN) dan Perguruan Tinggi Swasta (PTS) di bawah naungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemdikbudristek).</h4>
              </div>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Mahasiswa diharapkan menjalani program secara penuh waktu (fulltime) dan fokus pada program Magang</h4>
              </div>
            </div><!-- End Tab 1 Content -->

            <div class="tab-pane fade show" id="tab2">
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>D2: minimal semester 3</h4>
              </div>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>D3: minimal semester 4</h4>
              </div>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4> D4 dan S1: minimal semester</h4>
              </div>
            </div><!-- End Tab 2 Content -->

            <div class="tab-pane fade show" id="tab3">

              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Curriculum Vitae (CV)</h4>
              </div>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Transkrip Nilai</h4>
              </div>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Surat Rekomendasi dari Universitas</h4>
              </div>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Surat Pernyataan Tanggungjawab Mutlak (SPTJM)</h4>
              </div>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Foto/scan KTP</h4>
              </div>

            </div><!-- End Tab 3 Content -->

          </div>

        </div>

        <div class="col-lg-6">
          <img src="{{asset('/tema/img/features-2.png')}}" class="img-fluid" alt="">
        </div>

      </div><!-- End Feature Tabs -->

      <!-- Feature Icons -->
      {{-- <div class="row feature-icons" data-aos="fade-up">
        <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>

        <div class="row">

          <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('/tema/img/features-3.png')}}" class="img-fluid p-4" alt="">
          </div>

          <div class="col-xl-8 d-flex content">
            <div class="row align-self-center gy-4">

              <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="ri-line-chart-line"></i>
                <div>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="ri-stack-line"></i>
                <div>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="ri-brush-4-line"></i>
                <div>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="ri-magic-line"></i>
                <div>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="ri-command-line"></i>
                <div>
                  <h4>Molestiae dolor</h4>
                  <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <i class="ri-radar-line"></i>
                <div>
                  <h4>Explicabo consectetur</h4>
                  <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
      <!-- End Feature Icons --> --}}

    </div>

  </section><!-- End Features Section -->



  <!-- Pricing Section -->
  <section id="pricing" class="pricing">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Pilihan Sektor Industri</p>
      </header>

      <div class="row gy-4" data-aos="fade-left">

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
            <h3 style="color: #07d5c0;">Teknologi</h3>
            <img src="{{asset('/images/sektor/tik.png')}}" class="img-fluid" alt="">
            <a href="{{asset('/infopeluang')}}" class="btn-buy">Lihat</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
            <h3 style="color: #65c600;">Kesehatan & Pelayanan</h3>
            <img src="{{asset('/images/sektor/kesehatan.png')}}" class="img-fluid" alt="">
            <a href="{{asset('/infopeluang')}}" class="btn-buy">Lihat</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
            <h3 style="color: #ff901c;">Badan Usaha Milik Negara</h3>
            <img src="{{asset('/images/sektor/bumn.png')}}" class="img-fluid" alt="">
            <a href="{{asset('/infopeluang')}}" class="btn-buy">Lihat</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
            <h3 style="color: #ff0071;">Jasa</h3>
            <img src="{{asset('/images/sektor/service.png')}}" class="img-fluid" alt="">
            <a href="{{asset('/infopeluang')}}" class="btn-buy">Lihat</a>
          </div>
        </div>
      </div>

    </div>

  </section><!-- End Pricing Section -->


  <!-- Lowongan Section -->
  <section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>terbaru</h2>
        <p>Lowongan Magang</p>
      </header>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                Social Media Creative – Magang <br>
              </p>
              <div class="profile">
                <img src="{{asset('/images/lowongan/vicenza.png')}}" class="testimonial-img" alt="">
                <h3>PT Rindang Sakti Persada (Vicenza)</h3>
                <h4>Ruko Sunter Permai Indah Blok B No. 1, Jln. Mitra Sunter Boulevard Jakarta Utara 14350</h4>
              </div>
            </div>
          </div><!-- End lowongan item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                Purchasing Exim (Jakarta)<br>
              </p>
              <div class="profile">
                <img src="{{asset('/images/lowongan/dmg.jpg')}}" class="testimonial-img" alt="">
                <h3>Media Grafindo (EPSON Premium Partner)</h3>
                <h4>Jakarta Barat</h4>
              </div>
            </div>
          </div><!-- End lowongan item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                Admin Unit<br>
              </p>
              <div class="profile">
                <img src="{{asset('/images/lowongan/toyota.jpg')}}" class="testimonial-img" alt="">
                <h3>PT Mulia Mega Makmur (JD Toyota)</h3>
                <h4>Cikarang, Kabupaten Bekasi</h4>
              </div>
            </div>
          </div><!-- End lowongan item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                Customer Service - Jogja (Contract Based)<br>
              </p>
              <div class="profile">
                <img src="{{asset('/images/lowongan/shopee.jpg')}}" class="testimonial-img" alt="">
                <h3>Shopee Internasional Indonesia</h3>
                <h4>Yogyakarta, DI Yogyakarta</h4>
              </div>
            </div>
          </div><!-- End lowongan item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
               Staff Administrasi
              </p>
              <div class="profile">
                <img src="{{asset('/images/lowongan/bose.png')}}" class="testimonial-img" alt="">
                <h3>PT Prima Audio Indonesia</h3>
                <h4>Jakarta Utara, Jakarta Raya</h4>
              </div>
            </div>
          </div><!-- End lowongan item -->
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- End Testimonials Section -->

  <!-- Team Section -->
  <section id="team" class="team">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Bimbingan dari orang hebat</h2>
        <p>Pembimbing Magang</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="{{asset('/tema/img/team/team-1.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Data Scientist</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="member-img">
              <img src="{{asset('/tema/img/team/team-2.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Software Engineer</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="member-img">
              <img src="{{asset('/tema/img/team/team-3.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>UI Designer</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="member">
            <div class="member-img">
              <img src="{{asset('/tema/img/team/team-4.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Full Stack Developer</span>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Team Section -->

  <!-- Clients Section -->
  <section id="clients" class="clients">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Bekerjasama dengan</h2>
        <p>Perusahaan Ternama</p>
      </header>

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="{{asset('/tema/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('/tema/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('/tema/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('/tema/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('/tema/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('/tema/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('/tema/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{asset('/tema/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

  </section><!-- End Clients Section -->

@endsection
