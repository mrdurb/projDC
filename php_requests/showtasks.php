<?php
include('db.php');
$result = $connection->query("SELECT * FROM `tasks`");
$connection->close();
while(($tasks= $result->fetch_assoc()) != FALSE){
 echo'
    <tr>
        <td>'.$tasks['id'].'</td>
        <td>'.$tasks['name'].'</td>
        <td>'.$tasks['executor'].'</td>
        <td>'.$tasks['status'].'</td>
        <td><button type="button" class="btn btn-light btn-sm">Удалить</button><button type="button" class="btn btn-light btn-sm">Редактировать</button></td>
    </tr>';
}
?>