var addexecutor_div = document.getElementById("addexecutor");
function main(){
    addexecutor.innerHTML = '<table class="table table-bordered"><thead><tr><th scope="col">id</th><th scope="col">Имя</th><th scope="col">Должность</th><th scope="col">Действия</th></tr></thead><tbody><tr><td>1</td><td>Mark</td><td>Otto</td><th>@mdo</th></tr></tbody></table> <button type="button" class="btn btn-outline-success float-right" onclick="next()">Добавить</button>';
}
function next(){
    addexecutor.innerHTML = '<form><div class="form-group"><div class="col-4 p-0"><div class="input-group mb-2 mr-sm-2"><div class="input-group-prepend"><div class="input-group-text">Имя</div></div><input type="text" class="form-control" id="inlineFormInputGroupUsername2"></div></div></div><div class="form-group"><div class="col-4 p-0"><div class="input-group mb-2 mr-sm-2"><div class="input-group-prepend"><div class="input-group-text">Должность</div></div><input type="text" class="form-control" id="inlineFormInputGroupUsername2"></div></div></div><div class="btn-group-vertical">'+
    '<button type="button" class="btn btn-outline-success" onclick="success()">Сохранить</button><button type="button" class="btn btn-outline-danger" onclick="main()">Отмена</button></div></form>';
}
function success(){
    addexecutor.innerHTML ='<h1>Операция выполнена</h1><p>Исполнитель добавлен</p><button type="button" class="btn btn-outline-primary" onclick="main()">Вернуться на страницу исполнителей</button>';
}