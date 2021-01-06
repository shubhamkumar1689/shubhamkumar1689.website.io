<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RAILWAY</title>
<!-- BOOTSTRAP FILE LINKS-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<head>
<style>
	*{font-family: 'Josefin Sans',sans-serif;margin:0;padding:0}	
	p,li {font-size:15px}
	a{ text-decoration: none;}
	a:active{color: red  !important;}
	.img1:hover .drop1 {display: block; }
	.drop1 {display:none;position: absolute;top:400px;right:0px;width: 100%;border-radius: 10px;z-index: 2} 
	.drop1 ul{border:1px solid grey;border-radius:10px;width:100%;padding:;}
	.drop1 ul li{list-style:none;background:lavender; ;border-radius:10px;margin-right:10px;}
	.drop1 p{margin:20px 0px 5px 20px;}
	/*USER PANEL RESPONSIVE WIDTH*/
	@media screen and (min-width: 768px) {.drop1{top:70px;width: 400px }}
	@media screen and (min-width: 992px) {.drop1{top:70px;width: 300px }}
	@media screen and (min-width: 999px) {.drop1{top:50px;width: 300px }}
	@media screen and (min-width: 1224px) {.drop1{top:0px;width: 300px }}
	#drop ul li:hover a{background:darkkhaki  !important}
	#navbarSupportedContent ul li{margin-left: 20px;}
	#drop ul li{margin: auto}
</style>
  
</head>
<body >
<!-- NAVIGATION BAR START -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-0" >

	<!-- IMAGE LOGO -->
	<a class=" navbar-text" style="margin:0;padding:0px"href="#">	<img src="images/logo/logo.jpg" width="75" height="75" class="d-inline-block align-top rounded-circle float-left" alt="">	</a>

	<!-- NAVBAR HEADING -->
	<h2 class="navbar-text text-white" style="margin:0px 0px 0px 20px">CENTRAL RAILWAY</h2>

	<!-- NAVBAR TOGGLER BUTTON -->
	<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="d-md-none navbar-toggler-icon"></span>
	</button>

	<!-- NAVBAR COLLAPSE LINKS CODE START-->
    <div class="collapse navbar-collapse px-4" id="navbarSupportedContent">
		<ul class="navbar-nav m-auto p-auto text-center ">

			<li class="nav-item <?php if($page=="index")echo'active'?>">
				<a class="nav-link " href="index.php">Home</a></li>

			<li class="nav-item <?php if($page=="about")echo'active'?>">
				<a class="nav-link" href="about.php"> About</a></li>

			<li class="nav-item <?php if($page=="findtrain")echo'active'?>">
				<a class="nav-link" href="findtrain.php"> Ticket Booking</a></li>

			<li class="nav-item <?php if($page=="traininfo")echo'active'?>">
				<a class="nav-link <?php if($page=="pnr")echo'active'?>"
				href="pnr.php">PNR Enquiry</a></li>

			<li class="nav-item <?php if($page=="cancel")echo'active'?>">
				<a class="nav-link" href="cancel.php"> Cancellation</a></li>

			<li class="nav-item <?php if($page=="contact")echo'active'?>">
				<a class="nav-link" href="contact.php"> Contact Us</a></li> 

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" href="#"role="button" 	aria-haspopup="true" aria-expanded="false">More</a>

				<!-- DROPDOWN MENU CODE START -->
				<div class="dropdown-menu text-center p-0" id="drop" aria-labelledby="navbarDropdown" style="background:lemonchiffon">
					<ul style="list-style: none">
						<li><a class="dropdown-item <?php if($page=="offer")echo'active'?>" 
							href="offer.php">Special Offers</a></li>
						<li><a class="dropdown-item" href="traininfo.php"> Train Info</a></li>
						<li><a class="dropdown-item <?php if($page=="fgpass")echo'active'?>" 
							href="fgpass.php">Forget Password</a></li>
						<li><a class="dropdown-item <?php if($page=="cancelled")echo'active'?>" 
							href="cancelled.php">Cancelled Train</a></li>
						<li><a class="dropdown-item <?php if($page=="route")echo'active'?>" 
							href="route.php">Train Status</a></li>
					</ul>
				</div>
				<!-- DROPDOWN MENU CODE END -->
		   	</li>
	    </ul>
 		<!-- NAVBAR LINK CODE END -->

 		<!-- SIGNIN SIGNOUT BUTTON CODE START -->
    	<div class="d-inline-flex float-right">
    		<?php
			if (!empty ($_SESSION['username']) )   							//IF SIGNED IN
				{ 
					$dbname = "railway";
					$username=$_SESSION['username'];
					$conn = mysqli_connect('localhost', 'root','', $dbname);  //CREATE CONNECTION
					$SELECT = "SELECT `p_id`, `first_name`, `mid_name`, `last_name`, `gender`,`DOB`, `mobile`, `email`, `city` FROM `user` WHERE p_id='$username';";	
					$result=mysqli_query($conn,$SELECT);					//FETCH DETAILS FROM DATABASE
					$row=mysqli_fetch_assoc($result);
					?> 
					<ul class="nav d-flex flex-row-reverse">				<!-- LOGOUT BUTTON -->
						 <li>			
						 	<a href="logout.php" class="text-warning"><span class="glyphicon glyphicon-user text-info"></span>Logout</a>
						 </li>
					</ul>

					<!-- USER LOGO AND HOVER PANEL CODE START-->
					<div class="img1 d-flex flex-column " id="img1">
						<!-- USER LOGO IMAGE -->
					 	<div>
					 		<img class="rounded-circle ml-3"height="50px"	width="50px" src="images/logo/user-logo.PNG" alt="">
					 	</div>

					 	<!-- USER LOGO HOVER USER DETAIL PANEL CODE START -->
						<div class="drop1 bg-white border border-primary p-3  flex-column">
							<img src="images/logo/userlogo.PNG"style="height:60px;width:60px;">
							<h4 class="font-italic">Hello,<?php echo $row['first_name'];?> 
							<a href="logout.php" class="float-right"><b><span class="glyphicon glyphicon-user 		text-info"></span>&nbspLogout</b></a></h4>
							<ul class="list-group p-2 pb-4 my-3"> 
								<p>Your User ID </p>		
								<li class="list-group-item"><?php echo $row['p_id'];?></li>		
								<p>Your E-mail </p>		
								<li class="list-group-item"><?php echo $row['email'];?> </li>		
								<p>Your Date Of Birth </p>		
								<li class="list-group-item"><?php echo $row['DOB'];?></li>	
								<p>Your Locality </p>		
								<li class="list-group-item"><?php echo $row['city'];?> </li>		
							</ul> 		
						</div>
						<!-- USER LOGO HOVER USER DETAIL PANEL CODE END -->
						
					</div>
					<!-- USER LOGO AND HOVER PANEL CODE END-->
					<?php	
				}				 			
			else  				//IF NOT SIGNED IN LOGIN AND SIGNUP BUTTON
				{?> 
					<ul class="nav d-flex flex-row-reverse">
						<li><a href="register.php"class="text-warning"><span class="glyphicon glyphicon-user 			text-info"></span>&nbspSign Up</a></li>
     					 <li><a href="login.php"class="text-warning"><span class="glyphicon glyphicon-log-in 			text-info"></span>&nbspLogin</a></li>
 					 </ul><?php
					}?>

		</div>					<!-- SIGNIN SIGNOUT BUTTON CODE END -->				
	</div>    					<!-- NAVBAR COLLAPSE CODE ENDS HERE -->
</nav>							<!-- NAVBAR CODE ENDS HERE -->
	

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
