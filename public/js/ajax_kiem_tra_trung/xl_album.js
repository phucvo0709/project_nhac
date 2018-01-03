$(document).ready(function() {
    $("#tenAlbum").keyup(function (e) {        
        var tenAlbum = $(this).val();
        if(tenAlbum.length >= 3){
            $.post('models/ajax/ajax_kiem_tra_trung/xl_them_album.php', {'tenAlbum':tenAlbum}, function(data) {
              $("#album-result").html(data);
              $("#album-result").css("color","red");
            });
        }
    });	
});
