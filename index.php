<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projDC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <ul class="nav nav-tabs ">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tasks">Задачи</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#executor">Исполнители</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane  show active" id="tasks">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Название</th>
                            <th scope="col">Исполнитель</th>
                            <th scope="col">Статус</th>
                            <th scope="col">Действия</th>
                        </tr>
                    </thead>
                    <tbody id="tabletasks">
                            <?php
                                include('php_requests/showtasks.php');
                            ?>
                    </tbody>
                </table>
                <button type="button" class="btn btn-outline-success float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Добавить</button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <form id="taskform" method="post"> 
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавление задачи</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <div class="form-group">
                                    <div class="col-8 p-0">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Название</div>
                                            </div>
                                            <input type="text" class="form-control" id="writename" name="writename">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-8 p-0">
                                        <div class="input-group mb-2 mr-sm-2 ">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Исполнитель</div>
                                            </div>
                                            <select class="custom-select " id="selectexecutor" name="selectexecutor">
                                                <option>One</option>
                                                <option>Two</option>
                                                <option>Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-8 p-0">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Статус</div>
                                            </div>
                                            <select class="custom-select " id="selectstatus" name="selectstatus">
                                                <option>Открыта</option>
                                                <option>В работе</option>
                                                <option>Завершена</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-start">
                            <div class="btn-group-vertical">
                                <input type="button" class="btn btn-outline-success" id="send" value="Сохранить" data-dismiss="modal"></input>
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Отмена</button>
                            </div>
                        </div>
                    </form>    
                    </div>
                </div>
            </div>
            <div class="tab-pane " id="executor">
                <div id="addexecutor">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Должность</th>
                                <th scope="col">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <th>@mdo</th>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-outline-success float-right" onclick="next()">Добавить</button>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous" ></script>
    <script src="js_scripts/script.js"></script>
    <script src="js_scripts/ajax_requests.js"></script>
</body>
</html>