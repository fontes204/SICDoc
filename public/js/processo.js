/**
 * Created by Sonia Cabuita on 03-jan-2018.
 */

$(this).ready(function (e) {

    URL='/sicdoc/';
    var inputFiles ='';
    $('#campo-empresa').hide();
    $('#casamento').hide();
    $('.input-empresa-txt').attr("type", "hidden");

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
            $.post($('.form-criar-processo').attr('action'), dadosProcesso, function (x) {
                if (x == 1) {
                    $('.callback-criar-processo').modal('show');

                    $('.corpo-modal').html('<div class="alert alert-info fade in m-b-15 text-center">'
                        + '<i class="fa fa-lock m-t-5" style="font-size: large"></i>'
                        + ' O processo foi  guardado com sucesso.<br/> '
                        + 'Clique em "Imprimir" para gerar o comprovativo.</div>');
                    $('#btn-imprimir').show();
                    $('.form-criar-processo')[0].reset();

                } else {
                    $('#btn-imprimir').hide();
                    $('.callback-criar-processo').modal('show');

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

   $('.gender-genero').click(function () {
       var m = '<option value="Solteiro">Solteiro</option>\n'+'<option value="Casado">Casado</option>\n'+'<option value="Divorciado">Divorciado</option>\n'+'<option value="Viúvo">Viúvo</option>';
       var f = '<option value="Solteira">Solteira</option>\n'+'<option value="Casada">Casada</option>\n'+'<option value="Divorciada">Divorciada</option>\n'+'<option value="Viúva">Viúva</option>';

       if($(this).attr('val')=='f'){
           $('#id-estado-civil').html(f);
           $('#lbl-n-bi').html('Número do B.I do Esposo');
           $('#lbl-carr-bi').html('Carregar B.I do Esposo');
           $('#lbl-nome-esposa').html('Nome do Esposo');
       } else {
           $('#id-estado-civil').html(m);
           $('#lbl-n-bi').html('Número do B.I da Esposa');
           $('#lbl-carr-bi').html('Carregar B.I da Esposa');
           $('#lbl-nome-esposa').html('Nome da Esposa');
       }
   });

   $('#id-estado-civil').change(function () {
       a = $(this).val();
       if(a == 'Casado' || a == 'Casada') {
           $('#casamento').show();
       }else {
            $('#casamento').hide();
       }
   });
   
   $('.doc-fase').hover(function () {
       $('#checkBox').attr('type','hidden');
   }, function () {
       $('#checkBox').attr('type','checkbox');
   });

   $('.doc-fase').click(function () {
      $('#tipo-doc-proc').val($(this).attr('tipo'));
   });

   $('.btn-ver').click(function () {
      $('#img-modal-ver').attr('src',$(this).attr('dados'));
   });

   $('.target-dir').click(function () {
      $('#tipo-doc').val($(this).attr('tipo'));
   });

    $( "#btn-imprimir" ).click(function() {
        $("#corpo-imprimi").printObject({
            header: '<img src="/sicdoc/public/img/Polvia1.jpg" /><h2> POLVIA </h2>',
            header_style: 'color: green;',
            footer: '',
            footer_style: "color: blue; font-size: 14px;"
        });
    });
});
