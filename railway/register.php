<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Railway</title>
</head>
<style>
	#form{padding: 10px 20px}
	@media screen and (min-width: 768px) {section,#form{padding: 10px 50px !important}}
	@media screen and (min-width: 1000px) {section,#form{padding: 10px 100px !important}}
	#submit{opacity: 0;}
	a{text-decoration: none;}
	.bg{background:url("images/track/track (1).jpg") no-repeat;background-size: stretch;}
</style>

<body class="bg">

<!-- INCLUDE PAGE OF HEADER AND MENU -->
<?php
	session_start();
	include_once 'welcome.php';
?>

<!-- START CODE FOR REGISTER FORM -->

<section class="container mb-5 pb-5">
	<div id="form">
		<center><font size=7 >REGISTER</font>
		<hr style="max-width: 400px"></center>

	<?php	
	if(!empty($_POST['user1'])&&check())									//VALIDATE USERNAME
		{ ?>
		<!-- DISPLAY SUBMIT BUTTON IF USERNAME IS VALID-->
		<style type="text/css">#submit{opacity: 1;}</style>

		<!--FORM FOR VALIDATED USERNAME-->
		<form name="register" method="post" action="rconnect.php">
			<div class="form-row">
				<div class="form-group col-md-6">	
					<label > User Name*</label>						<!-- DISPLAY VALIDATED USERNAME -->
					<pre type="text" placeholder="User name"maxlength=30 name="username"class="form-control"id="	username"required><?php echo $_SESSION['user1'];?><span class="badge bg-info float-right">		Available</span></pre>
				</div>
			</div>
	<?php 
	}
	else
	{?>	<!-- FORM FOR USERNAME VALIDATION -->
		<form name="register" method="post" action="register.php" >
			<div class="form-row px-2">
				<div class="form-group col-md-12">	
					<label for="username">User Name*</label>
					<div class="row px-3">
						<input type="text" placeholder="User name"maxlength=30 name="user1"class="col-md-8 form-control"id="username"required autocomplete="off">
						<button type="submit" class="btn btn-info text-dark col-md-3 mx-2" name="username">Check Availability</button>
					</div>
				</div>
			</div>
		</form>
		<?php
	}
	?>
		
		<!--PASSWORD INPUT  -->
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="password1">Password*</label>
				<input type="password" class="form-control" id="password1" maxlength="15" minlength="5" name="password"placeholder="Password"required>
			</div>
			<div class="form-group col-md-6">
				<label for="password2">Confirm Password*</label>
				<input type="password" class="form-control" id="password2"name="confirmpass" placeholder="Confirm Password"required>
			</div>
		</div>
		<hr >

		<!-- PERSONAL DETAIL INPUT -->
		<center><h2>Personal Details</h2></center>

		<!-- NAME INPUT -->
		<label for="name">Name*</label>
		<div class="row">
			<div class="col-md-4 mb-2">
				<input type="text" class="form-control" id="name" placeholder="First Name"maxlength=50 name="first" required autocomplete="off">
			</div>
			<div class="col-md-4 mb-2">
				<input type="text" class="form-control " id="name" placeholder="Middle Name (Optional)"maxlength=30 name="mid" autocomplete="off">
			</div>
			<div class="col-md-4 mb-2">
				<input type="text" class="form-control" id="name" placeholder="Last Name"maxlength=20 name="last" required autocomplete="off">
			</div>
		</div>

		<!-- GENDER INPUT -->
		<div class="form-row my-3">
			<div class="form-check form-check-inline col-md-2">
			  <input class="form-check-input" type="radio" name="gender" id="male" value="male" >
			  <label class="form-check-label" for="male" required >Male</label>
			</div>
			<div class="form-check form-check-inline col-md-2">
			  <input class="form-check-input" type="radio" name="gender" id="female" value="female">
			  <label class="form-check-label" for="female"  required>Female</label>
			</div>
			<div class="form-check form-check-inline col-md-2">
			  <input class="form-check-input" type="radio" name="gender" id="trans" value="transgender" required>
			  <label class="form-check-label" for="trans">Transgender</label>
			</div>
		</div>

		<!-- EMAIL AND MOBILE INPUT -->
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="email">Email*</label>
				<input type="text" placeholder="example@gmail.com"maxlength=30 name="email"class="form-control"id="email" required autocomplete="off">
			</div>

			<div class="form-group col-md-6">
				<label for="phone">Mobile no.</label>
				<input type="number" placeholder="Mobile no."maxlength=30 name="phone"class="form-control"id="phone"required autocomplete="off" minlength="10">
			</div>
		</div>

		<!-- CITY AND DATE OF BIRTH INPUT -->
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="City">City</label>
				<input type="text" class="form-control" id="City" name="city" required autocomplete="off">
			</div>
			<div class="form-group col-md-6">
				<label for="DOB">Date of Birth*</label>
				<input type="date" maxlength=30 name="DOB"class="form-control"id="DOB"required >
			</div>
		</div>

		<!-- CAPTCHA IMAGE AND INPUT -->
		<div class="d-flex flex-column mx-auto" style="max-width: 300px" >
			<img src="images/logo/register.jpg">
			<img src="images/logo/banner (1).jpg" >
			<input type="password"class="form-control" id="captcha"placeholder="Type Here" maxlength=30 name="user"required></input>
		</div>

		<!-- CHECK BOX -->
		<div class="form-group">
			<div class="form-check">
			  <input class="form-check-input my-4" type="checkbox" id="Check" required>
			  <label class="form-check-label ml-5 my-3 text-justify" for="Check">
			    I have read and agree with the Terms and Conditions. and also agree to receive promotional emails/ SMS/ offers/ announcements from Central Railway & associated partners
			  </label>
			</div>
		</div>

		<!-- SUBMIT AND CLEAR BUTTON -->
		<div style="height: 45px;position: relative;">
		  <button type="submit" class="btn-lg btn-success w-50 m-3" id="submit">Register</button>
		  <a href="register.php"class="btn btn-primary w-50 m-3 ml-2" style="height: 48px;padding: 10px 16px;border-bottom: 2px solid black;border-right: 2px solid black;position: absolute;top: 0px">Clear</a>
		</div>

	</form>
</div>
</section>
</body>
</html>
<!-- END CODE FOR REGISTER FORM -->


<!-- PASSWORD  AND CAPTCHA VALIDATION -->
<script type="text/javascript">

	//PASSWORD VALIDATION
	var password2=document.getElementById("password2");
	password2.onblur=function()
	{
		var password1=document.getElementById("password1").value;
		if(password1 != this.value)
			{
				this.value="";
				alert("Your Password Does Not Match \n Please Re-enter Your Password ");
				this.style.border="2px solid red";	//RED BORDER IF PASSWORD NOT MATCH
				this.onclick=function()
					{
						this.style.border="1px solid gray";
					}
			}	
	}

	// CAPTCHA VALIDATION
	var captcha=document.getElementById("captcha");
	captcha.onblur=function()
	{
		var captcha1="P6KFA";
				if(captcha1 != this.value)
			{
				this.value="";
				alert("Your Captcha Does Not Match \n Please Re-enter Your Captcha ");
				this.style.border="2px solid red";	//RED BORDER IF CAPTCHA NOT MATCH
				this.onclick=function()
					{
						this.style.border="1px solid gray";
					}
			}	
	}

</script>


<!-- USERNAME VALIDATION FROM DATABASE -->
<?php
function check()
{	$user1=$_POST['user1'];
	 $conn= mysqli_connect('localhost', 'root', '', 'railway'); 				//CREATE CONNECTION
            if (mysqli_connect_error())									//CHECK IF CONNECTION ERROR
            {
                 die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
             } 
            else 
            {
	                $SELECT = "SELECT * From user Where p_id = '$user1';";
	                $result=mysqli_query($conn,$SELECT);
	                $rnum=mysqli_num_rows($result);						//FETCH DETAIL FROM DATABASE
	                if ($rnum ==0 )										//IF USERNAME IS UNIQUE
	                {	$_SESSION['user1']=$user1;
	                	return 1;
	                }
	                else 												// IF USERNAME ALREADY EXIST
	                { 
	                 	?>
	                 	<script >
	                 			alert('\n Username <?php echo $_POST['user1'].' ' ?>Is Already In Use \n Please Enter A Different Username');
	                 			</script>;
                 			<?php
                 			return 0;
	                 }
           }
}
?>