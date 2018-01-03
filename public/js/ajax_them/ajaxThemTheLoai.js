$(document).ready(function(){
    $("#submit").click(function(){
        var tenTheLoai = $('#tenTheLoai').val();
        $.post("models/ajax/ajax_them/insertTheLoai.php", {tenTheLoai:tenTheLoai}, function(data){
            if(data){
                $("div#themTheLoai").css("display","block")
                $("#themTheLoai").html(data)
            }else{
                $("div#themTheLoai").css("display","none")
            }
        });
    });
});