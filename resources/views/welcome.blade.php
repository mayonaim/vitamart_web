<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Profile Company</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/color-switcher.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">

  </head>

  <body>
    <!-- Header Section Start -->
    <header id="slider-area">
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">
          <a class="navbar-brand" href="#slider-area"><span class="lni-bulb"></span>VITAMART</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#slider-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios">Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li>

                @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link page-scroll">Home</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link page-scroll">Log in</a>
                    </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link page-scroll">Register</a>
                        </li>
                        @endif
                    @endauth
                @endif
            </ul>
          </div>
        </div>
      </nav>

      <!-- Main Carousel Section -->
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="{{ asset('img/slider/polnyeg.jpg') }}" alt="">
              <div class="carousel-caption text-left">
                <h3 class="wow fadeInRight" data-wow-delay="0.2s">Vitamart</h1>
                <h2 class="wow fadeInRight" data-wow-delay="0.4s">We Care & We Share</h2>
                <h4 class="wow fadeInRight" data-wow-delay="0.6s">VITA PMM</h4>
                <a href="{{ route('login') }}" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s">Login</a>
                <a href="{{ route('register') }}" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s">Register</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/slider/dani2.jpg') }}" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Bundled With Tons of</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Cutting-edge Features</h2>
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">Parallax, Video, Product, Premium Addons and More...</h4>
                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">View Works</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/slider/dani3.jpg') }}" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Ready For</h3>
                <h2 class="wow fadeInRight" data-wow-delay="0.6s">Multi-purpose Websites</h2>
                <h4 class="wow fadeInUp" data-wow-delay="0.6s">App, Business, SaaS and Landing Pages</h4>
                <a href="#" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">Purchase</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </header>
    <!-- Header Section End -->

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Our Services</h2>
          <span>Services</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-1">
                <i class="lni-pencil"></i>
              </div>
              <h4>Content Writing</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon color-2">
                <i class="lni-cog"></i>
              </div>
              <h4>Web Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon color-3">
                <i class="lni-stats-up"></i>
              </div>
              <h4>Graphic Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon color-4">
                <i class="lni-layers"></i>
              </div>
              <h4>UI/UX Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1s">
              <div class="icon color-5">
                <i class="lni-tab"></i>
              </div>
              <h4>App Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon color-6">
                <i class="lni-briefcase"></i>
              </div>
              <h4>Digital Marketing</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Call to Action Start -->
    <section class="call-action section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="cta-trial text-center">
              <h3>Are You Ready To Get Started?</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod<br> Lorem ipsum dolor sit amet, consectetuer</p>
              <a href="#" class="btn btn-common btn-effect">Purchase Now!</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action End -->

    <!-- Features Section Start -->
    <section id="features" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Why Choose Us</h2>
          <span>Why</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
        </div>
        <div class="row">
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-layout"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-layout"></i></div>
                <h4>Refreshing Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-tab"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-tab"></i></div>
                <h4>Fully Responsive</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-rocket"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-rocket"></i></div>
                <h4>Fast & Smooth</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-database"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-database"></i></div>
                <h4>SEO Optimized</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-leaf"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-leaf"></i></div>
                <h4>Clean Code</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-pencil"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-pencil"></i></div>
                <h4>Free 24/7 Support</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
        </div>
      </div>
    </section>
    <!-- Features Section End -->

    <!-- Start Video promo Section -->
    <section class="video-promo section">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="video-promo-content text-center">
                <a href="https://www.youtube.com/embed/LSgBpbgTlhw" class="video-popup"><i class="lni-film-play"></i></a>
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Our Introductory Video</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Learn more about us, its only 30mins</p>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Our Works</h2>
          <span>Works</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common btn-effect" data-filter="all">
                All
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".design">
                Design
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".development">
                Development
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".print">
                Print
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">
          <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-1.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-1.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-2.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-2.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-3.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-3.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-4.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-4.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-5.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-5.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix print design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="img/portfolio/img-6.jpg" alt="" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="img/portfolio/img-6.jpg"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends -->


    <!-- Counter Section Start -->
    <div class="counters section bg-defult">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-rocket"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">100</span>%</h3>
                <h4>Faster</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-coffee-cup"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">700</span></h3>
                <h4>Cup of Coffee</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-user"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">10000</span>+</h3>
                <h4>Active Clients</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-heart"></i>
              </div>
              <div class="fact-count">
                <h3><span class="counter">1689</span></h3>
                <h4>Peoples Love</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Counter Section End -->

    <!-- Testimonial Section Start -->
    <section class="testimonial section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="touch-slider owl-carousel">
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img1.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Johnathan Doe</a></h2>
                      <span>Marketing Head Matrix media</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img2.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Oidila Matik</a></h2>
                      <span>President Lexo Inc</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img3.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">- Alex Dattilo</a></h2>
                      <span>CEO Optima Inc</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img2.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Oidila Matik</a></h2>
                      <span>President Lexo Inc</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img1.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">- Alex Dattilo</a></h2>
                      <span>CEO Optima Inc</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                    <span><i class="lni-star"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Call To Action Section Start -->
    <section id="cta" class="section" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="cta-text">
              <h5>Stil confused? Download a free lite version to get started!</h5>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 text-right">
            <a href="#" class="btn btn-border">Download</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Call To Action Section Start -->

    <!-- Team section Start -->
    <section id="team" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Team</h2>
                <span>Team</span>
                <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <img src="{{ asset('img/team/vita1.jpg') }}" alt="">
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Vita</h4>
                                <p>President PMM</p>
                                <ul class="social-list">
                                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <img src="{{ asset('img/team/vita1.jpg') }}" alt="">
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Vita</h4>
                                <p>President PMM</p>
                                <ul class="social-list">
                                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <img src="{{ asset('img/team/vita1.jpg') }}" alt="">
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Vita</h4>
                                <p>President PMM</p>
                                <ul class="social-list">
                                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <img src="{{ asset('img/team/vita1.jpg') }}" alt="">
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Vita</h4>
                                <p>President PMM</p>
                                <ul class="social-list">
                                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <img src="{{ asset('img/team/vita1.jpg') }}" alt="">
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Vita</h4>
                                <p>President PMM</p>
                                <ul class="social-list">
                                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <img src="{{ asset('img/team/vita1.jpg') }}" alt="">
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Vita</h4>
                                <p>President PMM</p>
                                <ul class="social-list">
                                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <img src="{{ asset('img/team/vita1.jpg') }}" alt="">
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Vita</h4>
                                <p>President PMM</p>
                                <ul class="social-list">
                                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <img src="{{ asset('img/team/vita1.jpg') }}" alt="">
                        <div class="team-details">
                            <div class="team-inner">
                                <h4 class="team-title">Vita</h4>
                                <p>President PMM</p>
                                <ul class="social-list">
                                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team section End -->


    <!-- Contact Section Start -->
    <section id="contact" class="section">
      <div class="contact-form">
        <div class="container">
          <div class="section-header">
            <h2 class="section-title">Get In Touch</h2>
            <span>Contact</span>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
          </div>
          <div class="row">
            <div class="col-lg-9 col-md-9 col-xs-12">
              <div class="contact-block">
