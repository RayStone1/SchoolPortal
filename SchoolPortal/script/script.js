$(document).ready(function(){
    // open popup
    $('#open-sign').click(function(){
        $('#sign-popup').addClass('active');
    })
    $('#close__sign').click(function(){
        $('#sign-popup').removeClass('active');
    })
    //login
    $('#log-form').submit(function(e){
        e.preventDefault();
        var login =$('#sign-login').val();
        var pass =$('#sign-pass').val();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: {
                login:login,
                pass:pass
            }
        }).done(function(res){
            if(res=='error'){
                $('.errorlog').html('Невырный логин или пароль');
            }
            else if(res=='done'){
                location.reload();
            }  
        })
    })
})