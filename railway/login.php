<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Railway</title>
</head>
<style type="text/css">
	body{background-image:url("images/backg.jpg");}
	.bg{background:url("images/cart.jpg") no-repeat  ;background-size: 100% 100%;padding: 20px}
	form{max-width: 400px;padding:20px; height:500px;background: #ffffff4f;border: 3px grey solid ;border-radius: 40px}
	@media screen and (min-width: 768px) {section{padding:65px !important;}form{max-width: 450px;padding:30px 60px 70px 60px;}}
</style>
<body onload="myalert()">

<!-- INCLUDE PAGE OF HEADER AND MENU -->
<?php
	session_start();
	include_once 'welcome.php';
?>
<!-- CONTACT FORM CODE START -->
<section class="bg ">
	<form action="lconnect.php" method="POST" class="form mx-auto " >			<!--FORM  -->
		<center>															<!--LOGO AND LOGIN TEXT  -->
			<img src="images/logo/images.png" class="rounded-circle " height="80px" width="80px"><br>
			<font size=5><u>Login</u></font><br>
		</center>
				<!-- INPUT USER NAME -->
		<input class="form-control my-2" type="text" placeholder="User Name" require maxlength=90 name="username">
				<!-- INPUT PASSWORD -->
		<input class="form-control  my-2" type="password" placeholder="Password" required maxlength=30 name="password" autocomplete="off">
				<!-- CAPTCHA IMAGE -->
		<img src="images/logo/banner.jpg"  class="form-control mb-2 mt-4 p-0" style="height: 20px !important">
				<!-- CAPTCHA INPUT -->
		<input class="form-control my-2" type="password"placeholder="Type Here" id="captcha2" required autocomplete="off">
				<!-- FORGOT PASSWORD LINK -->
		<p align=right><a href="fgpass.php">Forget Password?</a></p>
				<!-- SIGNIN BUTTON -->
		<button  class="form-control my-2 btn-primary" type="submit">Sign in</button>
				<!-- REGISTER BUTTON -->
		<a href="register.php" class="btn form-control my-2 btn-light ">Register</a>
						
	</form>
</section>
<!-- CONTACT FORM CODE END -->
	
<!-- INCLUDE QUICK LINKS  -->
<?php
include_once 'quick.php';
//$_SESSION['alertinvaliduser']=1;
?>
</body>
</html>
<script type="text/javascript">											// CAPTCHA VALIDATION
	var captcha2=document.getElementById("captcha2");
	captcha2.onblur=function()
	{
		var captcha3="BUQ2";
				if(captcha3 != this.value)
			{
				this.value="";
				alert("Your Captcha Does Not Match \n Please Re-enter Your Captcha ");
				this.style.border="2px solid red";					//RED BORDER IF CAPTCHA NOT MATCH
				this.onclick=function()
					{
						this.style.border="1px solid gray";
					}
			}	
	}


function myalert()
{
	<?php
	if(!empty($_SESSION['alertpasschange']))					//CHECK IF REDIRECTED FROM PASSWORD CHANGE 
	{
		?>
       		alert("Your Password is changed Successfully");	
        <?php
	    unset($_SESSION['alertpasschange']);
	}
	if(!empty($_SESSION['alertsignup']))							//CHECK IF REDIRECTED FROM SIGN UP
	{
		?>
        	alert("You Are Registered Successfully");
        <?php
	    unset($_SESSION['alertsignup']);
	}
	if(!empty($_SESSION['alertlogout']))						//CHECK IF REDIRECTED FROM LOGOUT
	{
		?>
        	alert("You Are Logged Out Successfully");
        <?php
	    unset($_SESSION['alertlogout']);
	}
	if(!empty($_SESSION['alertwrongpassword']))						//CHECK IF REDIRECTED FOR WRONG PASSWORD
	{
		?>
        	alert("You Have Entered Wrong Password");
        <?php
	    unset($_SESSION['alertwrongpassword']);
	}
	if(!empty($_SESSION['alertinvaliduser']))						//CHECK IF REDIRECTED FOR INVALID USER
	{
		?>
        	alert("Username Entered Is Invalid");
        <?php
	    unset($_SESSION['alertinvaliduser']);
	}
	?>
}
</script>
