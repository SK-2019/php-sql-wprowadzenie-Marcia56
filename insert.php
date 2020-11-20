<?php

require("connect.php");

$sql = "INSERT INTO Pracownik (null, imie, dzial, zarobki) 
       VALUES (null,'Ksawery', 3, 36,'1995-10-21')";

//zapisanie do bazy danych
$conn->query($sql);

$conn->close();
?>
