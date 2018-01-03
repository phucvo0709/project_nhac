$(document).ready(function(){
    $.ajax({url: "models/ajax/ajax_get_them/getAlbum.php",
    success: function(data){
    $("#album").html(data)
    }});
});