<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - Magang Fasilkom</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/tema/img/logo-fakultas.png')}}" rel="icon">
  <link href="{{asset('/tema/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/tema/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <link href="{{asset('/tema/css/style.css')}}" rel="stylesheet">

  @yield('extracss')

</head>

<body>

  <!-- Header -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <img src="{{asset('/tema/img/id-card.png')}}" alt="">
        <span>Magang Fasilkom</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/infopeluang')}}">Info Peluang</a></li>
          <li class="dropdown"><a href="{{url('/bimbingan')}}"><span>Bimbingan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('/dashboard/bimbingan')}}">Data Pembimbing</a></li>
              <li><a href="{{url('/dashboard/bimbingan-create')}}">Usul Plot Pembimbing</a></li>
              </li>
            </ul>
            @if(Auth::check())
                <li><a class="nav-link scrollto" href="{{url('/dashboard')}}">Dashboard</a></li>
                    <li><a class="getstarted scrollto btn-danger" href="{{url('/logout')}}" style="background-color:red !important; ">Logout</a></li>
                @else
                    <li><a class="getstarted scrollto" href="{{url('/login')}}">Login</a></li>
            @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    @yield('home')

  <main id="main">
    @yield('main')
  </main><!-- End #main -->

  <!-- Footer -->
  <footer id="footer" class="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="{{url('/')}}" class="logo d-flex align-items-center">
              <img src="{{asset('/tema/img/id-card.png')}}" alt="">
              <span>Magang Fasilkom</span>
            </a>
            <p>Sistem informasi khusus mahasiswa/i Fasilkom Universitas Singaperbangsa Karawang yang sedang mencari peluang magang. Tersedia juga beberapa perusahaan yang mengiklankan peluang magang dan membuka kesempatan kandidat untuk melamar pekerjaan magang yang tepat.</p>
            <div class="social-links mt-3">
              <a href="https://www.instagram.com/fasilkomunsika/" class=""><i class="bi bi-instagram"></i></a>
              <a href="https://www.youtube.com/@fasilkomunsikaofficial8915" class="youtube"><i class="bi bi-youtube"></i></a>
              <a href="https://www.linkedin.com/in/teknik-informatika-unsika-ba74ba20a/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Prospek Kerja</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/infopeluang')}}">Web Developer</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/infopeluang')}}">Application Engineer</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/infopeluang')}}">Game Programmer</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/infopeluang')}}">Data Scientist</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/infopeluang')}}">IT Maintenance</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/infopeluang')}}">Software Developer</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/infopeluang')}}">UI/UX Designer</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/infopeluang')}}">Network Engineer</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{url('/infopeluang')}}">AI/ML Engineer</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Website</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="https://ti.unsika.ac.id/">Informatika</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://si.unsika.ac.id/">Sistem Informasi</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://unsika.ac.id/">Unsika</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Fakultas Ilmu Komputer</h4>
            <p>
              Jl. HS. Ronggo Waluyo<br>
              Teluk Jambe Timur, Karawang,<br>
              Jawa Barat, Indonesia, Indonesia - 41361<br><br>
              <strong>Email :</strong> fasilkom@unsika.ac.id.<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="credits">
        Designed by <a href="https://instagram.com/fzhraa21_">Fathimatuz Zahra</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/tema/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('/tema/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('/tema/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/tema/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/tema/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/tema/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('/tema/vendor/php-email-form/validate.js')}}"></script>

  <script src="tema/js/main.js"></script>

  @yield('extrajs')

</body>

</html>
