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
          
          <div class="naglowek">Wiele do wielu | Sklep </div>
          <?php

require_once("../connect.php");

$sql = ("SELECT * FROM producent");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>producent</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["producent"]."</td><td>
                                    <form action='delete.php' method='POST'>
                                    <input type='number' name='row' value='".$row["id"]."' hidden>
                                    <input type='text' name='table' value='producent' hidden>
                                    <input type='text' name='column' value='id' hidden>
                                    <input type='submit' value='Usuń'>
                                    </form></td>");
                                echo("</tr>");
                            }
                        echo("</table>");

                
                $sql = ("SELECT * FROM produkt");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>produkt</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["produkt"]."</td><td>
                                    <form action='delete.php' method='POST'>
                                    <input type='number' name='row' value='".$row["id"]."' hidden>
                                    <input type='text' name='table' value='produkt' hidden>
                                    <input type='text' name='column' value='id' hidden>
                                    <input type='submit' value='Usuń'>
                                    </form></td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        $sql = ("SELECT * FROM producent, produkt, producent_produkt where producent_id = producent.id and produkt_id = produkt.id");
                        echo("<h2>".$sql."</h2>");
                        $result=$conn->query($sql);
                                echo("<table border=1>");
                                echo("<th>id</th>");
                                echo("<th>producent</th>");
                                echo("<th>produkt</th>");
        
                                while($row=$result->fetch_assoc()) {
                                        echo("<tr>");
                                            echo("<td>".$row["id"]."</td><td>".$row["producent"]."</td><td>".$row["produkt"]."</td><td>
                                            <form action='delete.php' method='POST'>
                                            <input type='number' name='row' value='".$row["id"]."' hidden>
                                            <input type='text' name='table' value='producent_produkt' hidden>
                                            <input type='text' name='column' value='id' hidden>
                                            <input type='submit' value='Usuń'>
                                            </form></td>");
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
