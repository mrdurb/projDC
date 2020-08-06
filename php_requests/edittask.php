<?php
include('db.php');
$id = $_POST['id'];
$result = $connection->query("SELECT * FROM `tasks` WHERE `id` = '$id'");
$connection->close();
$taskedit = $result->fetch_assoc();
print_r($_POST['id']);
    echo'<form id="taskformedit"  method="post">
    <div class="form-group">
        <div class="col-4 p-0">
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Название</div>
                </div>
                <input type="text" class="form-control" id="taskname" name="taskname" required pattern="^[А-Яа-яЁё]+$" value="'.$taskedit['name'].'">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-4 p-0">
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Исполнитель</div>
                </div>
                <select class="custom-select" id="selectexecutor" name="selectexecutor" required>
                    <option selected>'.$taskedit['executor'].'</option>';
                        include('php_requests/reloadexecutors.php');
                echo'</select>
            </div>
        </div>
    </div>
    <div class="form-group">
                <div class="col-4 p-0">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Статус</div>
                        </div>
                        <select class="custom-select " id="selectstatus" name="selectstatus">
                            <option selected>'.$taskedit['status'].'</option>
                            <option>Открыта</option>
                            <option>В работе</option>
                            <option>Завершена</option>
                        </select>
                    </div>
                </div>
            </div>
</form>';
echo'<div class="btn-group-vertical">
<input type="submit" form="taskformedit" class="btn btn-outline-success" id="sendtask" value="Сохранить"></input>
<button type="button" class="btn btn-outline-danger" onclick="edithide()">Отмена</button>
</div>';
?>
