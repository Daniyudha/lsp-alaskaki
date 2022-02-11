
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
                        <p class="fst-italic">
                        LSP Alas Kaki adalah lembaga pelaksana kegiatan sertifikasi profesi yang mendapat Lisensi Badan Nasional Sertifikasi Profesi (BNSP), berdasarkan Keputusan Ketua BNSP Nomor KEP.1290/BNSP/XII/2018.</p>
                        <ul>
                            <li>
                            <i class="bx bx-store-alt"></i>
                                <div>
                                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                                </div>
                            </li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

    </main><!-- End #main -->

@endSection()

@section('outJS')

@endSection()
