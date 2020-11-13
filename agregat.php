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
    <a href="pracownicy.php"><b>PRACOWNICY | </b></a>
    <a href="dataiczas.php"><b>DATA I CZAS</b></a> 
</h3>
<h1>✧༺♥༻∞Marta Kowalik∞༺♥༻✧</h1>
<hr>

<?php

    require("connect.php");
    echo("<h2>ZADANIE 1: SELECT sum(zarobki) as suma_zarobkow FROM pracownicy</h2>");
    $result = $conn->query('SELECT sum(zarobki) as sz FROM pracownicy'); 
        echo("<table border=1>");
        echo("<th>Suma_zarobków</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["sz"]."</td>");
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
        require("connect.php");
        echo("<h2>ZADANIE 2: SELECT sum(zarobki) as suma_zarobki FROM pracownicy WHERE imie like '%a'</h2>");
        $result = $conn->query('SELECT sum(zarobki) as sz FROM pracownicy WHERE imie like "%a"'); 
            echo("<table border=1>");
            echo("<th>Suma_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["sz"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        echo("<h2>ZADANIE 3: SELECT sum(zarobki) as suma_zarobki FROM pracownicy WHERE (imie not like 'a%') AND (dzial=2 OR dzial=3)</h2>");
        $result = $conn->query('SELECT sum(zarobki) as sz FROM pracownicy WHERE (imie not like "a%") AND (dzial=2 OR dzial=3)'); 
            echo("<table border=1>");
            echo("<th>Suma_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["sz"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        echo("<h2>ZADANIE 4: SELECT avg(zarobki) as srednia_zarobki FROM pracownicy where imie not like '%a'</h2>");
        $result = $conn->query('SELECT avg(zarobki) as az FROM pracownicy where imie not like "%a"'); 
            echo("<table border=1>");
            echo("<th>Średnia_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["az"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        require("connect.php");
        echo("<h2>ZADANIE 5: SELECT avg(zarobki) as srednia_zarobki FROM pracownicy WHERE dzial=4</h2>");
        $result = $conn->query('SELECT avg(zarobki) as az FROM pracownicy WHERE dzial=4'); 
            echo("<table border=1>");
            echo("<th>Średnia_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["az"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
            require("connect.php");
            echo("<h2>ZADANIE 6: SELECT avg(zarobki) as srednia_zarobki FROM pracownicy WHERE (imie not like '%a') AND (dzial=1 OR dzial=2)</h2>");
            $result = $conn->query('SELECT avg(zarobki) as az FROM pracownicy WHERE (imie not like "%a") AND (dzial=1 OR dzial=2)'); 
                echo("<table border=1>");
                echo("<th>Średnia_zarobków</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                            echo("<td>".$row["az"]."</td>");
                        echo("</tr>");
                    }
        
                echo("</table>");
                require("connect.php");
                echo("<h2>ZADANIE 7: SELECT count(imie) as ilosc_pracownikow FROM pracownicy</h2>");
                $result = $conn->query('SELECT count(imie) as ip FROM pracownicy'); 
                echo("<table border=1>");
                echo("<th>Ilość_pracowników</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                            echo("<td>".$row["ip"]."</td>");
                        echo("</tr>");
                    }

                echo("</table>");
                require("connect.php");
                echo("<h2>ZADANIE 8: SELECT count(imie) as ilosc_pracownikow FROM pracownicy where (imie like '%a') AND (dzial=1 OR dzial=3)</h2>");
                $result = $conn->query('SELECT count(imie) as ip FROM pracownicy where (imie like "%a") AND (dzial=1 OR dzial=3)'); 
                echo("<table border=1>");
                echo("<th>Ilość_pracowników</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                            echo("<td>".$row["ip"]."</td>");
                        echo("</tr>");
                    }

                echo("</table>");
                require("connect.php");
                echo("<h2>ZADANIE 9: SELECT nazwa_dzial, sum(zarobki) as suma_zarobki FROM pracownicy, organizacja WHERE dzial=id_org group by dzial</h2>");
                $result = $conn->query('SELECT nazwa_dzial, sum(zarobki) as sz FROM pracownicy, organizacja WHERE dzial=id_org group by dzial'); 
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Suma_zarobków</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["sz"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");    
                require("connect.php");
                echo("<h2>ZADANIE 10: SELECT count(imie) as ilosc_pracownikow, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial</h2>");
                $result = $conn->query('SELECT count(imie) as ip, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial'); 
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Ilość_pracowników</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["ip"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");    
                require("connect.php");
                echo("<h2>ZADANIE 11: SELECT avg(zarobki) as srednia_zarobki, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial</h2>");
                $result = $conn->query('SELECT avg(zarobki) as az, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial'); 
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Średnia_zarobków</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["az"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");    
                require("connect.php");
                echo("<h2>ZADANIE 12: SELECT sum(zarobki) as sum, if(imie like '%a', 'Kobiety', 'Mężczyźni') as plec FROM pracownicy group by plec</h2>");
                $result = $conn->query('SELECT sum(zarobki) as sum, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec'); 
                echo("<table border=1>");
                echo("<th>Suma_zarobków</th>");
                echo("<th>Płeć</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["sum"]."</td><td>".$row["plec"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");   
                require("connect.php");
                echo("<h2>ZADANIE 13: SELECT avg(zarobki) as az, if(imie like '%a', 'Kobiety', 'Mężczyźni') as plec FROM pracownicy group by plec</h2>");
                $result = $conn->query('SELECT avg(zarobki) as az, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec'); 
                echo("<table border=1>");
                echo("<th>Średnia_zarobków</th>");
                echo("<th>Płeć</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                        echo("<td>".$row["az"]."</td><td>".$row["plec"]."</td>"); 
                        echo("</tr>");
                    }

                echo("</table>");   
                require("connect.php");
                echo("<h2>ZADANIE 14: SELECT sum(zarobki) as sum, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial HAVING sum(zarobki)<28</h2>");
                $result = $conn->query('SELECT sum(zarobki) as sum, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial HAVING sum(zarobki)<28');
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Suma_zarobków</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["sum"]."</td>");
                    }

                echo("</table>");
                require("connect.php");
                echo("<h2>ZADANIE 15: SELECT avg(zarobki) as srednia_zarobki, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie not like '%a') group by dzial having avg(zarobki)>30</h2>");
                $result = $conn->query('SELECT avg(zarobki) as az, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie not like "%a") group by dzial having avg(zarobki)>30');
                echo("<table border=1>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Średnia_zarobków</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["az"]."</td>");
                    }

                echo("</table>");
                require("connect.php");
                echo("<h2>ZADANIE 16: SELECT count(imie) as ilosc, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) group by dzial having count(imie)>2</h2>");
                $result = $conn->query('SELECT count(imie) as i, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) group by dzial having count(imie)>2');
                echo("<table border=1>");
                echo("<th>Ilość</th>");
                echo("<th>Nazwa_działu</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row["i"]."</td><td>".$row["nazwa_dzial"]."</td>");
                    }

                echo("</table>");

                
?>
    
</body>
</html>
