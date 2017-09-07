<?php
    if(isset($_POST['nombre']) && isset($_POST['clave'])){
     

    include("../../../config.php");
    $MySQLiconn = new MySQLi(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    
    if($MySQLiconn->connect_errno)
       die("ERROR : -> ".$MySQLiconn->connect_error);
    
    $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
    $clave = $MySQLiconn->real_escape_string($_POST['clave']);

    $SQL = $MySQLiconn->query("INSERT INTO user (id, nombre, clave)
    VALUES (null, '$nombre', '$clave')");  

    if(!$SQL)echo $MySQLiconn->error;  
    }
       
?>
<html>
    <form method="post" action="">
        Nombre:<input type="text" name="nombre"><br>
        Clave:<input type="password" name="clave"><br>
        <input type="submit" name="Save"><br>
    </form>
</html>