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
            <td><button type="button" id="delete" class="btn btn-light btn-sm deleteRowExecutors" onclick = executerdelete('.$executor['id'].')>Удалить</button><button type="button" class="btn btn-light btn-sm" onclick="editexecutorfunc(\''.$executor['id'].'\',\''.$executor['name'].'\',\''.$executor['position'].'\')">Редактировать</button></td>
        </tr>';
}
?>