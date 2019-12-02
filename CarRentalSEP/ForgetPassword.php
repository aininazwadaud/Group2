<!DOCTYPE html>
<html lang="en">
<title>Welcome to Car Rental System</title>

<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>

<body>

<?php include"Include/MainPageHeader.php";?>

<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">

<body>
<form action="retrievePassword.php" method="post">
<div class="container">
<b>To retrieve password, please enter your Username and E-Mail Address.</b><br><br>
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
<label for="email">E-Mail Address</label>
</div>
<div class="col-75">
<input type="text" id="email" name="email" placeholder="Enter your E-Mail Address" required>
</div>
</div>
<br>

<div class="row">
<input type="submit" class="w3-block w3-right button w3-button" value="Retrieve">
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

function confirmation(){
	confirm("Are you sure want to delete this car?");
}

}
</script>

</body>
</html>
