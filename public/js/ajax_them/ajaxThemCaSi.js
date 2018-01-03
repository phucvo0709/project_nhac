$(document).ready(function(){
    $("#submit").click(function(){
        var tenCaSi = $('#tenCaSi').val();
        $.post("models/ajax/ajax_them/insertCaSi.php", {tenCaSi:tenCaSi}, function(data){
            if(data){
                $("div#thongBaoThem").css("display","block")
                $("#thongBaoThem").html(data)
            }else{
                $("div#thongBaoThem").css("display","none")
            }
        });
    });
});