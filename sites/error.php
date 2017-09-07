<?php
	session_start();

	if(isset($_SESSION['login']) && isset($_SESSION['cont'])){
		echo "Consulta a tu administrador, parece que tenemos problemas";
		session_destroy();
	}

	header("location: ../");
?>