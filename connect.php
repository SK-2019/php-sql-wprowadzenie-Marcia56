<?php
$conn= new mysqli('mysql-marciak.alwaysdata.net','marciak','haslo123','marciak_db1');
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());

}
?>
