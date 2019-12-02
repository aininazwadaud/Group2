<!DOCTYPE html>

<?php
	require_once'config.php';
	session_start();
	if(isset($_POST['Delete']))
	{
		if(count($_POST['checkbox']) != 0)
		{
			$del_id = implode(',',$_POST['checkbox']);
			$result = mysqli_query($link,"DELETE FROM cardetails WHERE CarPlate='$del_id'");
		}
	}
	
	if(isset($_POST['Add']))
	{
		$CarPlate=0;
		$_SESSION['CarPlate']=$CarPlate;
		header("location:UpdateCarPage.php");
	}
	
	if(isset($_POST['Edit']))
	{
		if(count($_POST['checkbox']) != 0)
		{
			$CarPlate = implode(',',$_POST['checkbox']);
			$_SESSION['CarPlate']=$CarPlate;
			header("location:UpdateCarPage.php");
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("message successfully sent")';
			echo '</script>';
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
<form method="post">
<div class="w3-content">
  <div class="w3-twothird">
	<input type="submit" class="button w3-button" id="Add" name="Add" value="ADD">
	<input type="submit" class="button w3-button" id="Delete" name="Delete" value="DELETE">
	<input type="submit" class="button w3-button" id="Edit" name="Edit" value="EDIT">
  </div>
</div>
<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">

 <body id="dullbackground">
  <table style="width:100%" bgcolor="white">
	<?php $result = mysqli_query($link,"SELECT * FROM cardetails");
	while ($row = mysqli_fetch_array($result)):?>
    <tr>
	  <td style="width:5%" rowspan="6"><input type="checkbox" name="checkbox[]" value="<?php echo $row['CarPlate'];?>"></td>
	  <td style="width:20%" rowspan="6">
	  <?php
		echo "<img src='".$row['CarImage']."' height='200' width='200'> ";
	  ?>
	  </td>
	  <th style="width:40%" colspan="2"><?php echo $row['CarName'];?></th>
	  <th style="width:35%">Features</th>
	</tr>
	<tr>
	  <th>Car Plate</th>
	  <td><?php echo $row['CarPlate'];?></td>
	  <td rowspan="5"><?php echo $row['CarFeatures'];?></td>
	</tr>
	<tr>
	  <th>Class</th>
	  <td><?php echo $row['CarClass'];?></td>
	</tr>
	<tr>
	  <th>Passenger</th>
	  <td><?php echo $row['CarPassenger'];?></td>
	</tr>
	<tr>
	  <th>Price/hr</th>
	  <td><?php echo $row['CarPrice'];?></td>
	</tr>
	<tr>
	  <th>Gear</th>
	  <td><?php echo $row['CarGear'];?></td>
	</tr>
	<?php endwhile;?>
  </table>
</div>
</div>
</body>
</form>

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
