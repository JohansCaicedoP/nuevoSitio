<?php
     session_start();       
     
     if(isset($_POST['nombre']) && isset($_POST['clave'])){              
         
         include("../../../config.php");
         $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
         mysqli_report(MYSQLI_REPORT_ERROR);
         
         $nombre = $mysqli->real_escape_string($_POST['nombre']);
         
         if ($stmt = $mysqli->prepare("DELETE FROM user WHERE nombre = ? LIMIT 1"))
         {
             $stmt->bind_param("i",$nombre);
             $stmt->execute();
             $stmt->close();
         }
         else
         {
             echo "ERROR: could not prepare SQL statement.";
         }
         $mysqli->close();        
     }
?>
<html>
    <head>
        <title>Delete</title>
    </head>
    <body>
        <form action="" method="POST">
        	Nombre:<input type="text" name="nombre"><br>
        	Clave:<input type="text" name="clave"><br>
        	<input type="submit" value="Borrar">
        </form>
    </body>
</html>