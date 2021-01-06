<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Railway</title>
</head>
	<style>
		body,.card{font-family: 'Josefin Sans',sans-serif;margin:0;padding:0;background-image:url("images/backg.jpg");}
		.row p,.row li {font-size:18px}
		hr {width: 75%}
		@media screen and (min-width: 650px) {hr{width: 60%}}
		@media screen and (min-width: 768px) {hr{width: 50%}}
		.card img{height:400px;
	</style>

<body>
<!-- INCLUDE PAGE OF HEADER AND MENU -->
<?php
	$page="about";
	session_start();
	include_once 'welcome.php';
?>


<!-- START CODE FOR ABOUT PAGE -->


<!--PAGINATION START HERE-->

<section class="container-fluid pb-5 ">
	<h1 class="text-center pt-5"><b>ABOUT US</b></h1>
	<hr class=" mx-auto pt-5 ">
	<div class="row  ">
		<!-- IMAGE FOR PAGINATION -->
		<div class=" d-flex col-lg-6 col-md-7 col-12">
			<img class="img-responsive w-100 align-self-center img-thumbnail" src="images/train/train (14).jpg" 	style="" center>
		</div>
		<!-- TEXT FOR PAGINATION -->
		<div class="col-lg-6 col-md-5 col-12 p-4 text-justify ">
			<h1><b>RAILWAY</b></h1>
			<p ><i><b> Indian Railway</b> Catering and Tourism Corporation Ltd.
				has been set up by the Ministry of Railways with the 
				basic purpose of hiving off entire catering and tourism
				activity of the railways to the new Corporation so as
				to professionalize and upgrade these services with
				public-private participation. Rail based Tourism in
				India will be the specific vehicle for achieving 
				high growth in coordination with state agencies,
				tour operators, travel agents and the hospitality 
				industry. A dynamic marketing strategy in 
				association with public and private agencies,
				tour operators, transporters, hoteliers and local
				tour promoters is on the anvil. Indian Railways span
				global volumes in hospitality and catering sectors
				with services provided to 13 million passengers every day.</i></p>
				<button class="btn bg-primary text-white">Know More</button>
		</div>
	</div>
</section>
<!-- PAGINATION END HERE-->

<!-- START CODE FOR CARDS -->

<section class="container">
	<h1 class="text-center text-capitalize pt-5"><b>MISSIONS AND OBJECTIVES</b></h1>
	<hr class="mx-auto pt-5">
	<div class="row justify-content-between">
		<!-- CARD 1 -->
		<div class="card p-0 mb-5 mb-md-0 col-md-5 col-lg-5 col-12 " style="background: gainsboro;border-radius: 10px">
			<img src="images/track/track (17).jpg"class="card-img-top img-thumbnail">
			<div class="card-body mx-3 text-justify">
				<h2 class="card-title"><b>MISSIONS</b></h2>
				<p class="card-text">
					<ul >
					<li>"Enhance customer services and facilitation in railwaycatering, hospitality, travel 	and tourism with best industry practices"</li>
					<li>Upgrade and consolidate catering services in the organized sector. </li>
					<li> Expand areas of core competencies, enhance business opportunities. </li>
				</ul></p>
			 <a href="offer.php" class="btn btn-primary">Know More</a>
			</div>
		</div>
		<!--CARD 1 END-->

		<!-- CARD 2 START-->
		<div class="card  p-0 col-md-5 col-lg-5 col-12 "style="background: gainsboro;border-radius: 10px">
			<img src="images/train/train (31).jpg"class="card-img-top img-thumbnail">
			<div class="card-body mx-3 text-justify">
				<h2 class="card-title"><b>OBJECTIVES</b></h2>
				<p class="card-text">
					<ul >
						<li>
							To be a customer friendly company through constant innovation, technology driven and human resource development.</li>
						<li>
							Optimize resources, increase manpower productivity through quality product vending and innovative marketing strategies. </li>
						<li>Concern for the environment and heritage.</li>
					</ul></p>
			 <a href="offer.php" class="btn btn-primary">Know More</a>
			</div>
		</div>
		<!-- CARD 2 END-->
	</div>
</section>
<!-- END CODE FOR CARDS -->

<!-- END CODE FOR ABOUT PAGE -->

<!-- INCLUDE QUICK LINKS  -->
<?php
	include_once 'quick.php';
?>
</body>
</html>