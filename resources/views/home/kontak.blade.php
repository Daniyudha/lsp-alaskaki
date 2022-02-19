@extends('layouts.main_home')

@section('outCSS')

@endSection()

@section('contents')

<main>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kontak</h2>
                <h3><span>Kontak Kami</span></h3>
                <p>Jangan pernah ragu untuk menghubungi kami melalui media berikiut ini</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Alamat Kami</h3>
                        <p>Jl. Sokonandi No.9, Yogyakarta</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Kami</h3>
                        <p>lspakjogjakarta@yahoo.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Telepon Kami</h3>
                        <p>(0274) 512929</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="info-box mb-4">
                        <i class="bx bi-phone"></i>
                        <h3>Phone</h3>
                        <p>+62 8995050571</p>
                    </div>
                </div>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.2284440145183!2d110.38091622914895!3d-7.798953299648726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a577f20961b67%3A0xde1b0aac02bf604!2sAlas%20Kaki!5e0!3m2!1sen!2sid!4v1642704561521!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main>
<!-- End #main -->

@endSection()

@section('outJS')

@endSection()