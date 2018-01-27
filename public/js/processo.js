/**
 * Created by Sonia Cabuita on 03-jan-2018.
 */

$(this).ready(function (e) {

    URL='/sicdoc/';

    //efectuar login
    $('.buttonFinish').click(function (e) {
        e.preventDefault();
     //   var dados = $('.form-criar-processo').serialize();
     //   alert(dados);
        $.post($('.form-criar-processo').attr('action'),$('.form-criar-processo').serialize(),function (x) {
            alert(x);
        });
    });
});
