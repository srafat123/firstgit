<?php 
$servername = "192.241.203.142"; 
$username = "brsquaathj"; 
$password = "nFsNcr492g"; 
$dbname = "brsquaathj";

$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}

?>
