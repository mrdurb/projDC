<?php
include('db.php');
$id = filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);
$connection->query("DELETE FROM `tasks` WHERE `tasks`.`id` = '$id'");
$connection->close();
?>