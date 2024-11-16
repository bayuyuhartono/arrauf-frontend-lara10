@extends('layouts.main')

@section('content')

<section id="hero" class="hero section dark-background">

    <img src="{{asset('assets/images/arraufwall.jpg')}}" alt="" data-aos="fade-in">

    <div class="container col-lg-8">
      <h2 data-aos="fade-up" data-aos-delay="100">Ar Rauf Islamic School Membangun Generasi Cerdas & Berakhlak Mulia Sesuai Sunnah</h2>
      <p data-aos="fade-up" data-aos-delay="200">Perhatian pendidikan anak sejak dini ini akan memberikan efek positif pada pembentukan karakter. Dan tiada pendidikan yang lebih agung selain mengenalkan kitab Al-Qur’an dan sunnah sejak dini.</p>
      <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
        <a href="/daftar" class="btn-get-started">Daftar Sekarang</a>
      </div>
    </div>

  </section><!-- /Hero Section -->

  <section id="why-us" class="section why-us">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <h3>Kenapa Pilih Kami?</h3> 
            </div>
        </div>
        </br>

        <div class="row gy-4">

            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="why-box">
                    <h3>Kurikulum</h3>
                    <ul>
                        <li>Dinniyah dan Akhlak</br>
                            <span>
                                Pendidikan yang berfokus pada penguatan diniyyah (Aqidah, Figh dan Hadits) dan akhlak budi pekerti yang baik sesuai dengan pemahaman Ahlussunnah wal Jama'ah.
                            </span>
                            </li>
                            <li>Tahfidz</br>
                            <span>
                                Pendidikan yang berfokus pada penguatan hafalan dari segi makhroj, Tahsin, tajwid dan kelancaran dalam hafalan.
                            </span>
                        </li>
                    </ul>
                </div>
            </div><!-- End Why Box -->

            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="why-box">
                    <ul>
                        <h3>Fasilitas</h3>
                        <li>Ruang Belajar (Ber AC untuk SD dan bertema lingkungan untuk)</li>
                        <li>Ruang Tunggu</li>
                        <li>Ruang Bermain</li>
                        <li>Lapangan Bermain</li>
                        <li>Taman Bacaan</li>
                    </ul>
                </div>
            </div><!-- End Why Box -->

            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="why-box">
                    <h3>Pengajar</h3>
                    <ul>
                        <li>Catatan pendidikan guru mulai dari SMA - S1 dari universitas</li>
                        <li>Berpengalaman dan berkepribadian</li>
                        <li>Setiap minggu guru-guru dan staf pengajar mendapatkan training peningkatan</li>
                    </ul>
                </div>
            </div><!-- End Why Box -->

            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="why-box">
                    <h3>Kegiatan</h3>
                    <ul>
                        <li>Pendampingan dan pembinaan akhlak</li>
                        <li>Pembinaan praktek ibadah dan berbahasa (arab dan inggris)</li>
                        <li>Pembinaan dalam kreativitas dan kerajinan</li>
                        <li>Upacara 2 bahasa</li>
                        <li>Fieldtrip bersama walimurid</li>
                        <li>Pidato, MTQ, MHQ, Beladiri</li>
                        <li>Memanah, Berenang</li>
                        <li>Bina Tsaqofah dan wawasan keislaman</li>
                    </ul>
                </div>
            </div><!-- End Why Box -->

        </div>

    </div>

  </section><!-- /Why Us Section -->

  <section class="page-title" data-aos="fade">
      <div class="container">
          <div class="row d-flex justify-content-center ">
          <div class="col-lg-12">
              <h1>Motto Kami<br></h1>
              <i class="bi bi-check-circle"></i> <span><b>Salimul Aqidah:</b> “Memiliki pemahaman aqidah yang lurus, sebagaimana para salaful ummah.”</span><br>
              <i class="bi bi-check-circle"></i> <span><b>Akhlaqul Karimah:</b> “Memiliki Akhlak yang baik untuk diri sendiri, orangtua, masyarakat dan seluruh makhluk Allah ﷻ yang ada di muka bumi ini.”</span><br>
              <i class="bi bi-check-circle"></i> <span><b>Shahihul Ibadah:</b> “Memiliki kemampuan untuk melakukan ibadah sesuai dengan apa yang diajarkan oleh Allah ﷻ dan Rasul-nya ﷺ.”</span><br>
              <i class="bi bi-check-circle"></i> <span><b>Qawiyul Hifd:</b> “Memiliki kemampuan hafalan kuat yang didukung dengan kemampuan tahsin dan tajwid yang baik dan benar.”</span>
          </div>
          </div>
      </div>
  </section><!-- End Page Title -->

  <section id="hero" class="hero light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h2>“Perhatian pendidikan anak sejak dini ini akan memberikan efek positif pada pembentukan karakter”</h2>
                    <p>Ar Rauf Islamic School</p>
                    <a href="/daftar" class="btn-get-started">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>

  </section><!-- /Counts Section -->

    <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Yang mereka katakan tentang sekolah kami</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <h3>Diky Mulyadi</h3>
                  <h4>Wali Murid</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Alhamdulillah sekarang sudah ada sekolah bermanhaj ahlussunnah wal jama’ah di area Serdang kabupaten Tanggerang. Semoga sekolah ini bisa semakin membawa manfaat bagi masyarakat sekitar<span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <h3>Satrio Purnomo</h3>
                  <h4>Wali Murid</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Alhamdulillah, semoga dengan adanya sekolah ini mampu melahirkan generasi yang mampu menyebarkan pemahaman ahlussunnah wal jama’ah<span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <h3>Hamba Allah</h3>
                  <h4>Wali Murid</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Alhamdulillah saya sangat terbantu dengan adanya sekolah ini, karena sekolah ini membawa pengaruh positif di bidang pendidikan & juga keagamaan<span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <h3>Fuadi Bashir</h3>
                  <h4>Wali Murid</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Alhamdulillah semenjak anak saya sekolah di Ar Rauf Islamic School, anak saya jadi bisa mengaji dan semakin berbakti kepada orangtua<span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

  </section><!-- /Testimonials Section -->

@endsection