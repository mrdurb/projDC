<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projDC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<body>
    <ul class="nav nav-tabs">
        <li class="nav-item" id="active2">
            <a class="nav-link" href="" id="link" onclick="return false;">Задачи</a>
        </li>
        <li class="nav-item" id="active">
            <a class="nav-link" href="" id="link" onclick="return false;">Исполнители</a>
        </li>
    </ul>
    <script>
            $("#tabs").on("click", ".tab", function(){
                $("#tabs .tab").removeClass("active"); //удаляем класс во всех вкладках
                $(this).addClass("active"); //добавляем класс текущей (нажатой)
            });
    </script>
    





    <script src="script.js"></script>
</body>
</html>