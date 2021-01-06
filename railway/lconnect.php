<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "railway";

  $conn =@mysqli_connect($host, $dbusername, $dbpassword, $dbname);          //CREATE CONNECTION
  if (mysqli_connect_error())                                             //CHECK FOR CONNECTION ERROR
  {
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
  }
  else
  {
    
      $SELECT1="select * from user where p_id='$username';";            //QUERY FOR VALIDATE USERNAME
      $result1= mysqli_query($conn,$SELECT1);
      $rnum1=@mysqli_num_rows($result1);
      $SELECT2="select * from user where p_id='$username' && password='$password';";//QUERY FOR VALIDATE PASSWORD
      $result2= mysqli_query($conn,$SELECT2);
      $rnum2=@mysqli_num_rows($result2);
      if($rnum1 == 1 && $rnum2 ==0)                                     //IF PASSWORD IS INCORRECT
      {
        $_SESSION['alertwrongpassword']=1;       //GO TO LOGIN PAGE AND SHOW A PASSWORD IS WRONG
        header("Location: ../major projectr/login.php");
      }
    
      if($rnum2 == 1)                                           //IF USERNAME AND PASSWORD BOTH ARE VALID
      { 
        $_SESSION['username']=$username;                        //SET SESSION USED IN NAVBAR AND BOOKING
        if(!empty($_SESSION['train_no']))                       //IF REDIRECTED FROM BOOKING PAGE
          {
            header("Location: ../major projectr/reserv.php");
          }
        else
          { $_SESSION['alertlogin']=1;                            //GO TO HOME PAGE AND SHOW A LOGIN ALERT
            header("Location: ../major projectr/index.php");
          }
      }
      if($rnum1 == 0)                                             //IF USERNAME IS INVALID
      {
        $_SESSION['alertinvaliduser']=1;       //GO TO LOGIN PAGE AND SHOW A USERNAME INVALID msg
        header("Location: ../major projectr/login.php");
      }
  }   


      //include_once 'login.php';                                   //INCLUDE FOR NOT LET PAGE BLANK
    
  ?>
