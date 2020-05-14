<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Terms</title>
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
          <a class="navbar-brand logo_h" href="#"><img src="frontend/img/bits.png" alt=""width="120" height="120"></a>
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

   <!--================Hero Banner Area Start =================-->
  <!-- <section class="hero-banner hero-banner-sm">
    <div class="container text-center">
      <h2>Terms and conditions</h2>
      <p>Read the content below to send the thesis and follow the link Click of upload file  </p>
      
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Terms</li>
        </ol>
      </nav>
    </div>
  </section> -->
 
<section>
  <style>
    .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 20px 52px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
    p {
        text-align: center;

    }

</style>

	<h2><p style="color:blue;">CONFERENCE RULES: EVERYTHING YOU NEED TO KNOW ABOUT PRESENTING A PAPER IN PUBLIC.
    

    
      <p> This are some of rules which you have to follow to send the thesis</p>
      <p style="color:red;">1.Paper should be plagiarism free .</p>
      <p style="color:red;" >2.Your paper should be in which you are sending the same.</p>
      <p style="color:red;">3.Read the instructions  before sending .</p>
      <p style="color:red;">4.Your content should be precise .</p>
      <p style="color:red;"></p>
      <p style="color:red;"></p>
  
<p align="right">
     <a href="/file" class="button">Upload File</a>
  <!--   <li><a href="/file">Upload File</a></li></p>   -->
	 </p>
</section>



  

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
       <!--  <div class="col-lg-3  col-md-6 col-sm-6">
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
        </div> -->
        <div class="col-lg-3  col-md-6 col-sm-6">
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
          </div>
        </div>                      
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed and developed  <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Deekshith Reddy</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
            
