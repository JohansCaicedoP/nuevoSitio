<?php
		//login principal
	session_start();	

if(isset($_SESSION['cont']) && isset($_SESSION['login'])){	
		//Si esta definida
		$_SESSION['cont'] = $_SESSION['cont']+1;
		if($_SESSION['cont'] == 3){
			header("location: /site/sites/error.php");				
		 }
		echo $_SESSION['login'];			
}else{
	$_SESSION['cont'] = 0;
	$_SESSION['login'] = "";
};
	
?>
<html>
	<head>Inicio</head>
	<body>
		<form method="post" action="sites/login.php">			
			User: <input type="text" name="username" required="true"><br>
			Pass: <input type="password" name="pass" required="true"><br>
			<input type="submit" name="enviar">
		</form>
	</body>
</html>