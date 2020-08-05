<?php
 $connection = new mysqli('localhost','root','','projdc_db');
 if ($connection == false){
 	echo "Не удалось подключиться";
 	echo mysqli_connect_error();
 	exit();
 };
?>