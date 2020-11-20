<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marcia Kowalik</title>
        <link rel="stylesheet" href="styles.css">
    </head>
<body>

<h3>
    <a href=https://github.com/SK-2019/php-sql-wprowadzenie-Marta-Kowalik"><b>GITHUB | </b></a>
    <a href="agregat.php"><b>FUNKCJE AGREGUJĄCE | </b></a>
    <a href="orgpracownicy.php"><b>ORGANIZACJA I PRACOWNICY | </b></a>
    <a href="pracownicy.php"><b>PRACOWNICY | </b></a>
    <a href="dataiczas.php"><b>DATA I CZAS |</b></a>
    <a href="formularz.html"><b>FORMULARZ |</b></a>
                            
                           
</h3>
<h1>✧༺♥༻∞Marta Kowalik∞༺♥༻✧</h1>
<hr>

<?php

    require("connect.php");
    echo("<h2>ZADANIE 1: SELECT * FROM pracownicy, organizacja WHERE dzial=2</h2>");
    $result = $conn->query('SELECT * FROM pracownicy, organizacja WHERE dzial=2 AND dzial=id_org');
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 2: SELECT * FROM pracownicy, organizacja where (dzial=1 or dzial=2)</h2>");  
    $result = $conn->query('SELECT * FROM pracownicy, organizacja where dzial=id_org AND (dzial=1 or dzial=2)'); 
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");
            }
    

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 3: SELECT * FROM pracownicy, organizacja WHERE zarobki<30</h2>");  
    $result = $conn->query('SELECT * FROM pracownicy, organizacja WHERE zarobki<30 AND dzial=id_org'); 
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");
            }

            echo("</table>")

?>
    
</body>
</html>
