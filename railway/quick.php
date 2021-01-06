<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Railway</title>
</head>
<style type="text/css">
  @media screen and (min-width: 768px) {#links{padding: 20px 50px;}#links footer{padding-left: 100px;} #quick{padding-left: 100px;}}
  @media screen and (min-width: 768px) {}
  #quick a:hover{padding-left: 5px;text-decoration: none !important}
  #quick div a {font-size: 16px;margin: 5px}
</style>

<body>

<!-- INCLUDE PAGE OF HEADER AND MENU -->
<?php
  include_once 'welcome.php';
?>

  <!-- QUICK LINKS CODE START  -->
<section class="container " id="links">
  		
    <h1 class="text-center "><b>Quick Links</b></h1>
      <hr class="w-50 mx-auto pt-5">

    <!-- HELP LINKS -->
    <div class="row font-weight-bold" id="quick">

      <div class="col-12 col-sm-4 d-flex flex-column">
        <a href="reserv.php">Book Ticket</a>
        <a href="pnr.php">PNR Enquiry</a>
        <a href="register.php">Get Registered</a>
        <a href="contact.php">Contact Us</a>
        <a href="fgpass.php">Forget Password</a>
      </div>

      <div class="col-12 col-sm-4 d-flex flex-column">
        <a href="login.php">Login</a>
        <a href="offer.php">Special Offers</a>
        <a href="traininfo.php">Train Information</a>
        <a href="about.php">About Us</a>
        <a href="career.html">Careers</a>
      </div>

      <div class="col-12 col-sm-4 d-flex flex-column">
        <a href="findtrain.php">Find Train</a>
        <a href="cancelled.php">Cancelled Train</a>
        <a href="route.php">Train Status</a>
        <a href="map.html">Site Map</a>
        <a href="faq.html">FAQs</a>
      </div>
    </div>

  <!-- SOCIAL MEDIA LINKS -->
    <div class="mx-auto"style="max-width: 300px">
      <div class="d-flex justify-content-around text-info" >
        <p style="font-size: 20px">follow us on</p>
        <a href=""><img src="images/google.png" width=30px height=30px title="google" /></a>
        <a href=""><img src="images/gmail.png" width=30px height=30px title="gmail" /></a>
        <a href=""><img src="images/facebook.png" width=30px height=30px title="facebook"/></a>
        <a href=""><img src="images/youtube.png" width=30px height=30px title="youtube" /></a>
      </div>
    </div>

    <!-- FOOTER -->
    <footer class="text-secondary text-justify">
      Copyright &copy  2020 The CENTRAL RAILWAY Ltd. All rights reserved.
      Designed and Hosted by @KESHAV
    </footer>

  </section>
  <!-- QUICK LINKS CODE END  -->
</body>
</html>
