<!DOCTYPE html>

<?php
	require_once'config.php';
	session_start();
	$CarPlate = $_SESSION['CarPlate'];
	$Value=0;
	
	if(isset($_POST['Submit']))
	{
		$carname 		= mysqli_real_escape_string($link, $_POST['carname']);
		$carclass 		= mysqli_real_escape_string($link, $_POST['carclass']);
		$carpassenger	= mysqli_real_escape_string($link, $_POST['carpassenger']);
		$carprice 		= mysqli_real_escape_string($link, $_POST['carprice']);
		$cargear 		= mysqli_real_escape_string($link, $_POST['cargear']);
		$carplate 		= mysqli_real_escape_string($link, $_POST['carplate']);
		$status 		= mysqli_real_escape_string($link, $_POST['status']);
		
		$feature 		= $_POST['feature'];
		$newfeatures	= "";
		
		foreach($feature as $newfeatures1)
		{
			$newfeatures .= $newfeatures1. ",";
		}
		
		$destination	= "Pictures/".$_FILES['carimage']['name'];
		$filename		= $_FILES['carimage']['tmp_name'];
		
		(move_uploaded_file($filename,$destination));
		
		if($CarPlate===$Value)
		{
			mysqli_query($link,"INSERT INTO `cardetails` (`CarID`,`CarImage`,`CarName`,`CarClass`,`CarPassenger`,`CarPrice`,`CarGear`,`CarFeatures`,`CarPlate`,`CarStatus`) VALUES (NULL, '$destination', '$carname', '$carclass', '$carpassenger', '$carprice', '$cargear', '$newfeatures', '$carplate', '$status');");
			header("location:ManageCarPage.php");
		}
		
		else
		{
			mysqli_query($link,"UPDATE cardetails SET CarImage='$destination',CarName='$carname',CarClass='$carclass',CarPassenger='$carpassenger',CarPrice='$carprice',CarGear='$cargear',CarFeatures='$newfeatures',CarStatus='$status' WHERE CarPlate='$CarPlate'");
			header("location:ManageCarPage.php");
		}
	}
?>

<html lang="en">
<title>Welcome to Car Rental System</title>

<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>
<?php include"Include/AdminHeader.php";?>
<head>
	<link rel="stylesheet" href="backgroundcss.css">
</head>
<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">

<body id="dullbackground">
<form action="UpdateCarPage.php" method="post" enctype="multipart/form-data">
<div class="container">
<div class="row">
<div class="col-25">
<label for="image">Upload</label>
</div>
<div class="col-75">
<input type="file" name="carimage">
</div>
</div>

<div class="row">
<div class="col-25">
<label for="carname">Name</label>
</div>
<div class="col-75">
<input type="text" name="carname" placeholder="Name of your car" required>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="carplate">Plate</label>
</div>
<div class="col-75">
<input type="text" name="carplate" placeholder="Car Plate Number" value="<?php echo $CarPlate;?>" required>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="status">Status</label>
</div>
<div class="col-75">
<select id="status" name="status">
<option value="Active">Active</option>
<option value="Not Active">Not Active</option>
</select>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="carclass">Class</label>
</div>
<div class="col-75">
<select id="carclass" name="carclass">
<option value="Compact">Compact</option>
<option value="SUV">SUV</option>
<option value="Station Wagon">Station Wagon</option>
<option value="Passenger Van">Passenger Van</option>
</select>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="cargear">Gear Box</label>
</div>
<div class="col-75">
<select id="cargear" name="cargear">
<option value="Auto">Auto</option>
<option value="Manual">Manual</option>
</select>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="carpassenger">Passenger</label>
</div>
<div class="col-75">
<select id="carpassenger" name="carpassenger">
<option value="5">5</option>
<option value="8">8</option>
</select>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="feature">Features</label>
</div>
<div class="col-75">
<input type="checkbox" name="feature[]" value="ABS"> ABS<br>
<input type="checkbox" name="feature[]" value="Air Bag" > Air Bag<br>
<input type="checkbox" name="feature[]" value="Air Conditional"> Air Conditional<br>
<input type="checkbox" name="feature[]" value="HD Audio System" > HD Audio System<br>
<input type="checkbox" name="feature[]" value="Central Locking"> Central Locking<br>
<input type="checkbox" name="feature[]" value="Electronic Windows" > Electronic Windows<br>
<input type="checkbox" name="feature[]" value="Power Stearing"> Power Stearing<br><br>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="carprice">Price</label>
</div>
<div class="col-75">
<input type="text" name="carprice" placeholder="/hour" required>
</div>
</div><br>

<div class="row">
<input type="submit" class="w3-block w3-right button w3-button" value="Submit" name="Submit">
<a href="ManageCarPage.php" class="w3-block w3-right button w3-button">Back</a>
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
