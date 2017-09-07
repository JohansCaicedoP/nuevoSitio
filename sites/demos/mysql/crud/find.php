<html>
	<head>
		<tittle>Find a Register</tittle>
	</head>
	<body>
		<form action="" method="POST">
			Name: <input type="text" name="nombre"><br>
			<input type="submit" name="Find">		
		</form>		
	</body>
</html>
<?php
	if(isset($_POST['nombre'])){
     

    include("../../../config.php");
    $MySQLiconn = new MySQLi(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    
    if($MySQLiconn->connect_errno)
       die("ERROR : -> ".$MySQLiconn->connect_error);
    
    $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);    

	$consulta = "SELECT * FROM user WHERE nombre='$nombre'";
   if ($resultado = $MySQLiconn->query($consulta)) {
   		while ($fila = $resultado->fetch_assoc()) {
        	printf ("%s (%s)\n", $fila["nombre"], $fila["clave"]);
    	}
   }

    if(!$resultado)echo $MySQLiconn->error;  
    }
?>