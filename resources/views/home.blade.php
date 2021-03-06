
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
    <link rel="icon" href="frontend/img/logo.png" type="image/png">

  <link rel="stylesheet" href="frontend/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="frontend/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="frontend/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="frontend/vendors/linericon/style.css">
  <link rel="stylesheet" href="frontend/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="frontend/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="frontend/css/magnific-popup.css">
  <link rel="stylesheet" href="frontend/vendors/flat-icon/font/flaticon.css">

  <link rel="stylesheet" href="frontend/css/style.css">
</head>
<body>

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="#"><img src="frontend/img/bits.png" alt=""width="120" height="100"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="/about">About</a></li> 
              <li class="nav-item"><a class="nav-link" href="/speakers">Speakers</a>
                
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="/schedule">Schedule</a>                  
                  <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a>                  
                  <li class="nav-item"><a class="nav-link" href="/price">price</a>
                   <li class="nav-item"><a class="nav-link"  href="frontend/img/conferencebroucher.pdf" download>Download Broucher</a>                 
                </ul>
                </li>

                <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Attend Conference</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="/terms">Present Paper</a>                  
                  <li class="nav-item"><a class="nav-link" href="/price">Attend Conference</a>                               
                </ul>
                </li>    
              
               <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

            </ul>

            <ul class="nav-right text-center text-lg-right py-4 py-lg-0">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  
  <section class="hero-banner">
    <div class="container text-center">
      <span class="hero-banner-icon"><i class="flaticon-sing"></i></span>
      <p>22 - 28 November, 20, Balaji Institute of technology and science</p>
      <h1>CONFERENCE 2020</h1>
      <a class="button button-header" href="/price">Buy Ticket</a>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->


  <!--================ Innovation section Start =================-->
  <!-- <section class="section-padding--small bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
          <div class="innovative-wrapper">
            <h3 class="primary-text">Innovative With Experience <br class="d-none d-xl-block"> conference 2020</h3>
            <p class="h4 primary-text2 mb-3">Where The business World Meets</p>
            <p>Morning steas great earth for divide our good sixth called abunda itseld appear fisrd seaton upon above may bearing all moveth morning make subdue stars they are a goreat eart divide our good sixth one of that</p>
          </div>
        </div>
        <div class="col-lg-6 pl-xl-5">

          <ul class="clockdiv text-center" id="clockdiv">
            <li class="clockdiv-single clockdiv-day">
              <h1 class="days">50</h1>
              <span class="smalltext">Days</span>
            </li>
            <li class="clockdiv-single clockdiv-hour">
              <h1 class="hours">30</h1>
              <span class="smalltext">Hours</span>
            </li>
            <li class="clockdiv-single clockdiv-minute">
              <h1 class="minutes">30</h1>
              <span class="smalltext">Mins</span>
            </li>
          </ul>
          
          <div class="clockdiv-content text-center">
            <p class="h4 primary-text2 mb-2">November 22 -25, 2019 in Balaji institute of technology and science</p>
            <a class="button button-link" href="#">Get Ticket</a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--================ Innovation section End =================-->


  <!--================ Join section Start =================-->
  <!--================ Join section End =================-->


  <!--================ Speaker section Start =================-->
  
  <!--================ Speaker section End =================-->


  <!--================ Schedule section Start =================-->
  
  <!--================ Schedule section End =================-->


  <!--================ PriceTable section Start =================-->
  <section class="section-padding bg-gray">
    <div class="container">
      <div class="section-intro text-center pb-98px">
        <p class="section-intro__title">Join the event</p>
        <h2 class="primary-text">Choose Your Ticket</h2>
        <img src="img/home/section-style.png" alt="">
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="text-center card-priceTable">
            <div class="priceTable-header">
              <h3>Normal</h3>
              <p>Attend only first day</p>
              <h1 class="priceTable-price"><span>₹</span> 500</h1>
            </div>
            <ul class="priceTable-list">
              <li>
                <span class="position"><i class="ti-check"></i></span> Unlimited Entrance
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span> Comfortable Seat
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span> Paid Certificate
              </li>
              <li>
                <span class="negative"><i class="ti-close"></i></span> Food
              </li>
              <li>
                <span class="negative"><i class="ti-close"></i></span> Accommodation
              </li>
            </ul>
            <div class="priceTable-footer">
              <a class="button" href="/eventregister">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="text-center card-priceTable">
            <div class="priceTable-header">
              <h3>IEEE</h3>
              <p>Attend only first day</p>
              <h1 class="priceTable-price"><span>₹</span> 600.00</h1>
            </div>
            <ul class="priceTable-list">
              <li>
                <span class="position"><i class="ti-check"></i></span> Unlimited Entrance
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span> Comfortable Seat
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span> Paid Certificate
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span>  FOOD
              </li>
              <li>
                <span class="negative"><i class="ti-close"></i></span> Accommodation
              </li>
            </ul>
            <div class="priceTable-footer">
              <a class="button" href="/eventregister">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="text-center card-priceTable">
            <div class="priceTable-header">
              <h3>Advanced</h3>
              <p>Attend only first day</p>
              <h1 class="priceTable-price"><span>₹</span> 700.00</h1>
            </div>
            <ul class="priceTable-list">
              <li>
                <span class="position"><i class="ti-check"></i></span> Unlimited Entrance
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span> Comfortable Seat
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span> Paid Certificate
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span>  FOOD
              </li>
              <li>
                <span class="position"><i class="ti-check"></i></span>  Accommodation
              </li>
            </ul>
            <div class="priceTable-footer">
              <a class="button" href="/eventregister">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ PriceTable section End =================-->


  <!--================ Sponsor section Start =================-->
  <section class="section-padding--small sponsor-bg">
    <div class="container">
      <div class="section-intro text-center pb-80px">
        <p class="section-intro__title">Join the event</p>
        <h2 class="primary-text">Event Plan Sponsors</h2>
        <img src="img/home/section-style.png" alt="">
      </div>

      <div class="sponsor-wrapper mb-5 pb-4">
        <h3 class="sponsor-title mb-5">Gold Sponsor</h3>
        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="img/home/sponsor1.png" alt="">
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="img/home/sponsor2.png" alt="">
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="img/home/sponsor3.png" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="sponsor-wrapper sponsor-wrapper--small">
        <h3 class="sponsor-title mb-5">Silver Sponsor</h3>
        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="img/home/sponsor-sm-1.png" alt="">
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="img/home/sponsor-sm-2.png" alt="">
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
            <div class="sponsor-single">
              <img class="img-fluid" src="img/home/sponsor-sm-3.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Sponsor section End =================-->

  

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About </h6>
            <p>
              The world has become so fast paced that people don’t want to stand by reading a page of information to be  they would much rather look at a presentation and understand the message. It has come to a point where images and videos are used more to
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Navigation Links</h6>
            <div class="row">
              <div class="col">
                <ul>
                  <li><a href="/home">Home</a></li>
                  <li><a href="/about">About</a></li>
                  <li><a href="/speakers">Speakers</a></li>
                  <li><a href="/schedule">Schedule</a></li>
                </ul>
              </div>
              <div class="col">
                <ul>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>                                        
            </div>                          
          </div>
        </div>                          
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>
              For business professionals caught between high OEM price and mediocre print and graphic output.                                   
            </p>                                
            <div id="mc_embed_signup">
              <form target="_blank" action="#" method="get" class="subscription relative">
                <div class="input-group d-flex flex-row">
                  <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                  <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>        
                </div>                                  
                <div class="mt-10 info"></div>
              </form>
            </div>
          </div>
        </div>
       <!--  <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">NewsFeed</h6>
            <ul class="instafeed d-flex flex-wrap">
              <li><img src="frontend/img/instagram/i1.jpg" alt=""></li>
              <li><img src="frontend/img/instagram/i2.jpg" alt=""></li>
              <li><img src="frontend/img/instagram/i3.jpg" alt=""></li>
              <li><img src="frontend/img/instagram/i4.jpg" alt=""></li>
              <li><img src="frontend/img/instagram/i5.jpg" alt=""></li>
              <li><img src="frontend/img/instagram/i6.jpg" alt=""></li>
              <li><img src="frontend/img/instagram/i7.jpg" alt=""></li>
              <li><img src="frontend/img/instagram/i8.jpg" alt=""></li>
            </ul>
          </div> -->
        </div>                      
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed and Developed  <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Deekshith Reddy</a>
</p>a
          <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ================ End footer Area ================= -->




  <script src="frontend/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="frontend/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="frontend/vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="frontend/js/jquery.ajaxchimp.min.js"></script>
  <script src="frontend/js/mail-script.js"></script>
  <script src="frontend/js/countdown.js"></script>
  <script src="frontend/js/jquery.magnific-popup.min.js"></script>   
  <script src="frontend/js/main.js"></script>



</body>
</html>
            