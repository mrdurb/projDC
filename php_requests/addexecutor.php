<?php
include('db.php');
$name = filter_var(trim($_POST['executorname']), FILTER_SANITIZE_STRING);
$position = filter_var(trim($_POST['selectexecutor']), FILTER_SANITIZE_STRING);
$connection->query("INSERT INTO `executor` (`name`,`position`) VALUES ('$name','$position')");
$connection->close();

include('showexecutors.php');
?>