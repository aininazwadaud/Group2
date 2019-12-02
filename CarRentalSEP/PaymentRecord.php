<!DOCTYPE html>
<html lang="en">
<title>Welcome to Car Rental System</title>
<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>
<?php include"Include/AdminHeader.php";?>
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

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
<body>

<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">
<body>
  <input type="text" id="myInput" onkeyup="search()" placeholder="Search for Car Serial Number" title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th>Car Serial Number</th>
    <th>Name</th>
    <th>Car</th>
    <th>Car Plate</th>
    <th>Rent</th>
    <th>Return</th>
  </tr>
  <tr>
    <td>BK_9476</td>
    <td>Anthony</td>
    <td>Nissan GTR</td>
    <td>WWW1234</td>
    <td>12/03/2019 8:30AM</td>
    <td>14/03/2019 8:30AM</td>
  </tr>
  <tr>
    <td>BK_2146</td>
    <td>Mark</td>
    <td>Nissan GTR</td>
    <td>WWW1234</td>
    <td>12/03/2019 8:30AM</td>
    <td>14/03/2019 8:30AM</td>
  </tr>
  <tr>
    <td>BK_9499</td>
    <td>James</td>
    <td>Nissan GTR</td>
    <td>WWW1234</td>
    <td>12/03/2019 8:30AM</td>
    <td>14/03/2019 8:30AM</td>
  </tr>
</table>
</div>
</div>
</body>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

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
</script>

</body>
</html>
