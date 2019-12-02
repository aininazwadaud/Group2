<!DOCTYPE html>
<html lang="en">
<title>Welcome to Car Rental System</title>
<head>
	<link rel="stylesheet" href="backgroundcss.css">
</head>

<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>
<?php include"Include/CustomerHeader.php";?>
<?php
	include ("config.php");
	session_start();
	$userIDurl = $_SESSION['userID'];
	$AdminIDurl = $_SESSION['CustomerID'];
	$result=mysqli_query($link,"SELECT * from user JOIN customer ON user.UserID = customer.UserID WHERE user.UserID = '$userIDurl'") or die (mysqli_error($link));
	
	$row = mysqli_fetch_array($result);
	$username = $row["Username"];
	$fullname = $row["Full_Name"];
	$dob = $row["DOB"];
	$email = $row["Email"];
	$gender = $row["Gender"];
	$contact = $row["Contact"];
?>
<h2 style="padding-left: 50px;"><b>PROFILE</b></h2>
<div class="w3-content">
<div class="w3-twothird">
	<a href="CustomerProfileEdit.php" class="button w3-button">EDIT</a>
</div>
</div>

<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">

<body id="dullbackground">
<form>
<div class="container">


<div class="row">
<div class="col-25">
<label for="username">User Name</label>
</div>
<div class="col-75">
<input type="text" name="username" value = <?php echo $username;?> disabled>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="fname">Full Name</label>
</div>
<div class="col-75">
<input type="text" name="fname" value = <?php echo $fullname;?> disabled>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="dateofbirth">Date Of Birth</label>
</div>
<div class="col-75">
<input type="text" name="dateofbirth" value = <?php echo $dob;?> disabled>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="email">E-Mail Address</label>
</div>
<div class="col-75">
<input type="text" name="email" value = <?php echo $email;?> disabled>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="gender">Gender</label>
</div>
<div class="col-75">
<input type="text" name="gender" value = <?php echo $gender;?> disabled>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="contact">Contact Number</label>
</div>
<div class="col-75">
<input type="text" name="contact" value = <?php echo $contact;?> disabled>
</div>
</div><br>


</form>
</div>
</div>

<?php include"Include/MainPageFooter.php";?>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
 

}
</script>

</body>
</html>
