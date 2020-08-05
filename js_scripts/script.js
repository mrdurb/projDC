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
function modalclose(){
    
};

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

$("#comeback").click(function(){

    var data = $("#taskform").serialize();
    $.ajax({
        url:'php_requests/reloadexecutorform.php',
        type: 'POST',
        data: data,
        success: function(data){
            $('#selectexecutor').empty();
            $('#selectexecutor').html(data);
            
        }
    });

});

function clear_forms(){
$('form').trigger('reset');
};

function showaddexecuter() {
    document.getElementById('executorform').style.display = 'block';
    document.getElementById('complite').style.display = 'none'; 
    document.getElementById('addexecutor').style.display = 'none'; 
}
function hideaddexecuter() {
    clear_forms();
    document.getElementById('executorform').style.display = 'none';
    document.getElementById('complite').style.display = 'none'; 
    document.getElementById('addexecutor').style.display = 'block'; 
}

