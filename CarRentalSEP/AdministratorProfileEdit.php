<!DOCTYPE html>
<html lang="en">
<title>Welcome to Car Rental System</title>
<head>
	<link rel="stylesheet" href="backgroundcss.css">
</head>

<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>
<?php include"Include/AdminHeader.php";?>
<?php
	include ("config.php");
	session_start();
	$userIDurl = $_SESSION['userID'];
	$AdminIDurl = $_SESSION['AdminID'];
	$result=mysqli_query($link,"SELECT * from user JOIN admin ON user.UserID = admin.UserID WHERE user.UserID = '$userIDurl'") or die (mysqli_error($link));
	
	$row = mysqli_fetch_array($result);
	$status = $row["Status"];
	$username = $row["Username"];
	$fullname = $row["Full_Name"];
	$dob = $row["DOB"];
	$email = $row["Email"];
	$gender = $row["Gender"];
	$job = $row["Jobscope"];
	$contact = $row["Contact"];
?>
<h2 style="padding-left: 50px;"><b>EDIT PROFILE</b></h2>

<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">

<body id="dullbackground">
<form action="updateAdmin.php" method="post">
<div class="container">

<div class="row">
<div class="col-25">
<label for="status">Status</label>
</div>
<div class="col-75">
<select id="status" name="status" value = <?php echo $status;?>>
<option value="active">Active</option>
<option value="nonactive">Not Active</option>
</select>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="fname">Full Name</label>
</div>
<div class="col-75">
<input type="text" id="fname" name="fname"  value = <?php echo $fullname;?> required>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="address">Date of Birth</label>
</div>
<div class="col-75">
<input type="date" id="dob" name="dob"
       value=<?php echo $dob?>
       min="1900-01-01" max="2020-12-31">
</div>
</div>

<div class="row">
<div class="col-25">
<label for="email">E-Mail Address</label>
</div>
<div class="col-75">
<input type="text" id="email" name="email"  value = <?php echo $email;?> required>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="gender">Gender</label>
</div>
<div class="col-75">
<select id="gender" name="gender"  value = <?php echo $gender;?>>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="scope">Job Scope</label>
</div>
<div class="col-75">
<textarea id="scope" name="scope" placeholder="Enter job scope description" style="height:200px" required><?php echo $job;?></textarea>
</div>
</div>
<br>

<div class="row">
<div class="col-25">
<label for="contact">Contact Number</label>
</div>	
<div class="col-75">
<input type="text" id="contact" name="contact"  value = <?php echo $contact;?> required>
</div>
</div><br>

<div class="row">
<input type="submit" class="w3-block w3-right button w3-button" value="Update">
<a href="AdministratorProfilePage.php" class="w3-block w3-right button w3-button">Back</a>
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
