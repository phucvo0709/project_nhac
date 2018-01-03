
$(document).ready(function(){
    $("#search").keyup(function(){
        var tenBaiHat = $(this).val();
        if(tenBaiHat.length < 4){
            $("div#result-tenBaihat").css("display","none")
            $("#result-tenBaihat").html('');
            return;
        }
        if(tenBaiHat.length >= 4){
            $.post("models/ajax/ajax_tim_kiem/getTenBaiHatAjax.php", {tenBaiHat:tenBaiHat}, function(data){
                    if(tenBaiHat != ""){
                        $("div#result-tenBaihat").css("display","block")
                        $("#result-tenBaihat").html(data)
                    }else{
                        $("div#result-tenBaihat").css("display","none")
                    }
            });
        }
    });
});
