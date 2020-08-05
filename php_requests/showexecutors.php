<?php
include('db.php');
$result = $connection->query("SELECT * FROM `executor`");
$connection->close();
while(($executor= $result->fetch_assoc()) != FALSE){
    echo'
        <tr>
            <td>'.$executor['id'].'</td>
            <td>'.$executor['name'].'</td>
            <td>'.$executor['position'].'</td>
            <td><button type="button" class="btn btn-light btn-sm">Удалить</button><button type="button" class="btn btn-light btn-sm">Редактировать</button></td>
        </tr>';
}
?>