$(document).ready(function() {
    $("#email").keyup(function (e) {
        var email = $(this).val();
        console.log(email)
        if(email.length < 4){$("#email-result").html('');return;}
        
        if(email.length >= 4){
            $.post('models/ajax/ajax_kiem_tra_trung/xl_email.php', {'email':email}, function(data) {
              $("#email-result").html(data);
              $('#email-result').css("color", "red");
            });
        }
    });	
});
