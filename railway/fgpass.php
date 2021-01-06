<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Railway</title>
</head>
<style type="text/css">
body{font-family: 'Josefin Sans',sans-serif;margin:0;padding:0;background-image:url("images/backg.jpg");}
	form,li{font-size:16px}
	form{width:100% !important}
	@media screen and (min-width: 768px) {form{width:75% !important}}
	 @media screen and (min-width: 768px) {form{width:40% !important}}
</style>
<body>

<?php
session_start();
$page="fgpass";
$conn = mysqli_connect('localhost', 'root', '', 'railway');
if(!empty($_POST['password']))
{
		$password=$_POST['password'];
		$user=$_SESSION['user'];
		$Select="UPDATE `user` SET `password` = '$password' WHERE `user`.`p_id` = '$user';";
		mysqli_query($conn,$Select);
		$_SESSION['alertpasschange']=1;				//GO TO LOGIN PAGE AND SHOW A PASSWORD CHANGE ALERT
		header("Location: ../major projectr/login.php");
		
}
if(!empty($_POST['user']))
{
	if (mysqli_connect_error())
	{
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} 
	else 
			{
				$user=$_POST['user'];
				$_SESSION['user']=$user;
				$email=$_POST['email'];
				$DOB=	$_POST['DOB'];
				$SELECT = "SELECT * From user Where p_id = '$user' && email='$email' && DOB='$DOB' ";
				$result=mysqli_query($conn,$SELECT);
				$rnum=mysqli_num_rows($result);				//VALIDATE USER
				if ($rnum ==1 )								//IF VALID
				{	include_once 'welcome.php';				//INCLUDE PAGE OF HEADER AND MENU
					?>
						<section class="container">
							<center><font size=6>Reset Password<br></font>
							______________________ <br>You will be redirected to login page if password changes successfully </center><br>
							<!-- FORM FOR INPUT PASSWORD -->
							<form action="fgpass.php" method="POST" class="form mx-auto">
									<!-- INPUT PASSWORD  -->
								<label> New Password :</label>
										<input type="password" id="password1"  maxlength=30 name="password" class="form-control mb-2" required>
									
									<!-- INPUT CONFIRM PASSWORD  -->
								<label>Confirm Password :</label>
								<input type="password" id="password2"  maxlength=30 name="password1" class="form-control mb-4" required>
								<button type="submit" class="btn btn-primary">Reset</button>
							</form>
						</section>
					<?php
				}
				else{include_once 'welcome.php';	
					echo '<p for="pnr" class="text-center ml-md-5 mt-5 my-md-5 p-2"><b>!Credentials are wrong</b></p>';
					}
			}
}
if(empty($rnum))
{	 
	include_once 'welcome.php';										//INCLUDE PAGE OF HEADER AND MENU
	?>
	<!-- FORGET PASSWORD FORM CODE START -->
	<section class="container p-5">
			<center><font size=6>Forget Password<br>
			______________________</center><br></font>
			<form action="fgpass.php" method="POST" class="form mx-auto">

						<!-- INPUT USERNAME -->
				<label class="">User Name :</label>
				<input type="text" placeholder="User Name*" maxlength=30 name="user" class="form-control mb-2" required autocomplete="off">

						<!-- INPUT EMAIL -->
				<label class="">Registered Email ID :</label>
				<input type="email" placeholder="Email ID*" maxlength=30 name="email" class="form-control mb-2" required autocomplete="off">

						<!-- INPUT DATE OF BIRTH -->
				<label class="">Your Date Of Birth :</label>
				<input type="date" placeholder="Your Date of Birth*" maxlength=30 name="DOB" class="form-control mb-4" required autocomplete="off">

						<!-- CONFIRM BUTTON -->
				<button type="submit" class="btn btn-primary ">Reset Password</button>
			
						<!--CLEAR BUTTON  -->
				<a href="home.php" class="btn btn-info">Cancel</a>
			</form>
	</section>
	<!-- FORGET PASSWORD FORM CODE END -->
	<?php
}
?>
</body>
</html>

<!-- PASSWORD VALIDATION -->
<script type="text/javascript">
	var password2=document.getElementById("password2");
	password2.onblur=function()
	{
		var password1=document.getElementById("password1").value;
		if(password1 != this.value)
			{
				this.value="";
				alert("Your Password Does Not Match \n Please Re-enter Your Password ");
				this.style.border="2px solid red";//RED BORDER IF CAPTCHA NOT MATCH
				this.onclick=function()
					{
						this.style.border="1px solid gray";
					}
			}	
	}
</script>