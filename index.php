<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="favicon.ico">
    <title>Marta Kowalik</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    
    <div class="container">
      <div class="item banner">
        <h1 class="bannertxt">Marta Kowalik 2Ti</h1>
      </div>
      <div class="item menu">

          <a class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-Marta-Kowalik"><b>GITHUB</b></a>
          <a class="link" href="index.php"><b>INDEX</b></a>
          <a class="link" href="agregat.php"><b>FUNKCJE AGREGUJĄCE</b></a>
          <a class="link" href="orgpracownicy.php"><b>ORGANIZACJA I PRACOWNICY</b></a>
          <a class="link" href="pracownicy.php"><b>PRACOWNICY</b></a>
          <a class="link" href="dataiczas.php"><b>DATA I CZAS</b></a>
          <a class="link" href="formularz.html"><b>FORMULARZ</b></a>
          <a class="link" href="ksiazki.html"><b>KSIAZKI</b></a>
        
      </div>
      <div class="item color3">
          
        <div class="tresc">
          
          <div class="costam"> Strona główna</div>
          <?php

          require("connect.php");
          echo("<h2>ZADANIE 1: SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and imie not like %a</h2>");
          $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and imie not like "%a"');
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
          echo("<h2>ZADANIE 2: SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org</h2>");  
          $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org'); 
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
          echo("<h2>ZADANIE 3: SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and (dzial=2 or dzial=1)</h2>");  
          $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and (dzial=2 or dzial=1)'); 
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
      
              echo("</table>");
          require("connect.php");
          echo("<h2>ZADANIE 4: SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and dzial = 3</h2>");  
          $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and dzial = 3');
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
      
              echo("</table>");
          require("connect.php");
          echo("<h2>ZADANIE 5: SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and zarobki>=35</h2>");  
          $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and zarobki>=35'); 
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
      
              echo("</table>");
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




        
        </div>





      </div>
      <div class="item palacz">






        </div>



    </div>
  </body>
</html>
