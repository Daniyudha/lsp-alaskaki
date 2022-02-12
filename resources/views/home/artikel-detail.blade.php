@extends('layouts.main_home')

@section('outCSS')

@endSection()

@section('contents')

<main id="main" data-aos="fade-up">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Detail Kegiatan</h2>
        <ol>
          <li><a href="index.html">Beranda</a></li>
          <li><a href="galeri.html">Galeri</a></li>
          <li>Kegiatan</li>
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
            <img src="https://i.postimg.cc/28PqLLQC/dotonburi-canal-osaka-japan-700.jpg" alt="">
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Informasi Kegiatan</h3>
            <ul>
              <li><strong>Kategori</strong>: Pertanian</li>
              <li><strong>Lokasi</strong>: Sawah Dul Ndeso</li>
              <li><strong>Tanggal</strong>: 01 March, 2020</li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>Tanam Padi</h2>
            <p>
              Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
          </div>
        </div>
        <div class="portfolio-description">
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endSection()

@section('outJS')

@endSection()