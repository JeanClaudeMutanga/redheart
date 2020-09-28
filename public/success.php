<?php
  include 'db.php';
  //error_reporting(0);
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Afrigoteltech | Payment</title>
    <link rel="icon" href="img/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css" />
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <style>
      body * {
          font-family: sans-serif;
          
      }
      h1,h4 {
        font-family: 'Reem Kufi', sans-serif;
      }
      input {
          font-size:12pt;
      }
      #main {
          width: 550px;
          margin: 0 auto;
      }
      #submit-container {
          padding-top:10px;
          float:right;
      }
      input[type=submit] {
          border:none;
          background:indigo;
          padding:10px;
          color:white;
          border-radius:5px;
      }
    </style>
  </head>

  <body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="index.html">
            <img src="img/test.png" alt="logo" style="height: 90px; width: 180px;"/>
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="ti-menu"></span>
              </button>

              <div
                class="collapse navbar-collapse main-menu-item justify-content-center"
                id="navbarSupportedContent"
              >
                <ul class="navbar-nav align-items-center">
                  
                  <li class="nav-item">
                    <a class="nav-link" href="https://redheart.afrigoteltech.co.za">Red Heart</a>                  </li>
                 
                  <li class="nav-item">
                    <a class="nav-link" href="partner.html"> Channel Partnership</a>                  </li>
                      <li class="nav-item dropdown">
                        <a
                          class="nav-link dropdown-toggle"
                          href="cloud.html"
                          id="navbarDropdown"
                          role="button"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          Cloud Services                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="cloud.html">Cloud Services</a>
                          <a class="dropdown-item" href="internet.html"
                            >Internet Connectivity</a
                          >
                          <a class="dropdown-item" href="elearning.html">E-Learning</a>
                        </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="services.html">services</a>                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="hardware.html">Hardware</a>                  </li>
                
                  <li class="nav-item">
                      <a class="nav-link" href="connectivity.html">Connectivity</a>                  </li>

                      <li class="nav-item">
                    <a class="nav-link " href="shop">Shop</a>                  </li>
                </ul>
              </div>
             
            </nav>
          </div>
        </div>
      </div>
  </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle">
                      <br>
                        <p>home . payments</p>
                        <h2>Payment</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


  <!-- ================ contact section start ================= -->

  

  <!--send item-->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="row offset-3">
        <div class="col-12">
        </div>
        <div class="col-lg-8">
          <img src="img/animate_icon/success.gif" alt="Payment Successful" class="offset-3">
          <h4 class="text-center text-success"><strong>Payment Successful</strong></h4>
        </div>
       
      </div>
    </div>
  </section>
  <!--send money-->
  <?php
  $status = "Successful";
  if(!empty($_SESSION['pay'])){
    $id = $_SESSION['pay'];
    $update="update payments set status='".$status."' where id='".$id."'";
    mysqli_query($con, $update) or die(mysqli_error());
    session_destroy();
  }
  else{

  }
  ?>
  
  
<!-- footer part start-->
<footer class="footer-area">
  <div class="container">
    <hr>
    <div class="row justify-content-between">
      <div class="col-sm-6 col-md-3 col-xl-3">
        <div class="single-footer-widget footer_1">
          
          <ul>
            <li><a href="#">Our</a></li>
            <li><a href="#">Social Media</a></li>
            <li><a href="#">Platforms</a></li>
          </ul>
          <div class="social_icon">
            <a href="#"><i class="ti-facebook"></i></a>
            <a href="#"><i class="ti-twitter-alt"></i></a>
            <a href="#"><i class="ti-dribbble"></i></a>
            <a href="#"><i class="ti-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-md-3">
        <div class="single-footer-widget footer_2">
          <h4>Company</h4>
          <ul>
            <li>
              <p>22 Sloane Street</p>  
              
            </li>
            <li>
              <p>Bryanston</p>
            </li>
            
            <li>
              <p>Sandton</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-md-3">
        <div class="single-footer-widget footer_2">
          <h4>Quick Contact</h4>
          <ul>
            <li>
              <p> Email: info@afrigoteltech.co.za</p>
              
            </li>
            <li>
              <p>Tel: 010 449 1666</p>
            </li>
            
          </ul>
        </div>
      </div>
      
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="copyright_part_text text-center">
          <div class="row">
            <div class="col-lg-12">
              <p class="footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Afrigoteltech
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<img src="img/animate_icon/icon_2.png" class="animation_icon_2" alt="">    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!--contact js-->
    
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>
</html>
  