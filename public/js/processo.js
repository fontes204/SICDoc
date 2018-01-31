/**
 * Created by Sonia Cabuita on 03-jan-2018.
 */

$(this).ready(function (e) {

    URL='/sicdoc/';

    //efectuar login
    $('.buttonFinish').click(function (e) {
        e.preventDefault();
        var dadosProcesso = $('.form-criar-processo').serialize();

        if (dadosProcesso == null){

        }else {
            $.post($('.form-criar-processo').attr('action'), $('.form-criar-processo').serialize(), function (x) {
                alert(x);
                if (x == 1) {
                    $('.calback-criar-processo').modal('show');

                    $('.corpo-modal').html('<div class="alert alert-info fade in m-b-15 text-center">'
                        + '<i class="fa fa-lock m-t-5" style="font-size: large"></i>'
                        + ' O processo foi  guardado com sucesso.</div>');

                    $('.form-criar-processo')[0].reset();

                } else {
                    $('.calback-criar-processo').modal('show');

                    $('.corpo-modal').html('<div class="alert alert-danger fade in m-b-15 text-center">'
                        + '<i class="fa fa-lock m-t-5" style="font-size: large"></i>'
                        + ' Erro ao guardar o processo na Base de Dados.</div>');
                }
            });
        }
    });
});
