<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'johans');
   define('DB_PASSWORD', '123');
   define('DB_DATABASE', 'admin');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,	DB_DATABASE);
?>