<div class="text-center">
                  <h2>You are using Free Version</h2>
                  <h4>Please, purchase full version to get all features and pages</h4><br>
                  <b>Including:</b>
                  <p>- 4 Homepage Variations</p>
                  <p>- All Elements and Features</p>
                  <p>- Amazing Slider</p>
                  <p>- Documentation File</p>
                  <p>- Quick Support</p>
                  <p>- Permission to Use in Commercial Projects</p>
                  <p>- Footer Credit Removal</p>
                  <p>- SASS Files</p>
                  <br>
                  <a href="https://rebrand.ly/essence-purchase-ud" target="_blank" class="btn btn-common btn-lg">Purchase Now</a>
</div>
              </div>
            </div>



            <div class="col-lg-3 col-md-3 col-xs-12">
              <div class="contact-deatils">
                <!-- Content Info -->
                <div class="contact-info_area">
                  <div class="contact-info">
                    <i class="lni-map"></i>
                    <h5>Location</h5>
                    <p>1900 Pico Blvd, New York br Centernial, colorado</p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <i class="lni-star"></i>
                    <h5>E-mail</h5>
                    <p>info@example.com</p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <i class="lni-phone"></i>
                    <h5>Phone</h5>
                    <p>+48 123 456 789</p>
                  </div>
                  <!-- Icon -->
                  <ul class="footer-social">
                    <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                    <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 padding-0">
            <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"></object>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section End -->

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3>Essence</h3>
              <div class="textwidget">
                <p>If you think you have the passion,
                attitude and capability to join us
                the next big software company
                s so that we can get the convers.</p>
              </div>
              <ul class="footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Short Link</h3>
                <ul class="menu">
                  <li><a href="#">Service</a></li>
                  <li><a href="#">Wishlist</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Advance Sarch</a></li>
                  <li><a href="#">Site Map</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Contact Us</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Address :</strong> <span>1900 Pico Blvd, New York br Centernial, colorado</span>
                  </li>
                  <li>
                    <strong>Phone :</strong> <span>+48 123 456 789</span>
                  </li>
                  <li>
                    <strong>E-mail :</strong> <span><a href="#">info@example.com</a></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Instagram</h3>
                <ul class="instagram-footer">
                  <li><a href="#"><img src="img/instagram/insta1.jpg" alt=""></a></li>
                  <li><a href="#"><img src="img/instagram/insta2.jpg" alt=""></a></li>
                  <li><a href="#"><img src="img/instagram/insta3.jpg" alt=""></a></li>
                  <li><a href="#"><img src="img/instagram/insta4.jpg" alt=""></a></li>
                  <li><a href="#"><img src="img/instagram/insta5.jpg" alt=""></a></li>
                  <li><a href="#"><img src="img/instagram/insta6.jpg" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->

      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="float-right">
                <ul class="nav nav-inline">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">About Prime</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">TOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Return Policy</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/color-switcher.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
