<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Mona - Model Agency HTML5 Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Mona - Model Agency HTML5 Template</title>

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="wrapper">
      <div class="cssload-loader"></div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="monaNav">

          <!-- Background Curve -->
          <div class="bg-curve" style="background-image: url(./img/core-img/curve.png);"></div>

          <!-- Logo -->
          <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">
            <!-- Menu Close Button -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li><a href="./index.html">Home</a></li>
                <li><a href="#">Pages</a>
                  <ul class="dropdown">
                    <li><a href="./index.html">- Home</a></li>
                    <li><a href="./about.html">- About Us</a></li>
                    <li><a href="./projects.html">- Projects</a></li>
                    <li><a href="./models.html">- Models</a></li>
                    <li><a href="./casting.html">- Casting</a></li>
                    <li><a href="./blog.html">- Blog</a></li>
                    <li><a href="./single-blog.html">- Blog Details</a></li>
                    <li><a href="./contact.html">- Contact</a></li>
                    <li><a href="#">- Dropdown</a>
                      <ul class="dropdown">
                        <li><a href="#">- Dropdown Item</a></li>
                        <li><a href="#">- Dropdown Item</a>
                          <ul class="dropdown">
                            <li><a href="#">- Even Dropdown</a></li>
                            <li><a href="#">- Even Dropdown</a></li>
                            <li><a href="#">- Even Dropdown</a></li>
                            <li><a href="#">- Even Dropdown</a></li>
                          </ul>
                        </li>
                        <li><a href="#">- Dropdown Item</a></li>
                        <li><a href="#">- Dropdown Item</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="./projects.html">Project</a></li>
                <li><a href="./models.html">Models</a></li>
                <li class="current-item"><a href="./casting.html">Casting</a></li>
                <li><a href="#">Blog</a>
                  <ul class="dropdown">
                    <li><a href="./blog.html">- Blog</a></li>
                    <li><a href="./single-blog.html">- Blog Details</a></li>
                  </ul>
                </li>
                <li><a href="./contact.html">Contact</a></li>
              </ul>

              <!-- Search Icon -->
              <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                <i class="icon_search"></i>
              </div>
            </div>
            <!-- Nav End -->

          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Top Search Area Start ***** -->
  <div class="top-search-area">
    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <!-- Close Button -->
            <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <!-- Form -->
            <form action="index.html" method="post">
              <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
              <button type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Top Search Area End ***** -->

  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area">
    <div class="container h-100">
      <div class="row h-100 align-items-end">
        <div class="col-12">
          <div class="breadcumb--con">
            <h2 class="title">Casting</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Casting</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Casting Form Area Start ***** -->
  <section class="mona-casting-form-area section-padding-80-0">
    <div class="container">
      <div class="row align-items-center justify-content-between">

        <!-- Casting Form Thumbnail -->
        <div class="col-12 col-lg-6 col-xl-6">
          <div class="casting-form-thumbnail mb-80">
            <img src="./img/bg-img/30.jpg" alt="">
          </div>
        </div>

        <!-- Casting Form -->
        <div class="col-12 col-lg-6 col-xl-5">
          <div class="casting-form mona-contact-form mb-80">
            <div class="contact-heading">
              <h2>Do you want to be a Supermodel?</h2>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
            </div>

            <form action="#" method="post">
              <div class="form-group">
                <label for="fullName">Name:</label>
                <input type="text" class="form-control" name="full-name" id="fullName">
              </div>
              <div class="form-group">
                <label for="emailId">Email:</label>
                <input type="email" class="form-control" name="email" id="emailId">
              </div>
              <div class="form-group">
                <label for="resume">Resume:</label>
                <textarea class="form-control" name="message" rows="8" cols="80" id="resume"></textarea>
              </div>
              <button class="btn mona-btn btn-2 mt-15">Contact Us</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ***** Casting Form Area End ***** -->

  <!-- ***** Our Judges Area Start ***** -->
  <section class="mona-team-area">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Our Judges</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Single Judges Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-team-member-area mb-80">
            <div class="team-member-thumbnail">
              <!-- Thumbnail -->
              <img src="./img/bg-img/22.jpg" alt="">

              <!-- Share Info -->
              <div class="share-info">
                <!-- Share Icon -->
                <div class="share-icon">
                  <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                </div>
                <!-- Others Icon -->
                <div class="others-icon">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <div class="team-member-info">
              <h4>Herbert Ortiz</h4>
              <h6>Director</h6>
            </div>
          </div>
        </div>

        <!-- Single Judges Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-team-member-area mb-80">
            <div class="team-member-thumbnail">
              <!-- Thumbnail -->
              <img src="./img/bg-img/23.jpg" alt="">

              <!-- Share Info -->
              <div class="share-info">
                <!-- Share Icon -->
                <div class="share-icon">
                  <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                </div>
                <!-- Others Icon -->
                <div class="others-icon">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <div class="team-member-info">
              <h4>Steve Dunn</h4>
              <h6>top model</h6>
            </div>
          </div>
        </div>

        <!-- Single Judges Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-team-member-area mb-80">
            <div class="team-member-thumbnail">
              <!-- Thumbnail -->
              <img src="./img/bg-img/24.jpg" alt="">

              <!-- Share Info -->
              <div class="share-info">
                <!-- Share Icon -->
                <div class="share-icon">
                  <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                </div>
                <!-- Others Icon -->
                <div class="others-icon">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <div class="team-member-info">
              <h4>Philip Bell</h4>
              <h6>choreographer</h6>
            </div>
          </div>
        </div>

        <!-- Single Judges Area -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-team-member-area mb-80">
            <div class="team-member-thumbnail">
              <!-- Thumbnail -->
              <img src="./img/bg-img/25.jpg" alt="">

              <!-- Share Info -->
              <div class="share-info">
                <!-- Share Icon -->
                <div class="share-icon">
                  <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                </div>
                <!-- Others Icon -->
                <div class="others-icon">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <div class="team-member-info">
              <h4>Aiden Caldwell</h4>
              <h6>Model</h6>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ***** Our Judges Area End ***** -->

  <!-- ***** Client Feedback Area Start ***** -->
  <section class="clients-feedback-area section-padding-0-80 clearfix">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Success Stories</h2>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-12 col-md-10">
          <div class="slider slider-for">

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
              </div>
              <div class="ratings text-center">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="client-name text-center">
                <h5>Rodney Williams</h5>
                <span>Producer</span>
              </div>
            </div>

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
              </div>
              <div class="ratings text-center">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="client-name text-center">
                <h5>Nazrul Islam</h5>
                <span>Producer</span>
              </div>
            </div>

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
              </div>
              <div class="ratings text-center">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="client-name text-center">
                <h5>Williams Rodney</h5>
                <span>Producer</span>
              </div>
            </div>

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
              </div>
              <div class="ratings text-center">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="client-name text-center">
                <h5>Rodney Williams</h5>
                <span>Producer</span>
              </div>
            </div>

            <!-- Client Feedback Text -->
            <div class="client-feedback-text text-center">
              <div class="quote-icon">
                <i class="icon_quotations" aria-hidden="true"></i>
              </div>
              <div class="client-description text-center">
                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
              </div>
              <div class="ratings text-center">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="client-name text-center">
                <h5>Rodney Williams</h5>
                <span>Producer</span>
              </div>
            </div>

          </div>
        </div>

        <!-- Client Thumbnail Area -->
        <div class="col-12 col-md-6 col-lg-5">
          <div class="slider slider-nav">
            <div class="client-thumbnail">
              <img src="./img/bg-img/6.jpg" alt="">
            </div>
            <div class="client-thumbnail">
              <img src="./img/bg-img/7.jpg" alt="">
            </div>
            <div class="client-thumbnail">
              <img src="./img/bg-img/8.jpg" alt="">
            </div>
            <div class="client-thumbnail">
              <img src="./img/bg-img/6.jpg" alt="">
            </div>
            <div class="client-thumbnail">
              <img src="./img/bg-img/7.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Client Feedback Area End ***** -->

  <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area section-padding-80-0">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Logo -->
            <a href="#" class="d-block mb-4"><img src="./img/core-img/logo.png" alt=""></a>
            <p>Integer vehicula mauris libero, at molestie eros imperdiet sit amet. Suspendisse mattis ante sit amet ante.</p>
            <div class="copywrite-text">
              <p>&copy; 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Widget Title -->
            <h4 class="widget-title">Our Link</h4>

            <!-- Catagories Nav -->
            <nav>
              <ul class="our-link">
                <li><a href="#">New Faces</a></li>
                <li><a href="#">Model Of the Week</a></li>
                <li><a href="#">Classic Women</a></li>
                <li><a href="#">Privacy Terms</a></li>
                <li><a href="#">Classic Men</a></li>
                <li><a href="#">Conditions</a></li>
                <li><a href="#">Hair & Styles</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Widget Title -->
            <h4 class="widget-title">Contact</h4>
            <!-- Footer Content -->
            <div class="footer-content mb-30">
              <h4>+01-3-8888-6868</h4>
              <h6>40 Baria Sreet 133/2 NewYork City</h6>
            </div>
            <!-- Social Info -->
            <div class="footer-social-info">
              <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
              <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="js/mona.bundle.js"></script>
  <!-- Active js -->
  <script src="js/default-assets/active.js"></script>

</body>

</html>