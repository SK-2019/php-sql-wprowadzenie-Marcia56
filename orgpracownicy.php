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
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-karolinazatylny"><b>GITHUB | </b></a>
    <a href="agregat.php"><b>FUNKCJE AGREGUJĄCE | </b></a>
    <a href="orgpracownicy.php"><b>ORGANIZACJA I PRACOWNICY | </b></a>
    <a href="pracownicy.php"><b>PRACOWNICY</b></a>
</h3>
<h1>✿ Karolina Zatylny ✿</h1>
<hr>

<?php

    require("connect.php");
    echo("<h2>ZADANIE 1: SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org</h2>");
    $result = $conn->query('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 2: SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (dzial=1 or dzial=4)</h2>");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (dzial=1 or dzial=4)'); 
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
    require("connect.php");
    echo("<h2>ZADANIE 3: SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie like '%a')</h2>");  
    $result = $conn->query('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie like "%a")'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 4: SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie not like '%a')</h2>");  
    $result = $conn->query('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie not like "%a")');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 5: SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) order by imie desc</h2>");  
    $result = $conn->query('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) order by imie desc'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                  echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    require("connect.php");
    echo("<h2>ZADANIE 6: SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (dzial=3) order by imie asc</h2>");
    $result = $conn->query('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (dzial=3) order by imie asc'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                 echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
        require("connect.php");
        echo("<h2>ZADANIE 7: SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie like '%a') order by imie asc</h2>");
        $result = $conn->query('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie like "%a") order by imie asc'); 
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        echo("<h2>ZADANIE 8: SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) AND (imie like '%a') AND (dzial=1 OR dzial=3) order by zarobki asc</h2>");
        $result = $conn->query('SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) AND (imie like "%a") AND (dzial=1 OR dzial=3) order by zarobki asc'); 
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        echo("<h2>ZADANIE 9: SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie not like 'a%') order by nazwa_dzial asc, zarobki asc</h2>");
        $result = $conn->query('SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie not like "a%") order by nazwa_dzial asc, zarobki asc'); 
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

?>
    
</body>
</html>