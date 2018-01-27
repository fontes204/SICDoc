
$(document).ready(function () {
    URL='/sicdoc/';

    //efectuar login
    $('.frm-login').submit(function (e) {
        e.preventDefault();
        $.post($(this).attr('action'),$(this).serialize(),function (x) {
            switch (x)
            {
                case "GRC":
                    window.location=URL+'gerencia';
                    break;
                case 'SCT':
                    window.location=URL+'secretaria';
                    break;
                case 'Tecnico':
                    window.location=URL+'tecnico';
                    break;
                case '1975':
                    window.location=URL+'sysadmin';
                    break;
                case '0':
                    $('.erro-login').html('Nome de utilizador ou senha está incorrecto');
                    break;
                case '-1':
                    $('#id_bootstrap').attr("href","/sicdoc/public/bootstrap/css/bootstrap.css");
                    $('.calback-login-front-end').modal('show');
                    break;
            }
        });
    });

    //limpar os campos do formulário de login
    $('.txt-clear').keypress(function () {
        $('.erro-login').html('&nbsp;');
    });

    $('#id_fechar_modal').click(function () {
        $('#id_bootstrap').attr("href","sicdoc/1public/bootstrap/css/bootstrap.css");
    });
});