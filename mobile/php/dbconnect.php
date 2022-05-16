<?php
$servername = "localhost";
$username	= "root";
$password	= "";
$dbname	= "slumshop_db";     //folow php database name

$conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>