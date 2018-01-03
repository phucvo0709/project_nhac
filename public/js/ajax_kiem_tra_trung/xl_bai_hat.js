$(document).ready(function() {
    $("#tenBaiHat").keyup(function (e) {        
        var tenBaiHat = $(this).val();        
        if(tenBaiHat.length >= 4){
            $.post('models/ajax/ajax_kiem_tra_trung/xl_them_bai_hat.php', {'tenBaiHat':tenBaiHat}, function(data) {
              $("#baihat-result").html(data);
              $("#baihat-result").css("color","red");
            });
        }
    });	
});
