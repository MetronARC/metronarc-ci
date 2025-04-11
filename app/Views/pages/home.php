<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    <div class="video-background">
      <video autoplay muted loop playsinline>
        <source src="assets/video/hero-welding.mp4" type="video/mp4">
        <!-- Fallback image for browsers that don't support video -->
        <img src="assets/img/hero-img.png" alt="Hero Background">
      </video>
    </div>

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
          <h1>Transforming heavy industries with cutting-edge IoT solutions</h1>
          <p>Real-time insights for enhanced efficiency, reduced rework costs, and unwavering quality assurance for your welding operations</p>
          <div class="d-flex">
            <a href="#contact" class="btn-get-started">Contact us</a>
            <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Demo Video</span></a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- /Hero Section -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>Our Services Include</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-stopwatch"></i></div>
            <h4><a href="" class="stretched-link">Arc On-Off Time</a></h4>
            <p>Arc-on Arc-off time per individual welder and machine</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-graph-up"></i></div>
            <h4><a href="" class="stretched-link">Productivity Analysis</a></h4>
            <p>Productivity analytics per welder, per station, per project.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
            <h4><a href="" class="stretched-link">Location and Down Time</a></h4>
            <p>Welding machine location and down-time</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-exclamation-circle"></i></div>
            <h4><a href="" class="stretched-link">Real Time Alerts</a></h4>
            <p>Real-time stop-work alerts based on weld specification attributes</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section>
  <!-- /Services Section -->

  <!-- Call To Action Section -->
  <section id="call-to-action" class="call-to-action section dark-background">

    <img src="assets/images/welding-image.jpg" alt="">

    <div class="container">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-9 text-center text-xl-start">
          <h3>Get in Touch with Us</h3>
          <p>We offer services for real-time insights for enhanced efficiency, reduced rework costs, and unwavering quality assurance.</p>
        </div>
        <div class="col-xl-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#">Contact us</a>
        </div>
      </div>

    </div>

  </section><!-- /Call To Action Section -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact Us</h2>
      <p>We are here to help you</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-5">

          <div class="info-wrap">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>1 North Bridge Road #18-06 High Street Centre Singapore 179094</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+65 9807 8025</p>
              </div>
            </div><!-- End Info Item -->

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4736.708703024176!2d103.8495087!3d1.2898642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19a0958fa7c5%3A0x50a3d9e38aea6147!2s1%20N%20Bridge%20Rd%2C%20%2318%2006%20High%20Street%20Centre%2C%20Singapore%20179094!5e1!3m2!1sen!2sid!4v1744354942306!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="col-lg-7">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <label for="name-field" class="pb-2">Your Name</label>
                <input type="text" name="name" id="name-field" class="form-control" required="">
              </div>

              <div class="col-md-6">
                <label for="email-field" class="pb-2">Your Email</label>
                <input type="email" class="form-control" name="email" id="email-field" required="">
              </div>

              <div class="col-md-12">
                <label for="subject-field" class="pb-2">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject-field" required="">
              </div>

              <div class="col-md-12">
                <label for="message-field" class="pb-2">Message</label>
                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
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

  </section>
  <!-- /Contact Section -->

</main>

<?= $this->endSection() ?>