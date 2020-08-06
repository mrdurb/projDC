<?php
include('db.php');
$id = filter_var(trim($_POST['idhidden']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['taskname']), FILTER_SANITIZE_STRING);
$executor = filter_var(trim($_POST['editexecutor']), FILTER_SANITIZE_STRING);
$status = filter_var(trim($_POST['editstatus']), FILTER_SANITIZE_STRING);
$result = $connection->query("UPDATE `tasks` SET `name`='$name',`executor`='$executor',`status`='$status' WHERE `id` = '$id'");
$connection->close();
include('showtasks.php');
?>