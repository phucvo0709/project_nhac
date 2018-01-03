
$(document).ready(function(){
    $("#search").keyup(function(){
        var tenCaSi = $(this).val();
        if(tenCaSi.length < 4){
            $("div#result-tenCaSi").css("display","none")
            $("#result-tenCaSi").html('');
            return;
        }
        if(tenCaSi.length >= 4){
            $.post("models/ajax/ajax_tim_kiem/getTenCaSiAjax.php", {tenCaSi:tenCaSi}, function(data){
                    if(tenCaSi != ""){
                        $("div#result-tenCaSi").css("display","block")
                        $("#result-tenCaSi").html(data)
                    }else{
                        $("div#result-tenCaSi").css("display","none")
                    }
            });
        }
    });
});
