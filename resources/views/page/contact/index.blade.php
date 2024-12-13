@extends('layouts.main')

@section('content')

<div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>{{ $title }}<br></h1>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Page Title -->

<section id="contact" class="contact section">

    <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
    <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126903.98706946727!2d106.53805!3d-6.296601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fd75b58d8827%3A0x291f83cf2721fae3!2sTaman%20Pendidikan%20Islam%20Ar%20Rauf!5e0!3m2!1sid!2sus!4v1731762711067!5m2!1sid!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

        <div class="col-lg-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
            <h3>Alamat</h3>
            <p>Jl Raya Palasari no 48 RT.003/RW.03. Kp.Serdang, Desa Serdang Wetan, Kec. Legok, Kab. Tangerang, 15820</p>
            </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
            <h3>Telepon</h3>
            <p>0858 3837 5849</p>
            </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
            <h3>Email</h3>
            <p>info@ar-rauf.org</p>
            </div>
        </div><!-- End Info Item -->

        </div>

        <div class="col-lg-8">
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
            </div>

            </div>
        </form>
        </div><!-- End Contact Form -->

    </div>

    </div>

</section><!-- /Contact Section -->

@endsection
