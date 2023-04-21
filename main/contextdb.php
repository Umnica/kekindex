<?php
$servername = "(localdb)\MSSqlLocalDB";
//$servername = "localhost";
$username = "DESKTOP-UFIC4SL\Kirill";
//$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


