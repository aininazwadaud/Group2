<?php

include("config.php");
session_start();
$UserID = $_SESSION['userID'];
$CustomerID = $_SESSION['CustomerID'];
extract( $_POST);


$query = "UPDATE user SET Full_Name='$fname',DOB='$dob',Email='$email',Gender='$gender',Contact='$contact' WHERE UserID='$UserID'";

if (mysqli_query($link, $query)) {
   echo "<script type='text/javascript'>alert('Successfully update profile');</script>";
   echo "<script type='text/javascript'> window.location='CustomerProfilePage.php' </script>";

} else {
echo "Error: " . $query . "<br>" . mysqli_error($link);}
?>