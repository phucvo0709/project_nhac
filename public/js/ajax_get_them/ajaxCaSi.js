$(document).ready(function(){
    $.ajax({url: "models/ajax/ajax_get_them/getCaSi.php",
    success: function(data){
    $("#caSi").html(data)
    }});
});