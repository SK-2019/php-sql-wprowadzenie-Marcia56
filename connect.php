<?php

$servername = "marciak.alwaysdata.net";
$username = "marciak";
$password = "haslo123";
$dbanme = "marciak_db1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
