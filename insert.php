<?php
echo("jestes w insert.php <br>");
echo "<li>". $_POST['name'];
echo "<li>". $_POST['dzial'];
echo "<li>". $_POST['zarobki'];
echo "<li>". $_POST['data_urodzenia'];

require("connect.php");



$sql = "INSERT INTO Pracownik (id,imie, dzial, zarobki, data_urodzenia) 
       VALUES (null,'".$_POST['name']."', 1, 76,'1991-11-21')";

//wyświetlenie zapytania sql
echo "<li>".$sql;


//obsługa błędów zapisu do bazy
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
