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
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Marta-Kowalik"><b>GITHUB | </b></a>
    <a href="agregat.php"><b>FUNKCJE AGREGUJĄCE | </b></a>
    <a href="orgpracownicy.php"><b>ORGANIZACJA I PRACOWNICY | </b></a>
    <a href="pracownicy.php"><b>PRACOWNICY</b></a>
</h3>
<h1>Marta Kowalik</h1>
<hr>

<?php

    require("connect.php");
    echo("<h2>ZADANIE 1: Pracownicy dział 2</h2>");
    $result = $conn->query('SELECT * FROM pracownicy, organizacja WHERE dzial=2');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 2: Pracownicy dział 2 i 3</h2>");  
    $result = $conn->query('SELECT * FROM pracownicy, organizacja where (dzial=2 or dzial=3)'); 
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Dział</th>");
    echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
            echo("</tr>");
            }
    

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 3: Pracownicy zarabiający mniej niż 30</h2>");  
    $result = $conn->query('SELECT * FROM pracownicy, organizacja WHERE zarobki<30'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

?>
    
</body>
</html>
