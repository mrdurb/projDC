<?php
include('db.php');
$result = $connection->query("SELECT * FROM `executor`");
$connection->close();
while(($executor= $result->fetch_assoc()) != FALSE){
echo'<option>'.$executor['name'].'</option>';
}
?>