<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Railway</title>
</head>
<style>
	body,.card{font-family: 'Josefin Sans',sans-serif;margin:0;padding:0;background-image:url("images/backg.jpg");}
	.card{background: gainsboro !important}
	hr {width: 90%}
	@media screen and (min-width: 650px) {#wrap{padding:0px 120px; }hr{width: 60%}}
	@media screen and (min-width: 768px) {#wrap{padding:0; }hr{width: 50%}}
	.carousel-item img{width: 100%;}
	.carousel-indicators ul li{width:30px !important;}
	.carousel-caption{color:#e96e07 !important;}
	#gallery img{height:450px;width: 100%}
</style>
<body onload="myalert()">
	
	<!-- INCLUDE CODE OF HEADER AND MENU -->
	<?php
	 session_start();
	$page="index";
	include_once 'welcome.php';
	?>

	<!-- START CODE FOR HOME PAGE -->


<!-- START CODE OF CAROUSEL -->
<section >
	<div id="demo" class="carousel slide carousel-fade" data-ride="carousel">

		<!-- INDICATORS -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" style="width:60px" class="active"></li>
			<li data-target="#demo" data-slide-to="1" style="width:60px"></li>
			<li data-target="#demo" data-slide-to="2" style="width:60px"></li>
		</ul>

	 	<!-- The SLIDESHOW IMAGES AND CAPTION -->
	 	<div class="carousel-inner">

	 		<!-- IMAGES AND CAPTION 1 -->
		    <div class="carousel-item active">
		    	<div class="carousel-caption ">
		    		<h1>WELCOME TO RAILWAY </h1><h2><br>BOOK ONLINE | SECURE PAY | GO CASHLESS</h2>
		    	</div>
		      	<img src="images/track/track (13).jpg" style="max-height: 600px !important" alt="Los Angeles">
		    </div>

	    	<!-- IMAGES AND CAPTION 2 -->
		    <div class="carousel-item">
				<div class="carousel-caption ">
					<h1>CENTRAL RAILWAY </h1><h2><br>SAFETY | SECURETY | PUNCTUALITY</h2>
				</div>
				<img src="images/train/train (7).jpg" style="max-height: 600px !important" alt="Chicago">
			</div>

			<!-- IMAGES AND CAPTION 3 -->
		    <div class="carousel-item">
		    	<div class="carousel-caption ">
		    		<h1>OUR PROMISE TO YOU</h1><h2><br>DELICIOUS FOOD | HYGENIC TOILET</h2>
		    	</div>
		      	<img src="images/train/train (34).jpg" style="max-height: 600px !important" alt="New York">
		    </div>
	 	</div>

	 	<!-- LEFT AND RIGHT CONTROLS -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon" ></span>
		</a>
		<a class="carousel-control-next"  href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
</section>

<!-- END CODE OF CAROUSEL -->


<!-- START CODE FOR SOME SPECIAL SERVICES -->
<section class="container-fluid p-5 my-5">
	<div class="text-center display-3"><b>OUR SPECIAL SERVICES<br></b>
		<center><hr></center></div>
	<div class="row d-flex  justify-content-center justify-content-lg-around" id="wrap">

		<!-- CARD 1 -->
		<div class="card p-2 m-2 col-md-5 col-lg-3 ">
			<img src="images/train/train (35).jpg" class="card-img-top"height="250px">
			<div class="card-body">
				<h4 class="card-title"><b>MAHARAJA'S EXPRESS</b></h4>
				<p class="card-text text-justify">Redefining Royalty, Luxury and Comfort, 
					 Maharajas’ express takes you on a sojourn to the era of bygone stately splendour of princely states. </p>
				 <a href="reserv.php" class="btn btn-primary"> Book ticket Now</a>
			</div>
		</div>

		<!-- CARD 2 -->
		<div class="card p-2 m-2 col-md-5 col-lg-3">
			<img src="images/so4.png"class="card-img-top" height="250px" >
			<div class="card-body">
				<h4 class="card-title"><b>DOMESTIC TOUR</b></h4>
				<p class="card-text text-justify">Be it the spiritual devotee seeking blessings of 
					 Tirupati, Shirdi or Mata Vaishno Devi or the
				 	leisure traveller wanting to relish the Blue
					mountains of North East.</p>
				<a href="offer.php" class="btn btn-primary">For More Offers</a>
			</div>
		</div>

		<!-- CARD 3 -->
		<div class="card p-2 m-2 col-md-5 col-lg-3">
			<img src="images/so3.png" class="card-img-top" height="250px">
			<div class="card-body">
				<h4 class="card-title"><b>TRAIN TICKET</b></h4>
				<p class="card-text">100% cashback on train tickets!
				    One lucky winner everyday!<br>
					Valid Upto 31 Oct<br> Modern amenities are amalgamated for an “Experience Unsurpassed”</p>
				<a href="reserv.php" class="btn btn-primary"> Book ticket Now</a>
			</div>
		</div>

		<!-- CARD 4 -->
		<div class="card p-2 m-2 col-md-5 col-lg-3 d-none d-md-block d-lg-none">
			<img src="images/so2.png" class="card-img-top"height="250px">
			<div class="card-body">
				<h4 class="card-title"><b>SENOIR CITIZEN SPECIAL</b></h4>
				<p class="card-text">Flat Rs 100 off for Senior Citizens on train <br>It has been a 	winner of 		“World’s Leading Luxury train”<br>Hurry up <br>Limited Period Offer</p>
				<a href="offer.php" class="btn btn-primary"> For More Offers</a>
			</div>
		</div>
	</div>
</section>
<!-- END CODE FOR SOME SPECILS SERVICES -->
			



<!-- GALLERY START HERE-->
<section class="container-fluid">
	<div class="text-center display-3"><b>GALLERY<br></b>
	<center><hr></center></div>
	<div class="row" id="gallery">
		<div class="col-lg-4 col-md-6 col-12 my-4"><img src="images/train/train (16).jpg" class="img-thumbnail" ></div>
		<div class="col-lg-4 col-md-6 col-12 my-4"><img src="images/train/train (37).jpg" class="img-thumbnail" ></div>
		<div class="col-lg-4 col-md-6 col-12 my-4"><img src="images/train/train (7).jpg" class="img-thumbnail" ></div>
		<div class="col-lg-4 col-md-6 col-12 my-4"><img src="images/track/track (1).jpg" class="img-thumbnail" ></div>
		<div class="col-lg-4 col-md-6 col-12 my-4"><img src="images/track/track (4).jpg" class="img-thumbnail" ></div>
		<div class="col-lg-4 col-md-6 col-12 my-4"><img src="images/train/train (1).jpg" class="img-thumbnail" ></div>
	</div>
</section>
<!-- GALLERY END HERE -->

<!-- END CODE FOR HOME PAGE -->

<!-- INCLUDIN QUICK LINKS-->
<?php
include_once 'quick.php';
?>
</body>
</html>

<!-- ALERT FUNCTION FOR LOGIN AND CONTACT -->
<script type="text/javascript">
function myalert()
{
	<?php
	if(!empty($_SESSION['alertlogin']))		//CHECK IF REDIRECTED FROM LOGIN PAGE 
	{
		?>
       		alert("You Are Logged In Successfully");	
        <?php
	    unset($_SESSION['alertlogin']);
	}
	if(!empty($_SESSION['alertcontact']))	//CHECK IF REDIRECTED FROM CONTACT PAGE  
	{
		?>
        	alert("You Request Submitted Successfully");
        <?php
	    unset($_SESSION['alertcontact']);
	}
	?>
}
</script>