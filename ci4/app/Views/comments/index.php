<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

<nav id="navbar" class="navbar">
  <ul>
    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
    <li><a class="nav-link scrollto" href="#about">About</a></li>
    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav>

</header>

<!-- ======= Contact Me Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <span>Contact Me</span>
      <h2>Contact Me</h2>
      <p>Get in touch</p>
    </div>

    <div class="row">

      <div class="col-lg-6">

        <div class="row">
          <div class="col-md-12">
            <div class="info-box">
              <i class="bx bx-share-alt"></i>
              <h3>Social Profiles</h3>
              <div class="social-links">
                <a href="https://twitter.com/RomainSumalde" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/Romain.Sumalde/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/romainsumalde/?hl=en" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/romain-gerard-sumalde-49272a21a/" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Me</h3>
              <p>rcsumalde@student.apc.edu.ph</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Me</h3>
              <p>+63 912 345 6789</p>
            </div>
          </div>
        </div>

      </div>
      <div class = "errors">
            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>
	    </div>
      <div class="col-lg-6">
        <form action="/lab3/ci4/public/comments" method="post" role="form" class="php-email-form">
        <?= csrf_field() ?>
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message">Error:</div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" name="submit" value="Create guest item">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Me Section -->

</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/purecounter/purecounter_vanilla.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/swiper/swiper-bundle.min.js"></script>
<script src="assets/waypoints/noframework.waypoints.js"></script>
<script src="assets/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="js/main.js"></script>

<h1 class="sub-title"><?= esc($title) ?></h1>
                    <br><br>
                    
                    <?php if (! empty($comments) && is_array($comments)): ?>

                    <?php foreach ($comments as $comment): ?>

                    <div class="portfolio-box">
                     <h3><?= esc($comment['name']) ?></h3>
                        <p><?= esc($comment['email']) ?></p><br>
                        <p><?= esc($comment['subject']) ?></p><br>
                        <p><?= esc($comment['message']) ?></p><br>

                     </div>
                    <br>

                <?php endforeach ?>

                <?php else: ?>

                <h3>No Comments</h3>    

                <p>Nothing to see here yet.</p>

                <?php endif ?>