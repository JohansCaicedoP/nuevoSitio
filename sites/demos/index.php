<?php
	echo "welcome to demos";	
	session_start();
	
	if(isset($_SESSION['login'])){echo $_SESSION['login'];}//Imprime el nombre
?>
<html>
	<head>
		<title>Demos</title>
		
	
		
	</head>
	<body>
	<ul>
		<li><a href="mysql/admin.php">Admin MYSQL</a></li>
		<li><a href="postgress/admin.php">Admin POSTGRES</a></li>
		<li>Admin ORACLE</li>
	</ul>		
	</body>
</html>