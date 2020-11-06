<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Karolina Zatylny 2Ti</title>
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
    echo("<h2>ZADANIE 6: SELECT avg(zarobki) as srednia_zarobkow FROM pracownicy, organizacja WHERE dzial = id_org</h2>");
    $result = $conn->query('SELECT avg(zarobki) as az FROM pracownicy, organizacja WHERE dzial = id_org'); 
        echo("<table border=1>");
        echo("<th>Średnia_Zarobków</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["az"]."</td>");
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
        require("connect.php");
        echo("<h2>ZADANIE 7: SELECT sum(zarobki) as suma_zarobki FROM pracownicy, organizacja WHERE (dzial = id_org) and (zarobki>45)</h2>");
        $result = $conn->query('SELECT sum(zarobki) as sz FROM pracownicy, organizacja WHERE (dzial = id_org) and (zarobki>45)'); 
            echo("<table border=1>");
            echo("<th>Suma_Zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["sz"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        echo("<h2>ZADANIE 8: SELECT count(imie) as liczba_kobiet FROM pracownicy, organizacja WHERE (dzial = id_org and imie like 'a%')</h2>");
        $result = $conn->query('SELECT count(imie) as lk FROM pracownicy, organizacja WHERE (dzial = id_org and imie like "a%")'); 
            echo("<table border=1>");
            echo("<th>Liczba_Kobiet</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["lk"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        echo("<h2>ZADANIE 9: SELECT count(imie) as liczba_mężczyzn FROM pracownicy, organizacja WHERE (dzial = id_org and imie not like 'a%')</h2>");
        $result = $conn->query('SELECT count(imie) as lm FROM pracownicy, organizacja WHERE (dzial = id_org and imie not like "a%")'); 
            echo("<table border=1>");
            echo("<th>Liczba_Mężczyzn</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["lm"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        echo("<h2>ZADANIE 10: SELECT max(zarobki) as max FROM pracownicy, organizacja WHERE (dzial = id_org)</h2>");
        $result = $conn->query('SELECT max(zarobki) as max FROM pracownicy, organizacja WHERE (dzial = id_org)'); 
            echo("<table border=1>");
            echo("<th>Max</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["max"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");
?>
    
</body>
</html>
