<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Railway</title>
</head>
<style type="text/css">
	body{background-image:url("images/backg.jpg");}
</style>
<body>
	
<!-- SINCLUDE PAGE OF HEADER AND MENU -->
<?php
	session_start();
	$page="offer";
	include_once 'welcome.php';
?>

<!-- START CODE FOR OFFER PAGE -->
<section class="container-fluid ">
	<h1 class="text-center mb-5"style="text-decoration: underline;">SPECIAL OFFERS</h1>
	<!-- CARD 1 -->
	<div class=" row d-flex  justify-content-center justify-content-lg-around" id="wrap">
		<div class="card p-2 m-2 col-md-5 col-lg-3 ">
				<img src="images/so.png" class="card-img-top">
				<div class="card-body">
					<h4 class="card-title">Use Code</h4>
					<p class="text-center font-weight-bold p-1"style='border:dashed green 3px;height:30px;'>		MYFIRST</p><br>
					<p class="card-text">Discount ka Dhamaka! <br>Up to Rs. 375 off on Train Tickets using PayPal.						</p>
					<a href="reserv.php" class="btn btn-primary"> Book ticket Now</a>
				</div>
		</div>
		<!-- CARD 2 -->
		<div class="card p-2 m-2 col-md-5 col-lg-3">
			<img src="images/so2.png" class="card-img-top">
			<div class="card-body">
				<h4 class="card-title">Use Code</h4>
				<p class="text-center font-weight-bold p-1"style='border:dashed green 3px;height:30px;'>SENIOR</p><br>
				<p class="card-text">Senior Citizen Special<br>
					Flat Rs 100 off for Senior Citizens on train tickets</p>
				<a href="reserv.php" class="btn btn-primary"> Book ticket Now</a>
			</div>
		</div>
		<!-- CARD 3 -->
		<div class="card p-2 m-2 col-md-5 col-lg-3">
			<img src="images/so1.png" class="card-img-top">
			<div class="card-body">
				<h4 class="card-title">Use Code</h4>
				<p class="text-center font-weight-bold p-1"style='border:dashed green 3px;height:30px;'>MYFIRST</p	><br>
				<p class="card-text">Train Ticket<br>Freecharge Cashback on Train Ticket<br>Get 10% Cashback up 	to Rs. 50
			 	<a href="reserv.php" class="btn btn-primary"> Book ticket Now</a>
			</div>
		</div>
		<!-- CARD 4 -->
		<div class="card p-2 m-2 col-md-5 col-lg-3 d-none d-md-block d-lg-none">
			<img src="images/so3.png" class="card-img-top">
			<div class="card-body">
				<h4 class="card-title">Use Code</h4>
				<p class="text-center font-weight-bold p-1"style='border:dashed green 3px;height:30px;'>			100CASHBACK</p><br>
				<p class="card-text"> 100% cashback on train tickets!<br>One lucky winner everyday!</p>
			 	<a href="reserv.php" class="btn btn-primary"> Book ticket Now</a>
			</div>
		</div>
	</div>
</section>
<!-- END CODE FOR OFFER PAGE -->

<!-- INCLUDE PAGE OF QUICK LINKS IN FOOT -->
<?php
include_once 'quick.php';
?>

</body>
</html>
