//xxxx
<!DOCTYPE html>
<html lang="en">
<title>Welcome to Car Rental System</title>
<head>
	<link rel="stylesheet" href="backgroundcss.css">
</head>

<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>

<body id="dullbackground">

<?php include"Include/AdminHeader.php";?>

<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div>
      <p align="middle">
		<a href="ManageCarPage.php">
		<img border="0" hspace="50" alt="W3Schools" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Circle-icons-car.svg/768px-Circle-icons-car.svg.png" width="200" height="200">
		</a>
		<a href="PaymentRecord.php">
		<img border="0" hspace="50" alt="W3Schools" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Circle-icons-creditcard.svg/480px-Circle-icons-creditcard.svg.png" width="200" height="200">
		</a>
		<a href="RentAndReturnPage.php">
		<img border="0" hspace="50" alt="W3Schools" src="http://icons.iconarchive.com/icons/webalys/kameleon.pics/256/Key-icon.png" width="200" height="200">
		</a>
	</p>
    </div>
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
</script>

</body>
</html>
