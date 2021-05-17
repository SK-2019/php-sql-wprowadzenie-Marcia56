<?
        require_once("../connect.php");

        function delete($conn, $table, $column, $row){
 
            $sql = "DELETE  FROM $table WHERE $column = $row";
=
            echo $sql;
    
            if ($conn->query($sql) === TRUE) {
              echo ("<h2>Record deleted successfully</h2>");
    
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
    
            $conn->close();
            }
    
            delete($conn, $_POST['table'], $_POST['column'], $_POST['row']);
    
            ?>
        ?>