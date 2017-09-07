<?php
	session_start();
	echo "Mysql admin";

?>
<html> 
  <head> 
  <title>Problema</title> 
  </head> 
  <body> 
  <form action="crud/conection.php" method="post"> 
  <select name="peticion">
	<option value="#">Seleccione una opcion</option>	
	<option value="find">find</option>
	<option value="update">Update</option>
	<option value="delete">Delete</option>
  <option value="insert">Insert</option>
</ul>
</select>
 <br> 
  <input type="submit" name="operar"> 
  </form>
  </body> 
  </html>