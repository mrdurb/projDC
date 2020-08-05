$("document").ready(function(){

    $("#send").click(function(){

        var data = $("#taskform").serialize();
        $.ajax({
            url:'php_requests/addtask.php',
            type: 'POST',
            data: data,
            success: function(data){
            }
        });

    });
});


