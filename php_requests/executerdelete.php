<?php
include('db.php');
$id = filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);
$connection->query("DELETE FROM `executor` WHERE `executor`.`id` = '$id'");
$connection->close();
include('showexecutors.php');
?>