<!DOCTYPE html>
<html lang="en">
<title>Welcome to Car Rental System</title>
<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>
<?php include"Include/AdminHeader.php";?>
<?php include('config.php');
session_start();
$AdminIDurl = $_SESSION['AdminID'];
$query="SELECT * FROM carbooking JOIN customer ON customer.CustomerID=carbooking.CustomerID JOIN user ON user.UserID=customer.UserID  WHERE Car_status = 'BOOKED'";
$result=mysqli_query($link,$query);

?>
<head>
	<link rel="stylesheet" href="backgroundcss.css">
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

.button{
  background-color: #F08080;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

table,th,td {
border: 1px solid black;
border-collapse: collapse;
}
th,td{
padding: 5px;
text-align: left;  
}

* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr{
  background-color: white;
}
</style>
<body id="dullbackground">


<!-- Button -->
  <div class="w3-content">
	<div class="w3-twothird">
	  <a href="RentAndReturnPage.php" class="button w3-button">BOOKED</a>
	  <a href="AwaitingListPage.php" class="button w3-button">AWAIT</a>
	</div>
  </div>

<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">
<body>
  <input type="text" id="myInput" onkeyup="search()" placeholder="Search for Booking ID" title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th>Booking ID</th>
    <th>Name</th>
    <th>Car</th>
    <th>Car Plate</th>
    <th colspan="2">Rent</th>
    <th colspan="2">Return</th>
	<th>Rent Out</th>
  </tr>
	<?php
	while($rows=mysqli_fetch_array($result))
	{
		?>
		<tr>		
		<td><?php echo $rows['BookingID'];?></td>
		<td><?php echo $rows['Full_Name'];?></td>
		<td><?php echo $rows['CarName'];?></td>
		<td><?php echo $rows['CarPlate'];?></td>
		<td><?php echo $rows['PickUpDate'];?></td>
		<td><?php echo $rows['PickUpTime'];?></td>
		<td><?php echo $rows['ReturnDate'];?></td>
		<td><?php echo $rows['ReturnTime'];?></td>
		<td><?php echo "<a href='updaterent.php?id=".$rows['BookingID']."' onclick=\"return confirm('Are you sure to rent out this booking?')\">Rent</a>";?></td>
		
		</tr>
		<?php
	}
	?>
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

function search() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function confirmation(){
	alert("Rent Successfully!")
}

</script>
</body>
</html>