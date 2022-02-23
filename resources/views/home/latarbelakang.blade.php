@extends('layouts.main_home')

@section('outCSS')

@endSection()

@section('contents')

<main id="main" data-aos="fade-up">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Latar Belakang</h2>
                <h3>Tentang Kami</h3>
                <!-- <p class="fw-normal">Akurat, terpercaya dan berkelas dunia</p> -->
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('home_assets') }}/img/about-img.png" class="img-fluid rounded-cus" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <h3>LEMBAGA SERTIFIKASI PROFESI ALAS KAKI</h3>
                    <p class="fst-italic mb-0">
                        LSP Alas Kaki adalah lembaga pelaksana kegiatan sertifikasi profesi yang mendapat Lisensi Badan Nasional Sertifikasi Profesi (BNSP), berdasarkan Keputusan Ketua BNSP Nomor KEP.1290/BNSP/XII/2018.</p>
                    <ul>
                        <li class="align-items-center">
                            <i class="">1</i>
                            <div>
                                <!-- <h5>Ullamco laboris nisi ut aliquip consequat</h5> -->
                                <p>Peningkatkan kualitas dan daya saing sumber daya manusia sangat diperlukan sertifikasi kompetensi kerja pada era globalisasi dan liberisasi perdagangan seiring diberlakukannya era perdagangan bebas seperti AFTA (Asian Free Trade Area), APEC (The Asia Pasific Economic Cooperation) dan MEA ( Masyarakat Ekonomi Asean ) untuk meningkatkan daya saing produk nasional.</p>
                            </div>
                        </li>
                        <li class="align-items-center">
                            <i class="">2</i>
                            <div>
                                <!-- <h5>Magnam soluta odio exercitationem reprehenderi</h5> -->
                                <p>Amanat Undang-Undang Nomor 3 tahun 2014 tentang Perindustrian pasal18 ayat (1) menyebutkan bahwa Pembangunan tenaga kerja Industri sebagaimana dimaksud dalam Pasal 16 ayat (4) huruf b dilakukan untuk menghasilkan tenaga kerja Industri yang mempunyai kompetensi kerja di bidang Industri sesuai dengan Standar Kompetensi Kerja Nasional Indonesia.</p>
                            </div>
                        </li>
                        <li class="align-items-center">
                            <i class="">3</i>
                            <div>
                                <!-- <h5>Magnam soluta odio exercitationem reprehenderi</h5> -->
                                <p>Untuk memenuhi kebutuhan industri akan tenaga kerja yang kompeten dalam bidang Industri Sepatu / Alas Kaki</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

</main><!-- End #main -->

@endSection()

@section('outJS')

@endSection()