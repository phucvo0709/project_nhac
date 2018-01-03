$(document).ready(function() {
    $("#tenCaSi").keyup(function (e) {        
        var tenCaSi = $(this).val();        
        if(tenCaSi.length >= 3){
            $.post('models/ajax/ajax_kiem_tra_trung/xl_them_ca_si.php', {'tenCaSi':tenCaSi}, function(data) {
              $("#casi-result").html(data);
              $("#casi-result").css("color","red");
            });
        }
    });	
});
