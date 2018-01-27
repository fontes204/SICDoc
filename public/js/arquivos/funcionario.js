/**
 * Created by Sonia Cabuita on 03-jan-2018.
 */

$(this).ready(function (e) {

    URL='/sicdoc/';

    //efectuar login
    $('.buttonFinish').click(function (e) {
        e.preventDefault();
           var dados = $('.form-criar-funcionario').serialize();
           alert(dados);
      /*  $.post($('.form-criar-funcionario').attr('action'),$('.form-criar-funcionario').serialize(),function (x) {
            alert(x);
        });*/
    });
});