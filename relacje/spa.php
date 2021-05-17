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
          
          <div class="naglowek">Wiele do wielu | Spa </div>

          <?php

require_once("../connect.php");

$sql = ("SELECT * FROM fryzjer");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>fryzjer</th>");
                        echo("<th>delete</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["fryzjer"]."</td><td>
                                    <form action='delete.php' method='POST'>
                                    <input type='number' name='row' value='".$row["id"]."' hidden>
                                    <input type='text' name='table' value='fryzjer' hidden>
                                    <input type='text' name='column' value='id' hidden>
                                    <input type='submit' value='Usuń'>
                                    </form></td>");
                                echo("</tr>");
                            }
                        echo("</table>");

                
                $sql = ("SELECT * FROM klient");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>klient</th>");
                        echo("<th>delete</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["klient"]."</td><td>
                                    <form action='delete.php' method='POST'>
                                    <input type='number' name='row' value='".$row["id"]."' hidden>
                                    <input type='text' name='table' value='klient' hidden>
                                    <input type='text' name='column' value='id' hidden>
                                    <input type='submit' value='Usuń'>
                                    </form></td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        $sql = ("SELECT * FROM fryzjer, klient, fryzjer_klient where fryzjer_id = fryzjer.id and klient_id = klient.id");
                        echo("<h2>".$sql."</h2>");
                        $result=$conn->query($sql);
                                echo("<table border=1>");
                                echo("<th>id</th>");
                                echo("<th>fryzjer</th>");
                                echo("<th>klient</th>");
                                echo("<th>delete</th>");

                                while($row=$result->fetch_assoc()) {
                                        echo("<tr>");
                                            echo("<td>".$row["id"]."</td><td>".$row["fryzjer"]."</td><td>".$row["klient"]."</td><td>
                                            <form action='delete.php' method='POST'>
                                            <input type='number' name='row' value='".$row["id"]."' hidden>
                                            <input type='text' name='table' value='fryzjer_klient' hidden>
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
