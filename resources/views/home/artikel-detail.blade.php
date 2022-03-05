@extends('layouts.main_home')

@section('outCSS')

@endSection()

@section('contents')

<main id="main" data-aos="fade-up">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Detail Artikel</h2>
        <ol>
          <li><a href="{{ route('root') }}">Beranda</a></li>
          <li><a href="{{ route('home.article') }}">Artikel</a></li>
          <li>{{ $article->title }}</li>
        </ol>
      </div>
    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <img src="{{ asset('storage/news_image/'.$article->image) }}" alt="Gambar Artikel {{ $article->title }}">
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-description">
            <h2>{{ $article->title }}</h2>
            <p>
              {{ $article->content_thumbnail }}
            </p>
          </div>
        </div>
        <div class="portfolio-description">
          <p>
            {!! $article->content_full !!}
           </p>
        </div>
      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endSection()

@section('outJS')

@endSection()