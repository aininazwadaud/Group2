<!DOCTYPE html>
<?php
	include ("config.php");
	session_start();
	$userIDurl = $_SESSION['userID'];
	$CustomerIDurl = $_SESSION['CustomerID'];?>
	
<html lang="en">
<title>Welcome to Car Rental System</title>
<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>
<?php include"Include/CustomerHeader.php";?>

<body>



<!-- Button -->
  <div class="w3-content">
	<div class="w3-twothird">
	  <a href="CarBooking1.php" class="button w3-button">Book Now</a>
  </div>
   </div>
  
<!-- Page content -->
<div class="w3-content" style="max-width:1500px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="IMG/ford fiesta.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="IMG/kia ceed.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="IMG/peugeot 207.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">  
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
  <img src="IMG/suzuki alto.png" style="width:100%">
   <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">  
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
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);    
}

</script>

</body>
</html>
