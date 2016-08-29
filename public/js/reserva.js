$(document).ready(function(){

    $("#btn_acao").on( "click", function(){
      var id = $("#em_edicao").val();
      agenda(id);
      start();
      var data_agora = $('#data_agora').val();
      var dth = data_agora.split("-");
      atualiza_data(dth[0],dth[1],dth[2]);
    });

    $("#os").keyup(function(e) { if(e.keyCode == 13) {var id = $("#em_edicao").val();agenda(id);start();}});

    $("#ModalDevolver").on('hidden.bs.modal',function (){
            var data_agora = $('#data_agora').val();
            var dth        = data_agora.split("-");
            atualiza_data(dth[0],dth[1],dth[2]);
           // $("#modal_devolver_conteudo").html("<img alt='processando' src='img/loading_sistel.gif'/>");
                                             });

    /* desabilitando o seletor de reserva */
    //var id = $("#em_edicao").val();
    //$("#reserva-"+id).removeClass("ui-rangeSlider-bar-reservado").addClass("ui-rangeSlider-bar");

    $(function()
    { /* define a new language named "custom" */
    $.dateRangePickerLanguages['custom'] = {'selected': 'Reserva de:','days': 'Dias','apply': 'Fechar','week-1' : 'S','week-2' : 'T','week-3' : 'Q','week-4' : 'Q','week-5' : 'S','week-6' : 'S','week-7' : 'D','month-name': ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],'shortcuts' : 'Atalho','past': 'Past','7days' : '7days','14days' : '14days','30days' : '30days','previous' : 'Previous','prev-week' : 'Week','prev-month' : 'Month','prev-quarter' : 'Quarter','prev-year' : 'Year','less-than' : 'Date range should longer than %d days','more-than' : 'Date range should less than %d days','default-more' : 'Please select a date range longer than %d days','default-less' : 'Please select a date range less than %d days','default-range' : 'Please select a date range between %d and %d days','default-default': 'This is costom language'};
    });

    $('#new_date').on( "click", function(evt){evt.stopPropagation(); console.log('acionando o stop propagation'); /* $('#date-range0').data('dateRangePicker').open(); */ });

});

function btn_acao_atualizacao()
{
  // $('#ModalDevolver').modal('hide');
  var id = $("#em_edicao").val();
  agenda(id);
  start();
  var data_agora = $('#data_agora').val();
  var dth = data_agora.split("-");
  atualiza_data(dth[0],dth[1],dth[2]);
 }

function devolver_cancelar(user_action){
  var data_reserva_ini  = $('#data_reserva_ini_reedicao').val();
  var data_reserva_fim  = $('#data_reserva_ini_reedicao').val();
  var data_devolucao    = $('#data_agora').val();
  var id_veiculo        = $('#em_edicao').val();
  var id_usuario        = $('#id_usuario').val();
  var km_ini            = $('#km_ini_devolver').val();
  var km_fim            = $('#km_fim_devolver').val();
  var os                = $('#os').val();
  var id                =  user_action.substr(9,4);
  var data_agora        = $('#data_agora').val();
  var dth               =  data_agora.split("-");

$.ajaxSetup({
 headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});

if (user_action.substr(0,8).trim() == "cancelar"){
  var data_post = "_method=delete";
}else{
  var data_post = "id="+id+"&data_devolucao="+data_devolucao+"&data_reserva_ini="+data_reserva_ini+"&data_reserva_fim="+data_reserva_fim+"&id_veiculo="+id_veiculo+"&id_usuario="+id_usuario+"&km_ini="+km_ini+"&km_fim="+km_fim+"&os="+os;
}

 $.ajax({type:"POST",
          url:"/api/v1/agenda/"+id,
          data:data_post,
          success:function(data){
          $('#a').attr("src","sound3.wav");
            atualiza_data(dth[0],dth[1],dth[2]);
            start();
            $('#a').attr("src","alarm_car.wav");
            $("#reserva-"+id_veiculo).removeClass("ui-rangeSlider-bar-reservado").addClass("ui-rangeSlider-bar");
            $("#reserva-"+id_veiculo).html("<i class=\"fa fa-bolt fa-lg\" style='text-align:center;padding:15px;color:#FFF55C;'></i>");
            $('#ModalDevolver').modal('hide');
          }
        });

$( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
        $('#a').attr("src","sound2.wav");
        start();
        $('#a').attr("src","alarm_car.wav");
        $("#info_result").html("<p align=center>Agenda não registrada... <img alt='processando' src='img/loading_sistel.gif'/></p>");
        $("#info_result2").html("Verifique a internet... <img alt='processando' src='img/loading_sistel.gif'/>");
});

} // fim da função devolver_cancelar
