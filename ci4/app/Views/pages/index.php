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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Romain Sumalde</h1>
      <h2 data-text="Programmer" class="text sec">Programmer</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>About Me</span>
          <h2>About Me</h2>
          <p></p>
        </div>
        <div class="row">
          <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content ps-lg-4 d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Romain Gerard Sumalde</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.apcwebprog.com</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Pasay City, Philippines</span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Course:</strong> <span>Mobile and Internet</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>rcsumalde@student.apc.edu.ph</span></li>  
                  </ul>
                </div>
              </div>
              <!-- About Me New -->
              <div id="aboutM">
                <div class="containerM">
                    <div class="rowM">
                        <div class="about-col-2">
                            <div class="tab-titles">
                                <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                                <p class="tab-links" onclick="opentab('experience')">Experience</p>
                                <p class="tab-links" onclick="opentab('education')">Education</p>
                            </div>
                            <div class="tab-contents active-tab" id="skills">
                                <ul>
                                    <li><span>DaVinci Resolve</span></li>
                                    <li><span>Full Stack Developer</span></li>
                                    <li><span>Photography</span></li>
                                </ul>
                            </div>
                            <div class="tab-contents" id="experience">
                                <ul>
                                    <li><span>Android Studio</span></li>
                                    <li><span>DaVinci Resolve</span></li>
                                    <li><span>Power Apps</span></li>
                                </ul>
                            </div>
                            <div class="tab-contents" id="education">
                                <ul>
                                    <li><span>San Isidro Catholic School</span></li>
                                    <li><span>iACADEMY</span></li>
                                    <li><span>Asia Pacific College</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
              var tablinks = document.getElementsByClassName("tab-links");
              var tabcontents = document.getElementsByClassName("tab-contents");
              function opentab(tabname){
            
              for(tablink of tablinks){
                tablink.classList.remove("active-link");
              }
              for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
              }
              event.currentTarget.classList.add("active-link");
              document.getElementById(tabname).classList.add("active-tab");
            }
            </script>
              <!-- End About Me New -->
            </div><!-- End .content-->

            <div class="skills-content ps-lg-4">
              <div class="progress">
                <span class="skill">HTML <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">60%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Me Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public/img/guestIcon.png" class="testimonial-img" alt="">
                <h3>Name</h3>
                <h4>Guest</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Message
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public/img/guestIcon.png" class="testimonial-img" alt="">
                <h3>Name</h3>
                <h4>Guest</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Message
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public/img/guestIcon.png" class="testimonial-img" alt="">
                <h3>Name</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Message
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public/img/guestIcon.png" class="testimonial-img" alt="">
                <h3>Name</h3>
                <h4>Guest</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Message
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public/img/guestIcon.png" class="testimonial-img" alt="">
                <h3>Name</h3>
                <h4>Guest</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Message
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>My Portfolio</span>
          <h2>My Portfolio</h2>
          <p>Here are some of my works</p>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="img/pics/10.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="img/pics/20.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="img/pics/9.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="img/pics/21.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="img/pics/14.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="img/pics/29.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="img/pics/11.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="img/pics/13.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="img/pics/7.jpg" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End My Portfolio Section -->

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

          <div class="col-lg-6">
          <?= session()->getFlashdata('error') ?>
            <form action="create" method="post" role="form" class="php-email-form">
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
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>