@extends('layouts.main_home')

@section('outCSS')

@endSection()

@section('contents')
  <!-- ======= Hero Section ======= -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-aos="zoom-out" data-aos-delay="100">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('home_assets') }}/img/hero-1.png" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <img src="{{ asset('home_assets') }}/img/hero-2.png" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <img src="{{ asset('home_assets') }}/img/hero-3.png" class="d-block w-100" alt="...">
        <!-- <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div> -->
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- End Hero -->

  <!-- ======= Daftar ======= -->
  <div class="daftar">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h4>Lembaga Sertifikasi Profesi AK</h4>
          <p>Adalah Lembaga Sertifikasi yang bergerak di dibidang industri alas kaki yang telah mendapatkan lisensi BNSP untuk melakukan sertifikasi.</p>
          <a href="{{ url('form-pendaftaran') }}" target="_blank"><button type="button" class="btn btn-warning">Daftar Sekarang</button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Daftar -->
  
  <main id="main">
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        
        <div class="row">
          
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>Skema Sertifikasi</p>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-person"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Asesor Kompetensi</p>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-person-plus"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pemegang Sertifikat</p>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bx bx-location-plus"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>Tempat Uji Kompetensi</p>
            </div>
          </div>
        
        </div>
      
      </div>
    </section>
    <!-- End Counts Section -->
    
    <!-- Swiper Bidang Keahlian-->
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h3>Bidang Keahlian yang di <span>Sertifikasi</span></h3>
      </div>
    </div>
    <div id="featured-services" class="swiper mySwiper featured-services">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- End Swiper Bidang Keahlian-->
    
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg mt-5">
      <div class="container" data-aos="zoom-in">
        
        <div class="row">
          
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('home_assets') }}/img/clients/logo-kemenprin.png" class="img-fluid" alt="">
          </div>
          
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('home_assets') }}/img/clients/logo-bnsp.png" class="img-fluid" alt="">
          </div>
          
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('home_assets') }}/img/clients/logo-bbkkp.png" class="img-fluid" alt="">
          </div>
          
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('home_assets') }}/img/clients/logo-atk.png" class="img-fluid" alt="">
          </div>
          
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('home_assets') }}/img/clients/logo-bdi.png" class="img-fluid" alt="">
          </div>
          
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('home_assets') }}/img/clients/logo-aprisindo.png" class="img-fluid" alt="">
          </div>
        
        </div>
      
      </div>
    </section>
    <!-- End Clients Section -->
  
  </main><!-- End #main -->
@endSection()

@section('outJS')

@endSection()