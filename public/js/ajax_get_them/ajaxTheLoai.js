$(document).ready(function(){
    $.ajax({url: "models/ajax/ajax_get_them/getTheLoai.php",
    success: function(data){
    $("#theLoai").html(data)
    }});
});