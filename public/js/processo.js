/**
 * Created by Sonia Cabuita on 03-jan-2018.
 */

$(this).ready(function (e) {

    URL='/sicdoc/';
    var inputFiles ='';
    $('#campo-empresa').hide();
    $('.input-empresa-txt').attr("type", "hidden");

    $('input:file').change(function() {
        var arq = this.files[0];

        inputFiles += '&'+this.name+'-1='+arq.name;

    });

    //criar processo
    $('.buttonFinish').click(function (e) {
        e.preventDefault();
        var dadosProcesso = $('.form-criar-processo').serialize();

        if($('#check-empresa').is(':checked')) {
            dadosProcesso += '&check-btn=1';
        }else {
            dadosProcesso += '&check-btn=0';
        }

        if (dadosProcesso == null){

        }else {
            dadosProcesso +=inputFiles;
            $.post($('.form-criar-processo').attr('action'), dadosProcesso, function (x) {
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
                        + ' Erro ao guardar o processo na Base de Dados.<br />'+x+'</div>');
                }
            });
        }
    });


   $('#check-empresa').click(function () {
       if($('#check-empresa').is(':checked')){
           $('#campo-pessoa').hide();
           $('.input-pessoa-txt').attr("type", "hidden");

           $('.input-empresa-txt').attr("type", "text");
           $('#campo-empresa').show();
       }else {
           $('#campo-empresa').hide();
           $('.input-empresa-txt').attr("type", "hidden");

           $('.input-pessoa-txt').attr("type", "text");
           $('#campo-pessoa').show();
        }
   });

});
