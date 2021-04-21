<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Marta Kowalik</title>
    <link rel="stylesheet" href="../inne/styles.css" />
  </head>
  <body>
    
    <div class="container0">
      <div class="item banner">
        <h1 class="bannertxt">Marta Kowalik 2Ti</h1>
      </div>
      <div class="item menu">

          <?php
        include("../inne/menu.php");
    ?>
      </div>
      <div class="item tresczad">
          
        <div class="tresc">
          
          <div class="naglowek"> Pracownicy </div>
      <?php

    require_once("../connect.php");
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




        
        </div>





      </div>
      <div class="item palacz">






        </div>



    </div>
  </body>
</html>
