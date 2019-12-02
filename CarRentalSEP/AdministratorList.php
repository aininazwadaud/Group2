///xxxxx
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
	$result=mysqli_query($link,"SELECT * from user JOIN admin ON user.UserID = admin.UserID") or die (mysqli_error($link));
	?>
<head>
	<link rel="stylesheet" href="backgroundcss.css">
</head>
<h2 style="padding-left: 50px;"><b>ADMIN LIST</b></h2>
<body>
<div class="w3-content">
  <div class="w3-twothird">
	<a href="AdministratorProfileAdd.php" class="button w3-button">ADD</a>
  </div>
</div>

<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">
<body id="dullbackground">
 <b>Table that shows list of registered admin</b>
  <table style="width:100%">
   <tr>
<td align="center">
	<table bgcolor="white" width="980px" height="50px" border="1" cellpadding="0" cellspacing="0" style="overflow-y:scroll">
		<tr> 
			<th width="100px">Username</th>
			<th width="150px">Full Name</th>
			<th width="100px">Contact Number</th>
			<th width="150px">E-mail</th>
			<th width="200px">Job Scope</th>
		</tr>
		<?php
		while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row['Username']."</td>";
		echo "<td>".$row['Full_Name']."</td>";
		echo "<td>".$row['Contact']."</td>";
		echo "<td>".$row['Email']."</td>";
		echo "<td>".$row['Jobscope']."</td>";
		}?>

	</table>
	</td>
</tr>
  </table>
</div>
</div>
</body>

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
