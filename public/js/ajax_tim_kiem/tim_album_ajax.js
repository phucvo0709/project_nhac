
$(document).ready(function(){
    $("#search").keyup(function(){
        var tenAlbum = $(this).val();
        if(tenAlbum.length < 4){
            $("div#result-album").css("display","none")
            $("#result-album").html('');
            return;
        }
        if(tenAlbum.length >= 4){
        $.post("models/ajax/ajax_tim_kiem/getTenAlbumAjax.php", {tenAlbum:tenAlbum}, function(data){
                if(tenAlbum != ""){
                    $("div#result-album").css("display","block")
                    $("#result-album").html(data)
                }else{
                    $("div#result-album").css("display","none")
                }
        });
    }
    });
});
