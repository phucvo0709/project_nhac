$(document).ready(function() {
    $("#tai_khoan").keyup(function (e) {
    
        $(this).val($(this).val().replace(/\s/g, ''));
        
        var tai_khoan = $(this).val();
        if(tai_khoan.length < 4){$("#user-result").html('');return;}
        
        if(tai_khoan.length >= 4){
            $.post('models/ajax/ajax_kiem_tra_trung/xl_tai_khoan.php', {'tai_khoan':tai_khoan}, function(data) {
              $("#user-result").html(data);
              $('#user-result').css("color", "red");
            });
        }
    });	
});
