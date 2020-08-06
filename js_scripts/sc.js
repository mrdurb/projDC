$(document).ready(function(){
    $("#taskform").submit(function(e){
        e.preventDefault(e);
        var data = $("#taskform").serialize();
        $.ajax({
            url:'php_requests/addtask.php',
            type: 'POST',
            data: data,
            success: function(data){
                $('#exampleModal').modal('hide');  
                $('#tabletasks').empty();
                $('#tabletasks').html(data);
            }
        });
        
    });
});

$("#executorform").submit(function(e){
    e.preventDefault(e);
    var data = $("#executorform").serialize();
    $.ajax({
        url:'php_requests/addexecutor.php',
        type: 'POST',
        data: data,
        success: function(data){
            $('#executorstable').empty();
            $('#executorstable').html(data);
            document.getElementById('executorform').style.display = 'none';
            document.getElementById('complite').style.display = 'block'; 
            document.getElementById('addexecutor').style.display = 'none'; 
        }
    });

});

$("#reloadexecutors").click(function(){

    var data = $("#taskform").serialize();
    $.ajax({
        url:'php_requests/reloadexecutorform.php',
        type: 'POST',
        data: data,
        success: function(data){
            $('#selecttask').empty();
            $('#selecttask').html(data);
        }
    });

});

function executerdelete(executorid){
    
    $.ajax({
        url:'php_requests/executerdelete.php',
        type: 'POST',
        data: {id: executorid},
        success: function(){  
        }
    });

};

function taskdelete(taskid){
    
    $.ajax({
        url:'php_requests/taskdelete.php',
        type: 'POST',
        data: {id: taskid},
        success: function(){
        }
    });

};
function edittaskfunc(id, name,executor,status){
    hidetasks();
    alert('Дарова');
    $('#idhidden').val(id);
    $('#taskname').val(name);
    $('#editexecutor').val(executor);
    $('#editstatus').val(status);
    var data = $("#taskform").serialize();
    $.ajax({
        url:'php_requests/reloadexecutorform.php',
        type: 'POST',
        data: data,
        success: function(data){
            $('#editexecutor').empty();
            $('#editexecutor').html(data);
        }
    });
};

$("#taskformedit").submit(function(e){
    e.preventDefault(e);
    var data = $("#taskformedit").serialize();
    $.ajax({
        url:'php_requests/edittask.php',
        type: 'POST',
        data: data,
        success: function(data){
            $('#tabletasks').empty();
            $('#tabletasks').html(data);
            document.getElementById('showtasks').style.display = 'none';
            document.getElementById('editcomplite').style.display = 'block'; 
            document.getElementById('edittasks').style.display = 'none'; 
        }
    });

});

function editexecutorfunc(id, name, position){
    showeditexecuter();
    $('#exidhidden').val(id);
    $('#editexecutorname').val(name);
    $('#editselectexecutor').val(position);
};

$("#executorformedit").submit(function(e){
    e.preventDefault(e);
    var data = $("#executorformedit").serialize();
    $.ajax({
        url:'php_requests/editexecuter.php',
        type: 'POST',
        data: data,
        success: function(data){
            $('#executorstable').empty();
            $('#executorstable').html(data);
            document.getElementById('editexecutorcomplite').style.display = 'block';
            document.getElementById('executorform').style.display = 'none';
            document.getElementById('complite').style.display = 'none'; 
            document.getElementById('addexecutor').style.display = 'none';
            document.getElementById('editexecutorform').style.display = 'none';  
        }
    });

});

myTableExecutors.addEventListener('click', function(evt){
    if(evt.target.closest('.deleteRowExecutors')){
        evt.target.closest('tr').remove()
    }
})
myTableTasks.addEventListener('click', function(evt){
    if(evt.target.closest('.deleteRowTask')){
        evt.target.closest('tr').remove()
    }
})

function clear_forms(){
    $('form').trigger('reset');
};

function showaddexecuter() {
    document.getElementById('executorform').style.display = 'block';
    document.getElementById('complite').style.display = 'none'; 
    document.getElementById('addexecutor').style.display = 'none';
    document.getElementById('editexecutorform').style.display = 'none';  
}
function hideaddexecuter() {
    clear_forms();
    document.getElementById('executorform').style.display = 'none';
    document.getElementById('complite').style.display = 'none'; 
    document.getElementById('addexecutor').style.display = 'block';
    document.getElementById('editexecutorform').style.display = 'none';
    document.getElementById('editexecutorcomplite').style.display = 'none';  
}
function showeditexecuter() {
    document.getElementById('executorform').style.display = 'none';
    document.getElementById('complite').style.display = 'none'; 
    document.getElementById('addexecutor').style.display = 'none';
    document.getElementById('editexecutorform').style.display = 'block';  
}
function hideeditexecuter() {
    document.getElementById('executorform').style.display = 'block';
    document.getElementById('complite').style.display = 'none'; 
    document.getElementById('addexecutor').style.display = 'none';
    document.getElementById('editexecutorform').style.display = 'none';  
}
function hidetasks() {
    document.getElementById('showtasks').style.display = 'none';
    document.getElementById('editcomplite').style.display = 'none'; 
    document.getElementById('edittasks').style.display = 'block'; 
}
function edithide() {
    clear_forms();
    document.getElementById('showtasks').style.display = 'block';
    document.getElementById('editcomplite').style.display = 'none'; 
    document.getElementById('edittasks').style.display = 'none'; 
}
