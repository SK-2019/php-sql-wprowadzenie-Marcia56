<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="../obrazki/favicon.ico">
    
    <title>Marta Kowalik</title>
    <link rel="stylesheet" href="../inne/styles.css" />
  </head>
  <body>
    
    <div class="container0">
       <div class="item banner">
       <?php
        include("../inne/header.php");        
        ?>
      </div>
      <div class="item menu">

  <?php
        include("../inne/menu.php");
    ?>

      </div>
      <div class="item tresczad">
          
        <div class="tresc">
          
          <div class="naglowek">Wiele do wielu | Biblioteka </div>
          <?php


require_once("../connect.php");

$sql = ("SELECT * FROM autor");
echo("<h2>".$sql."</h2>");
$result=$conn->query($sql);

        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>autor</th>");


        while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["nazwisko"]."</td>");
                echo("</tr>");
            }
        echo("</table>");


        $sql = ("SELECT * FROM tytul");
echo("<h2>".$sql."</h2>");
$result=$conn->query($sql);

        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>tytul</th>");


        while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>");
                echo("</tr>");
            }
        echo("</table>");


$sql = ("SELECT * FROM autor, tytul, autor_tytul  where autor_id = autor.id and tytul_id = tytul.id");
echo("<h2>".$sql."</h2>");
$result=$conn->query($sql);

        echo("<table border=1>");
        echo("<th>autor</th>");
        echo("<th>tytul</th>");


        while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["nazwisko"]."</td><td>".$row["tytul"]."</td>");
                echo("</tr>");
            }
        echo("</table>");


        ?>

        
        </div>
      </div>
      <div class="item zdjecie"></div>

    </div>
  </body>
</html>
