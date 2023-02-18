
<?php
$servername = "35.228.180.144";
$username = "root";
$password = "1290asJKL!@()";
$dbname = "IOT_Project";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>