<!DOCTYPE html>
<html lang="en">
<title>Welcome to Car Rental System</title>
<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>

<body>

<?php include"Include/MainPageHeader.php";?>

<form>
<div class="container">

<div class="row">
<div class="col-25">
<label for="username">User Name</label>
</div>
<div class="col-75">
<input type="text" id="username" name="username" placeholder="Enter your User ID" required>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="password">Password</label>
</div>
<div class="col-75">
<input type="password" id="password" name="password" placeholder="Enter Password" required>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="gender">Gender</label>
</div>
<div class="col-75">
<select id="gender" name="gender">
<option value="auto">Male</option>
<option value="manual">Female</option>
</select>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="email">E-Mail Address</label>
</div>
<div class="col-75">
<input type="text" id="email" name="email" placeholder="Enter your E-Mail Address for notification" required>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="contact">Contact Number</label>
</div>
<div class="col-75">
<input type="text" id="contact" name="contact" placeholder="Enter your contact number" required>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="address">Full Address</label>
</div>
<div class="col-75">
<textarea id="address" name="address" placeholder="Enter full address" style="height:200px" required></textarea>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="address">Date of Birth</label>
</div>
<div class="col-75">
<input type="date" id="dob" name="dateofbirth"
       value="2018-07-22"
       min="1900-01-01" max="2020-12-31">
</div>
</div>
<br>

<div class="row">
<input type="submit" class="w3-block w3-right button w3-button" value="Register">
<a href="MainPage.php" class="w3-block w3-right button w3-button">Back</a>
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
