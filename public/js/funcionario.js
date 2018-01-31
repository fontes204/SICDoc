/**
 * Created by Sonia Cabuita on 03-jan-2018.
 */

$(this).ready(function (e) {

    URL='/sicdoc/';

    //efectuar criar funcionario
    $('#btn-funcionario').click(function (e) {
        e.preventDefault();

        var dadosFuncionario = $('.form-criar-funcionario').serialize();

        if (dadosFuncionario == null){

        }else {
            $.post($('.form-criar-funcionario').attr('action'), $('.form-criar-funcionario').serialize(), function (x) {

                if (x == 1) {
                    $('.calback-criar-funcionario').modal('show');

                    $('.corpo-modal').html('<div class="alert alert-info fade in m-b-15 text-center">'
                        + '<i class="fa fa-lock m-t-5" style="font-size: large"></i>'
                        + ' As informações foram guardadas com sucesso.</div>');

                    $('.form-criar-funcionario')[0].reset();

                } else {
                    $('.calback-criar-funcionario').modal('show');

                    $('.corpo-modal').html('<div class="alert alert-danger fade in m-b-15 text-center">'
                        + '<i class="fa fa-lock m-t-5" style="font-size: large"></i>'
                        + ' Erro ao guardar informações na Base de Dados.</div>');
                }
            });
        }
    });
});