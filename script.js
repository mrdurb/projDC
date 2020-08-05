//отмена переход по ссылке
$("#tabs .tab").on("click", "a", function(e){
    e.preventDefault(); 
});
// активация кнопки
$(".nav").find("a").click(function(){   
    $(".nav .active").removeClass("active");
    $(this).addClass("active");
});