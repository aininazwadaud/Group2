<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>
<?php include"Include/AdminHeader.php";?>
<?php 
include('config.php');
session_start();
$AdminIDurl = $_SESSION['AdminID'];
$idURL = $_GET['id'];
$query ="update carbooking set Car_status='AWAIT' where BookingID='$idURL'";
if(mysqli_query($link,$query)){
	$query ="INSERT INTO rent(RentDateTime,AdminID,BookingID) VALUES(NOW(),'$AdminIDurl','$idURL')";
	$result= mysqli_query($link,$query);		
	echo "<script type= 'text/javascript'> window.location='RentAndReturnPage.php'</script>";
}
?>