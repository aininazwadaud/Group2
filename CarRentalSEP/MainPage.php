<!DOCTYPE html>

<?php
include 'config.php';

 if (isset($_REQUEST['ok']))
 {
$user_name = $_REQUEST["username"];
$user_password = $_REQUEST["password"];

$result=mysqli_query($link,"select * from user where Username='$user_name' AND Password='$user_password'") or die (mysqli_error($link));
		
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$user_type = $row['User_type'];
$user_id = $row['UserID'];

if ($count > 0) 
  {
  session_start();
  $_SESSION['userID']=$row['UserID']; 
  if($user_type=="customer"){
  $result=mysqli_query($link,"select * from customer where userID='$user_id'") or die (mysqli_error($link));
  $count=mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);
  $_SESSION["CustomerID"]= $row['CustomerID'];
  
  echo "<script language=javascript>  window.location.href='CustomerHomePage.php' </script>";
  } else 
  {
  $result=mysqli_query($link,"select * from admin where userID='$user_id'") or die (mysqli_error($link));
  $count=mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);
  $_SESSION["AdminID"]= $row['AdminID'];
  echo "<script language=javascript>  window.location.href='AdministratorHomePage.php' </script>";
  }
}
else
{
echo "<script language=javascript> alert(\"Invalid Password And Username, Please Try Again.\");</script>"; 
}
mysqli_close($link);
}
?>

<html lang="en">
<title>Welcome to Car Rental System</title>

<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>

<script type="text/javascript">
function setFocus()
{
     document.getElementById("username").focus();
}

function focusReset(){
		   document.login.username.value="";
		   document.login.password.value="";
		   document.login.username.focus();
		}

function Blank_Validator()
{
if (document.login.user.value == "" ) 
{
     alert("Please fill the user name.");
    document.login.username.focus();
  return (false);
}
else  if (document.login.user_password.value == ""  ){
 alert("Please fill the password.");
   document.login.username.focus();
     return (false);
}
return (true);
}

</script>

<body>

<?php include"Include/MainPageHeader.php";?>

<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">

<body>
<form name="login" method="post" action="" onsubmit="return Blank_Validator()" novalidate>
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
<input type="password" id="password" name="password" placeholder="Enter your password" required>
<label>
<input type="checkbox" checked="checked" name="remember"> Remember me
</label>
<span class="rpassword">Forgot <a href="ForgetPassword.php">password?</a></span>
</div>
</div><br>


<div class="row">
<div class="w3-bar">
  <input type="submit" class="w3-block w3-right button w3-button" name="ok" value="Log-In">
  <a href="RegisterInterface.php" class="w3-block w3-right button w3-button">Register</a>
</div>
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
