<?php
	session_start();
	unset($_SESSION['username']);			//LOGOUT
	session_destroy();
	session_start();
	$_SESSION['alertlogout']=1;				//GO TO LOGIN PAGE AND SHOW A PASSWORD CHANGE ALERT
	header("Location: ../major projectr/login.php");
?>