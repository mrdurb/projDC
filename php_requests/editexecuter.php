<?php
include('db.php');
$id = filter_var(trim($_POST['exidhidden']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['editexecutorname']), FILTER_SANITIZE_STRING);
$position = filter_var(trim($_POST['editselectexecutor']), FILTER_SANITIZE_STRING);
$result = $connection->query("UPDATE `executor` SET `name`='$name',`position`='$position' WHERE `id` = '$id'");
$connection->close();
include('showexecutors.php');
?>