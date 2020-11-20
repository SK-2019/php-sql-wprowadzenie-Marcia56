<?php
echo("jestes w insert.php <br>");
echo "<li>". $_POST['name'];
echo "<li>". $_POST['dzial'];
echo "<li>". $_POST['zarobki'];
echo "<li>". $_POST['data_urodzenia'];

require("connect.php");

//definiujemy zapytanie $sql
$sql = "INSERT INTO Pracownik (null, name, dzial,zarobki,data_urodzenia)
	      VALUES (
					null,". 
					$_POST['name'], 
					$_POST['dzial'], 
					$_POST['zarobki'],
					$_POST['data_urodzenia']
				;

//wyświetlamy zapytanie $sql
echo "<li>". $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
