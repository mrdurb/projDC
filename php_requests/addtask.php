<?php
include('db.php');
$name = filter_var(trim($_POST['writename']), FILTER_SANITIZE_STRING);
$executor = filter_var(trim($_POST['selectexecutor']), FILTER_SANITIZE_STRING);
$status = filter_var(trim($_POST['selectstatus']), FILTER_SANITIZE_STRING);
$connection->query("INSERT INTO `tasks` (`name`,`executor`,`status`) VALUES ('$name','$executor','$status')");
$connection->close();
?>