<?php
	if(isset($_POST['nombre'])){
		include("../../../config.php");
		    $MySQLiconn = new MySQLi(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		    
		    if($MySQLiconn->connect_errno)
		       die("ERROR : -> ".$MySQLiconn->connect_error);
		    
		    $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);


		    $newNombre = $MySQLiconn->real_escape_string($_POST['newNombre']);
		    $newClave = $MySQLiconn->real_escape_string($_POST['clave']);

		    $sql = "update user set nombre=\"$_POST[newNombre]\",clave=\"$_POST[clave]\" where nombre=".$_POST["nombre"];
			$query = $con->query($sql);
}
	
?>
<html>
	<head>
		<title>Update</title>
	</head>
	<body>
		<form action="" method="post">
			Nombre:<input type="text" name="nombre"><br>		Nuevo nombre: <input type="text" name="newNombre"><br>
			<input type="submit" name="Update">	
		</form>
	</body>
</html>