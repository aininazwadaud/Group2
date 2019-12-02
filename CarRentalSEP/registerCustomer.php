<?php

include("config.php");

session_start();

extract( $_POST );
$type = "customer";
$date = str_replace('/', '-', $dob );
$newDate = date("Y-m-d", strtotime($date));
$query = "INSERT INTO user (Username,Password,Full_Name,DOB,Email,Gender,Contact,User_type) VALUES('$username','$password','$fullname','$newDate','$email','$gender','$contact','$type')";

if (mysqli_query($link, $query)) {
echo "<script language=javascript> alert(\"Register Successfully. Thank you for register as our customer.\");</script>";
$query = "SELECT UserID FROM User WHERE Username = '$username' AND Password = '$password'";
$rs = mysqli_query($link,$query);
	while ($row=mysqli_fetch_array($rs)){
		$newuserid = $row['UserID'];
	}
$query = "INSERT INTO Customer (UserID) VALUES('$newuserid')";
$rs = mysqli_query($link,$query);
echo "<script type='text/javascript'> window.location='MainPage.php' </script>";
} else {
echo "<script language=javascript> alert(\"Register Failed. Please try again.\");</script>";
echo "<script type='text/javascript'> window.location='RegisterInterface.php' </script>";
}

?>