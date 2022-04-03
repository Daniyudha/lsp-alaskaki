<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }} - {{ env('APP_NAME') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('home_assets') }}/img/logo-lsp.png" rel="icon">
  <link href="{{ asset('home_assets') }}/img/logo-lsp.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('home_assets') }}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('home_assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('home_assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('home_assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('home_assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('home_assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @yield('outCSS')
  <!-- Template Main CSS File -->
  <link href="{{ asset('home_assets') }}/css/style.css" rel="stylesheet">

</head>

<body>
  @if(\Illuminate\Support\Facades\Session::has('message'))
  {!! \Illuminate\Support\Facades\Session::get('message') !!}
  @endif
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:lspakjogjakarta@yahoo.com">lspakjogjakarta@yahoo.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="https://wa.me/628995050571?text=Halo,%20info%20tentang%20LSP%20AK%20Jogja%20?" target="_blank">+628995050571</a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        @auth
          <a href="{{ route('dashboard.admin') }}">Dashboard</a>
          <a href="{{ route('logout') }}">Logout</a>
        @endauth
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">
    <a href="{{ url('/') }}" class="logo"><img src="{{ asset('home_assets') }}/img/logo-lsp.png" alt=""></a>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="{{ url('/') }}">BERANDA</a></li>
        <li class="dropdown"><a href="#"><span>PROFIL</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ url('visi-dan-misi') }}">Visi & Misi</a></li>
            <li><a href="{{ url('latar-belakang') }}">Latar Belakang</a></li>
            <li><a href="{{ url('fungsi-dan-tujuan') }}">Fungsi dan Tujuan</a></li>
            <li><a href="{{ url('struktur-organisasi') }}">Struktur Organisasi</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>SERTIFIKASI</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ url('asesor') }}">Asesor Kompetensi</a></li>
            <li><a href="{{ url('peserta') }}">Peserta Uji Kompetensi</a></li>
            <li><a href="{{ url('skema') }}">Skema Kompetensi</a></li>
            <li><a href="{{ url('tempat') }}">Tempat Uji Kompetensi</a></li>
            <li><a href="{{ url('pemegang') }}">Pemegang Sertifikat</a></li>
            <li><a href="{{ url('laporan') }}">Laporan Asesmen</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>MEDIA INFORMASI</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ url('galeri') }}">Galeri Foto</a></li>
            <li><a href="{{ url('syarat-dan-ketentuan') }}">FAQ</a></li>
            <li><a href="{{ url('dokumentasi') }}">Dokumentasi Aplikasi</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="{{ url('kontak') }}">KONTAK KAMI</a></li>
        <li>
          <a href="{{ url('form-pendaftaran') }}" target="_blank"><button type="button" class="btn btn-warning">Daftar Sekarang</button></a>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->
  
  </div>
</header>
<!-- End Header -->

  @yield('contents')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="pb-lg-4">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="{{ url('/') }}">
              <img src="{{ asset('home_assets') }}/img/logo-lsp.png" class="d-block w-25" alt="...">
            </a>
            <p>
              Jl. Sokonandi No.9 Yogyakarta<br>
              Kota Yogyakarta<br>
              Daerah Istimewa Yogyakarta <br><br>
              <strong>Phone :</strong> +62 899-5050-571<br>
              <strong>Telepon :</strong> (0274) 512929<br>
              <strong>Email :</strong> lspakjogjakarta@yahoo.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Informasi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Fungsi dan Tujuan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Struktur Organisasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Asesor Kompetensi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Skema Kompetensi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tempat Uji Kompetensi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Laporan Asesmen</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Galeri Foto</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sosial Media Kami</h4>
            <p>Kunjungi sosial media kami untuk informasi terbaru.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-youtube"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>LSP AK Jogja</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed & Developed by <a href="#">Gega Creative</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('home_assets') }}/vendor/purecounter/purecounter.js"></script>
<script src="{{ asset('home_assets') }}/vendor/aos/aos.js"></script>
<script src="{{ asset('home_assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('home_assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('home_assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ asset('home_assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('home_assets') }}/vendor/waypoints/noframework.waypoints.js"></script>
{{--<script src="{{ asset('home_assets') }}/vendor/php-email-form/validate.js"></script>--}}
@yield('outJS')
<!-- Template Main JS File -->
<script src="{{ asset('home_assets') }}/js/main.js"></script>

</body>

</html>
