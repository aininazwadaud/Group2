<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>
<?php include"Include/AdminHeader.php";?>
<?php 
include('config.php');
session_start();
$AdminIDurl = $_SESSION['AdminID'];
$idURL = $_GET['id'];
$query ="update carbooking set Car_status='AVAILABLE' where BookingID='$idURL'";
if(mysqli_query($link,$query)){
	$query ="INSERT INTO return(ReturnDateTime,AdminID) VALUES(NOW(),'$AdminIDurl')";
	$result= mysqli_query($link,$query);
	echo "<script type= 'text/javascript'> window.location='AwaitingListPage.php'</script>";
}
?>