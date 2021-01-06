<?php
session_start();                                                //SESSION START FOR ALERT ONLY
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['message'];
if (!empty($name) && !empty($mobile) && !empty($message))       //CHECK IF THERE IS EMPTY FIELD
{   
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "railway";
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);   //CREATE CONNECTION
    if (mysqli_connect_error())                                         //CHECK FOR CONNECTION ERROR
     {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
     } 
     else 
        {
            $SELECT = "INSERT INTO `contact` (`mobile_no`, `name`, `email`, `message`) VALUES ('$mobile', '$name', '$email', '$message')";                          //QUERY FOR INSERT CREDENTIALS
            mysqli_query($conn,$SELECT);
            $_SESSION['alertcontact']=1;                         //SETTING SESSION FOR SUCCESS ALERT
            header("Location: ../major projectr/index.php?");   //HEADER TO HOME
            $conn->close();
        }
        
} 
else                                                            //IF THERE IS EMPTY FIELD
{   
    echo '<p class="text-center">All field are required</p>';
    include_once 'contact.php';                             //INCLUDE FOR NOT LET PAGE BLANK
    die();
}
?>