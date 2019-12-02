<?php

include("config.php");

session_start();
$adminID = $_SESSION['AdminID'];
extract( $_POST );
$type="admin";
$status = "status";
$date = str_replace('/', '-', $dob);
$newDate = date("Y-m-d", strtotime($date));
$query = "INSERT INTO user(Username,Password,Full_Name,DOB,Email,Gender,Contact,User_type) VALUES('$username','$password','$fname','$newDate','$email','$gender','$contact','$type')";

if (mysqli_query($link, $query)) {
echo "<script language=javascript> alert(\"New admin is added into the system.\");</script>";
$query = "SELECT UserID FROM User WHERE Username = '$username' AND Password = '$password'";
$rs = mysqli_query($link,$query);
	while ($row=mysqli_fetch_array($rs)){
		$newuserid = $row['UserID'];
	}
$query = "INSERT INTO admin (UserID,Jobscope,Status,register_by) VALUES('$newuserid','$scope','$status','$adminID')";
$rs = mysqli_query($link,$query);
echo "<script type='text/javascript'> window.location='AdministratorList.php' </script>";
} else {
echo "<script language=javascript> alert(\"Register Failed. Please try again.\");</script>";
}

?>