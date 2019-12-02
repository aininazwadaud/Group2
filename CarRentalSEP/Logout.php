<?php

include("config.php");

session_start();
unset($_SESSION["userID"]);
unset($_SESSION["AdminID"]);
unset($_SESSION["CustomerID"]);  
header("Location: MainPage.php");

?>