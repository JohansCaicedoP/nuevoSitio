<?php

	session_start();

	//$_SESSION['usuario'] = $_REQUEST['username'];

	$enlace = mysqli_connect("localhost", "johans", "123", "admin");
	
	if (!$enlace) {
    	echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    	echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    	echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    	exit;
	}else{		
		switch ($_REQUEST['peticion']) {
			case 'insert':
			header("Location: insert.php");	
			break;
		case 'find':
			header("Location: find.php");	
			break;
		case 'update':
			header("Location: update.php");	
			break;
		case 'delete':
			header("Location: delete.php");	
			break;
		default:
			echo 'ERROR';
			break;
		}

	}
?>
