@extends('layouts.main_home')

@section('outCSS')

@endSection()

@section('contents')
  <main>
    
    <!-- ======= Gallery Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        
        <div class="section-title">
          <h2>GALERI</h2>
          <h3>Koleksi <span>Foto</span> Kegiatan Kami</h3>
          <p>Setiap kegiatan yang kami lakukan akan kami dokumentasikan yang kemudian akan disajikan untuk anda</p>
        </div>
        
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-menjahit">Menjahit</li>
              <li data-filter=".filter-pengemalan">Pengemalan</li>
              <li data-filter=".filter-pengeleman">Pengeleman</li>
            </ul>
          </div>
        </div>
        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          
          @foreach($menjahit as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-menjahit">
            <img src="{{ asset('storage/gallery/'.$item->image) }}" class="img-fluid" alt="Foto {{ $item->title }}">
            <div class="portfolio-info">
              <h4>{{ $item->title }}</h4>
              <p>{{ $item->descriptions }}</p>
              <a href="{{ asset('storage/gallery/'.$item->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-zoom-in"></i></a>
            </div>
          </div>
          @endforeach
  
            @foreach($pengemalan as $item)
              <div class="col-lg-4 col-md-6 portfolio-item filter-pengemalan">
                <img src="{{ asset('storage/gallery/'.$item->image) }}" class="img-fluid" alt="Foto {{ $item->title }}">
                <div class="portfolio-info">
                  <h4>{{ $item->title }}</h4>
                  <p>{{ $item->descriptions }}</p>
                  <a href="{{ asset('storage/gallery/'.$item->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            @endforeach
  
            @foreach($pengeleman as $item)
              <div class="col-lg-4 col-md-6 portfolio-item filter-pengeleman">
                <img src="{{ asset('storage/gallery/'.$item->image) }}" class="img-fluid" alt="Foto {{ $item->title }}">
                <div class="portfolio-info">
                  <h4>{{ $item->title }}</h4>
                  <p>{{ $item->descriptions }}</p>
                  <a href="{{ asset('storage/gallery/'.$item->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            @endforeach
        </div>
      </div>
    </section>
    <!-- End Gallery Section -->
  
  </main>
@endSection()

@section('outJS')

@endSection()