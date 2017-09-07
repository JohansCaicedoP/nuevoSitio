<?php
	include("config.php");
	session_start();

  $error = '';


	if($_SERVER["REQUEST_METHOD"] == "POST") {


      // username and password sent from form 
	    $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']);	

      $sql = "SELECT id FROM user WHERE nombre = '$myusername' and clave = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

       $count = mysqli_num_rows($result);

        if($count == 1) {         
         $_SESSION['login'] = $myusername;          
         header("location: demos/index.php");
      	}else {
         	echo $error = "Your Login Name or Password is invalid";
          $_SESSION['login'] = $error;
          header("location: ../index.php");
      	}
	}
?>