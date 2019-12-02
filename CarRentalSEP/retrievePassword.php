<?php

include("config.php");

extract( $_POST );
$query="SELECT Password from user WHERE Username = '$username' AND Email = '$email'";
$result=mysqli_query($link,$query) or die ("The user is not found. Please try again");

$row = mysqli_fetch_array($result);
$password = $row["Password"];

ini_set("SMTP","smtp.gmail.com");
ini_set("smtp_port","661");
if(mail('theriz2362@gmail.com', 'Retrieve password of user', 'Dear $username your forgotten password is : $password')){
	echo "<script language=javascript> alert(\"Your password has been retrieved. Please check your email.\");</script>";
	echo "<script type='text/javascript'> window.location='ForgetPassword.php' </script>";
}
else
{
	echo "<script language=javascript> alert(\"Password retrieve failed.\");</script>";
}

?>