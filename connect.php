<?php

$servername = "marciak.alwaysdata.net";
$username = "marciak";
$password = "marciak1234.";
$dbanme = "marciak_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>