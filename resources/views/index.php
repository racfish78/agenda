  <html>
  <head>
    <meta charset="utf-8"/>
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <title>Reserva de Veículos 11</title>
    <link rel="stylesheet" href="css/iThing.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/daterangepicker.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css">
@viewport {    content="width=device-width, initial-scale=1.0"; }
.img-pic { max-width:30px !important;vertical-align: super !important;}

.reservado     { color: #fff; background: #79002C;
		transition: background 1s linear;
    		-webkit-transition: background 1s linear;
    		-moz-transition: background 1s linear;
}
.reservado_meu {
color: #fff; background: #f00;
transition: background 1s linear;
 -webkit-transition: background 1s linear;
 -moz-transition: background 1s linear;
}


.entregue{
color: #fff; background: #f4;
transition: background 1s linear;
 -webkit-transition: background 1s linear;
 -moz-transition: background 1s linear;
}


.blocoo{ border:none;display:inline; }
.dirr  {   float: right; margin:0; }
.sair {  padding-top: 15px; }
.esqq  {   float: left; width: 95%;}
.variacao { opacity: 0.1; }

.info2 {
text-align:center;
line-height:2.0em;
width:100%;
display:block;
background: #f2f2f2;
transition: background 1s linear;
 -webkit-transition: background 1s linear;
 -moz-transition: background 1s linear;
}

.btn-style  {
	z-index:1;
	border : solid 1px #74ccc0;
	-webkit-box-shadow : 0px 0px 2px rgba(0,0,0,1.0);
	-moz-box-shadow : 0px 0px 2px rgba(0,0,0,1.0);
	box-shadow : 0px 0px 2px rgba(0,0,0,1.0);
	font-size : 12px;
	color : #696869;
	padding :  10px 12px;
	background : #ffffff;
	background : -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(49%,#f1f1f1), color-stop(51%,#e1e1e1), color-stop(100%,#f6f6f6));
	background : -moz-linear-gradient(top, #ffffff 0%, #f1f1f1 49%, #e1e1e1 51%, #f6f6f6 100%);
	background : -webkit-linear-gradient(top, #ffffff 0%, #f1f1f1 49%, #e1e1e1 51%, #f6f6f6 100%);
	background : -o-linear-gradient(top, #ffffff 0%, #f1f1f1 49%, #e1e1e1 51%, #f6f6f6 100%);
	background : -ms-linear-gradient(top, #ffffff 0%, #f1f1f1 49%, #e1e1e1 51%, #f6f6f6 100%);
	background : linear-gradient(top, #ffffff 0%, #f1f1f1 49%, #e1e1e1 51%, #f6f6f6 100%);
	filter : progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0 );
}

.btn-style :before{
  position:absolute;
  top:0;
}

.btn-style :hover{
	border : solid 1px #74ccc0;
	border-radius : 3px;
	moz-border-radius : 3px;
	-webkit-box-shadow : 0px 0px 2px rgba(0,0,0,1.0);
	-moz-box-shadow : 0px 0px 2px rgba(0,0,0,1.0);
	box-shadow : 0px 0px 2px rgba(0,0,0,1.0);
	font-size : 12px;
	color : #696869;
	padding :  10px 12px;
	background : #ffffff;
	background : -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(49%,#f1f1f1), color-stop(51%,#e1e1e1), color-stop(100%,#f6f6f6));
	background : -moz-linear-gradient(top, #ffffff 0%, #f1f1f1 49%, #e1e1e1 51%, #f6f6f6 100%);
	background : -webkit-linear-gradient(top, #ffffff 0%, #f1f1f1 49%, #e1e1e1 51%, #f6f6f6 100%);
	background : -o-linear-gradient(top, #ffffff 0%, #f1f1f1 49%, #e1e1e1 51%, #f6f6f6 100%);
	background : -ms-linear-gradient(top, #ffffff 0%, #f1f1f1 49%, #e1e1e1 51%, #f6f6f6 100%);
	background : linear-gradient(top, #ffffff 0%, #f1f1f1 49%, #e1e1e1 51%, #f6f6f6 100%);
	filter : progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0 );
}


.span-btn {
    position: relative;
    padding-right: 2px;
    width: 30px;
    right: !important 15px;
    font-size:18px;
}

.span-btn:after {
    color: #8fce58;
    font-family: FontAwesome;
    content: "\f0e7";
    font-size: 14px;
    position: absolute;
    right: 10px;
    top: 10px;
    pointer-events: none;
}

  .cal_style{
  	position: fixed;
  	top: 0;
  	width:100%;
  	z-index:1;
  }

    .Table
    {
        display: table;
        width: 100%;
    	color: #6e;
    	position: relative;
    	top:63px;
    }
    .Title
    {
        display: table-caption;
        text-align: center;
        font-weight: bold;
        font-size: larger;
    }
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: left;
    }
    .Row
    {
        display: table-row;
    }

    .Cell
    {
        display: table-cell;
        padding: 0px;
        width: 1%;
    }

    .Cell_chart
    {
	z-index: -1;
        display: table-cell;
        padding-left: 0px;
        padding-right: 0px;
        width: 97.6666%;
    }

    .Cell_btn
    {
        display: table-cell;
        float: left;
        padding: 0px;
    }

.white {
background-color:#f2f2f2;
}

</style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
  <script src="lib/jquery.mousewheel.min.js"></script>
  <script src="jQAllRangeSliders-withRuler-min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="moment.min.js"></script>
  <script src="jquery.daterangepicker.js"></script>

<link rel=stylesheet href="calendarpicker/jquery.calendarPicker.css" type="text/css" media="screen">
<script type="text/javascript" src="calendarpicker/jquery.calendarPicker.js"></script>
<script type="text/javascript">
$(document).ready(function(){

 $("#btn_acao").click(function(){var id = $("#em_edicao").val();agenda(id);start();});
 $('#os').keyup(function(e) { if(e.keyCode == 13) {var id = $("#em_edicao").val(); agenda(id);start();}});

$(function()
{
	/* define a new language named "custom" */
$.dateRangePickerLanguages['custom'] =
	{
		'selected': 'Reserva de:',
		'days': 'Dias',
		'apply': 'Fechar',
		'week-1' : 'S',
		'week-2' : 'T',
		'week-3' : 'Q',
		'week-4' : 'Q',
		'week-5' : 'S',
		'week-6' : 'S',
		'week-7' : 'D',
		'month-name': ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		'shortcuts' : 'Atalho',
		'past': 'Past',
		'7days' : '7days',
		'14days' : '14days',
		'30days' : '30days',
		'previous' : 'Previous',
		'prev-week' : 'Week',
		'prev-month' : 'Month',
		'prev-quarter' : 'Quarter',
		'prev-year' : 'Year',
		'less-than' : 'Date range should longer than %d days',
		'more-than' : 'Date range should less than %d days',
		'default-more' : 'Please select a date range longer than %d days',
		'default-less' : 'Please select a date range less than %d days',
		'default-range' : 'Please select a date range between %d and %d days',
		'default-default': 'This is costom language'
	};


	$('#new_date').click(function(evt)
	{
		evt.stopPropagation();
		$('#date-range0').data('dateRangePicker').open();
	});

});

/* antigo local: funcao agenda() */

            });
</script>

  </head>
<body onload="loaded('a')">
<div id="ModalReservar" class="modal fade" id="detailsmodal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="detailsmodalBody">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<ul class="nav nav-tabs">
		    <li class="active"><a href="#tab1" data-toggle="tab">Data</a></li>
		    <li><a href="#tab2" data-toggle="tab">KM</a></li>
		    <li><a href="#tab3" data-toggle="tab">OS</a></li>
		</ul>
	        <div class="tab-content">
		        <div class="tab-pane active" id="tab1">
			<label for="message-text" style="margin-top:10px;" class="control-label">Confirme o período de reserva:</label>
			<div class="input-group">
		          <span id="date-range0-label" class="form-control"></span>
		          <div class="input-group-addon"><a href='#' id="new_date"><i class='fa fa-calendar'>&nbsp;</i></a></div>
		        </div>

		          <input type='hidden' id="date-range0">
		          <span id="date-range0-container"></span>

		        </div>
		        <div class="tab-pane" id="tab2">
			  <p>
			    <label for="message-text" style="margin-top:10px;" class="control-label">Informe a KM inicial:</label>
			    <input type="text" class="form-control" placeholder="KM Atual" id="km_ini" value="">
			  </p>
			</div>
		        <div class="tab-pane" id="tab3">
			  <p>
			     <label for="message-text" style="margin-top:10px;" class="control-label">Informe a ordem de serviço:</label>
			     <input type="text" class="form-control" placeholder="Número da OS" id="os" value="">
			     <button name="btn_acao" id="btn_acao" type="button" class="btn btn-primary" style="width:33.3%;margin-top:10px;margin-left:10px;" >Confirmar</button>
			  </p>
		        </div>
	        </div>
            </div>
            <div id="info_result" class="modal-footer"></div>
        </div>
    </div>
</div>
<!-- Modal devolver -->
<div id="ModalDevolver" class="modal fade" id="detailsmodaldev" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content" id="modal_devolver_conteudo"><img alt='processando' src='img/loading_sistel.gif'/></div>
    </div>
</div>
<div id="calendario" class="cal_style"></div><div class="Table">
{{ $i=0; @foreach ($veiculos as $veiculo)  }}
<div class="Row">
        <div class="Cell"><img src='img/'+{{ $veiculo[$i] }}+'' class='img-pic'></div>
        <div class="Cell_chart"><div id="slider_{{ $s }}"></div></div>
        <div class="Cell_btn"><span class="span-btn btn-block"><input id="{{ $s }}" type="button" name="btn"  class="btn-style"  value=" " onclick='javascript: reserva("{{ $s }}");'  data-toggle="modal" data-target="#ModalReservar" /></span></div>
</div>
@endforeach }}
</div>
<footer class="white navbar-fixed-bottom"><p id='info_result2' class='info2'>Carregando...<i class='fa fa-sign-out fa-lg'><a href='login.php'>sair</a></i></p></footer>
<script type="text/javascript">
function atualiza_data(a,m,d){

	$("#info_result2").html("<p style='background:#fff;line-height:3.5em;' class='info2'><img alt='processando' src='img/loading_sistel.gif'/></p>");

	if (typeof a === 'undefined'){

	var data_agora =  $('#data_agora').val();
	var dth =  data_agora.split("-");
	var dt = dth[0]+"-"+dth[1]+"-"+dth[2];
		console.log(dt);
	}else{

		var d = String(d);
		var m = String(m);
		if (d < 10 && d.length < 2) d="0"+d;
		if (m < 10 && m.length < 2) m="0"+m;

		var dt = a+"-"+m+"-"+d;
		$('#data_agora').val(dt);
	}

	$("i").remove(".fa");
	$( "div" ).removeClass( "reservado" );
	$( "div" ).removeClass( "reservado_meu" );
	$( "div" ).removeClass( "entregue" );
//	$( "div" ).removeClass( "pendencias" );

         $.ajax({
            type:"post",
            url:"obtem_reserva.php",
            data:"d="+dt+"",
            success:function(data){
            		var v = data.split("||");
            		$('#mem_ids').val(v[1]);
			$('#datastore').html(v[2]);
			setTimeout(efetua_reserva(),'10');
			var content_output_1="<span class='bloco esq'><a href='javascript:void(null)' onclick='atualiza_data("+a+","+m+","+d+");'><i  class='fa fa-cloud fa-lg'></i></a>";
			var content_output_2="&nbsp;&nbsp; Agenda do dia: "+d+"/"+m+"/"+a+" &nbsp;&nbsp;";
			var content_output_3="<span class='bloco dir sair'><i style='float:right;padding-top:15px;padding-right:15px;' class='fa fa-sign-out fa-lg'><a href='login.php'>sair</a></i></span>";
			var content_output = content_output_1+content_output_2+content_output_3;
			$("#info_result2").html(content_output);
             }
          });

$( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
       		$('#a').attr("src","sound2.wav");
       		start();
       		$('#a').attr("src","alarm_car.wav");
       		$("#info_result").html("<p align='center'>Agenda não registrada!!! <img alt='processando' src='img/loading_sistel.gif'/></p>");
       		$("#info_result2").html(" » Verifique a internet... <img alt='processando' src='img/loading_sistel.gif'/>");
       		setTimeout($("#info_result").html("<p align='center'>Agenda não registrada!!! <img alt='processando' src='img/loading_sistel.gif'/></p>"),4500);
       		setTimeout($("#info_result2").html(" » Verifique a internet... <img alt='processando' src='img/loading_sistel.gif'/>"),5500);

});

} /* fim função atualiza_data */
</script>

<script type="text/javascript">

				function efetua_reserva(id_insercao){
				  var rids = "";
				  var ids = $('#mem_ids').val() + $("#em_edicao").val()+"-";

				   var rids = ids.split("-");
				   rids = rids.filter(function(e){ return e === 0 || e });

				 for (k = 0; k < rids.length; k++){

					var arraydataini = "";
					var arraydatafim = "";

					if(typeof $('#data_reserva_ini_'+rids[k]).val() === 'undefined'){
						   console.log("Dia sem agendamento");
					}else{
						   var dataini = $('#data_reserva_ini_'+rids[k]).val();  //data_ini_1::id_insert|data_ini_2::id_insert|...
						   var datafim = $('#data_reserva_fim_'+rids[k]).val();  //data_fim_1::id_insert|data_fim_2::id_insert|...

						if (dataini.indexOf("|")){
						   var arraydataini = dataini.split("|");
						   var arraydatafim = datafim.split("|");
						}
					}

					for (j = 0; j < arraydataini.length; j++) {

						var data_reserva_ini_agora = arraydataini[j];
						var data_reserva_fim_agora = arraydatafim[j];

						// Remover o id de insert ::nnn

						if (data_reserva_ini_agora.indexOf("::") >0){

						 var data_reserva_ini_agora_idx = data_reserva_ini_agora.indexOf("::");
						 var data_reserva_fim_agora_idx = data_reserva_fim_agora.indexOf("::");

						 var data_reserva_ini_agora_limpo = data_reserva_ini_agora.substr(0,data_reserva_ini_agora_idx);
						 var data_reserva_fim_agora_limpo = data_reserva_fim_agora.substr(0,data_reserva_fim_agora_idx);

						 var data_reserva_ini_agora_user = data_reserva_ini_agora.substr(data_reserva_ini_agora_idx+2,((data_reserva_ini_agora.indexOf("###"))-(data_reserva_ini_agora_idx+2)));
						 var data_reserva_ini_agora_user_nome = data_reserva_ini_agora.substr(data_reserva_ini_agora.indexOf("###")+3,data_reserva_ini_agora.length);

						 }else{

						 var data_reserva_ini_agora_limpo = data_reserva_ini_agora;
						 var data_reserva_fim_agora_limpo = data_reserva_fim_agora;
						 var data_reserva_ini_agora_user = id_insercao;
						 var data_reserva_ini_agora_user_nome = $('#nome_user').val();
						 }

						var reserva_hora_min   = moment(data_reserva_ini_agora_limpo).format('HH');
						var reserva_minuto_min = moment(data_reserva_ini_agora_limpo).format('mm');

						var reserva_hora_max   = moment(data_reserva_fim_agora_limpo).format('HH');
						var reserva_minuto_max = moment(data_reserva_fim_agora_limpo).format('mm');


						/* Usuário da reserva */
						var id_inserted = data_reserva_ini_agora_user;
						var t=0;

						for (i = parseInt(reserva_hora_min); i < parseInt(reserva_hora_max); i++){
							if (t==0) {
							      var id_insert = "&nbsp;<a href='#' id='edicao_reserva' onclick='edita_reserva("+id_inserted+")' data-toggle='modal' data-target='#ModalDevolver'><i id='fa-bolt' class=\"fa fa-bolt fa-lg\" style='color:#FFF55C;'>&nbsp;<font style='font-family:arial;color:#fff;font-size:8.5px;'>"+data_reserva_ini_agora_user_nome+"</font></i></a>";
							}else{
							      var id_insert = "";
							}


							if (i==parseInt(reserva_hora_min) && parseInt(reserva_minuto_min) != 0){

		        	                        $("#slider_"+rids[k]+" .ui-ruler-tick-label:contains('"+i+"h')").html(+i+"h <i class='fa fa-unlock'></i>"+id_insert);
			                                $("#slider_"+rids[k]+" .ui-ruler-tick-label:contains('"+i+"h')").parent().addClass("reservado-meio-o");
							}else{
							//alert("condicao 2");
		        	                        $("#slider_"+rids[k]+" .ui-ruler-tick-label:contains('"+i+"h')").html(+i+"h <i class='fa fa-lock'></i>"+id_insert);


		        	                	        var entregue = true;


		        	                		var rsm=$('#nome_user').val();
								var dono=$("#slider_"+rids[k]+" .ui-ruler-tick-label:contains('"+rsm+"')").parent().html();

					                        if(typeof dono === 'undefined'){
					                                $("#slider_"+rids[k]+" .ui-ruler-tick-label:contains('"+i+"h')").parent().addClass("reservado");
					                        }else{
					                	        $("#slider_"+rids[k]+" .ui-ruler-tick-label:contains('"+i+"h')").parent().addClass("reservado_meu");
					                        }

								if (i <12)
					                        $("#slider_"+rids[k]).dateRangeSlider("zoomIn", 10);
								else
					                        $("#slider_"+rids[k]).dateRangeSlider("zoomOut", 10);

					                        if ( typeof entregue !== 'undefined' ){
									$("#slider_"+rids[k]+" .ui-ruler-tick-label:contains('"+i+"h')").parent().addClass("entregue");
					                        }
					                	console.log(" Aplicando as classes: reservado / reservado_meu / entregue ");
			                                }
							if ((parseInt(i)+1) == parseInt(reserva_hora_max) && parseInt(reserva_minuto_max) != 0){
							//alert("condicao 3");
		        	                        $("#slider_"+rids[k]+" .ui-ruler-tick-label:contains('"+(parseInt(i)+1)+"h')").html(+(parseInt(i)+1)+"h <i class='fa fa-unlock'></i>"+id_insert);
			                                $("#slider_"+rids[k]+" .ui-ruler-tick-label:contains('"+(parseInt(i)+1)+"h')").parent().addClass("reservado-meio");
							}else if ((parseInt(i)+1) == parseInt(reserva_hora_max) && parseInt(reserva_minuto_min) != 0){
							//alert("condicao 4 :"+reserva_minuto_min);
		        	                        $("#slider_"+rids[k]+" .ui-ruler-tick-label:contains('"+i+"h')").html(+i+"h <i class='fa fa-lock'></i>"+id_insert);
			                                $("#slider_"+rids[k]+" .ui-ruler-tick-label:contains('"+i+"h')").parent().addClass("reservado");
			                                }
			                        t++;
						} //for css reserva
					} //for reservas mesmo ID
				  } // for vários ID's
				} // fim funcao efetua_reserva

var elem;
var count;
var delay;

function playSound() {
  --count;
  elem.cloneNode(true).play();
  if (count > 0) {
    setTimeout(playSound, delay);
  }
}
function start() {
  delay = 35
  count = 1;
  playSound();
}
function keypress(event) {
  if (event.charCode == 32) {
    	elem.cloneNode(true).play();
	var refreshDate = setTimeout( function() {
	var data_agora =  $('#data_agora').val();
	var dth =  data_agora.split("-");
	atualiza_data(dth[0],dth[1],dth[2]); }, 10);
  }
}
function loaded() {
  elem = document.getElementById("a");
  document.body.addEventListener("keypress", keypress, false);
}
</script>
<script type="text/javascript">

    var horas = ['8', '9', '10', '11', '12', '13', '14', '15', '16', '17'];
    var dias=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30];

{{ @for ($s=0; $s < count($veiculos); $s++) }}

       setTimeout($('#slider_{{ $s; }}').dateRangeSlider({range:{min: {hours: 1},max: {hours: 10}}},
	{ step: { hours: 1}},
        {valueLabels: 'hide'},
        {symmetricPositionning: false},
        {arrows:false},
        {bounds: {min: new Date({{ $ano;}},{{ $mes;}},{{ $dia;}}, 0,  0, 0), max: new Date({{ $ano; }}, {{ $mes; }},{{ $dia;}}, 10, 0, 0)},
        defaultValues: {min: new Date({{ $ano;}},{{ $mes;}},{{ $dia;}},{{ ($hora_agenda-7)}},0,0), max: new Date({{ $ano; }},{{ $mes; }},{{ $dia; }},{{ ($hora_agenda-7)}},59,59)},
        scales: [{
         first: function(value) { return value; },end:   function(value) { return value; },next:  function(value) {var next = new Date(value);return new Date(next.setHours(value.getHours() + 1));},
         label: function(value){ return horas[value.getHours()]+'h';},
      	format: function(tickContainer, tickStart, tickEnd){ $('#slider_{{ $s;}} .ui-rangeSlider-bar').attr('id','reserva-{{ $s;}}');}}]
  }),500);
{{ @endfor }}
</script>
<script>

 /*  funcao de agenda */
                 function agenda(id){
	                var temp_ini =  $('#data_reserva_temp_ini_'+id).val();
        	        var temp_fim =  $('#data_reserva_temp_fim_'+id).val();

                        /// /// //  atualizar o ini / fim
			var old_ini = $("#data_reserva_ini_"+id).val(); /* dados ini atuais */
			var old_fim = $("#data_reserva_fim_"+id).val(); /* dados fim atuais */

			$('#data_reserva_temp_ini_'+id).remove();
			$('#data_reserva_temp_fim_'+id).remove();


	                var reedicao = $('#reedicao').val();
			var data_reserva_ini_now=$('#data_reserva_ini_reedicao').val();
        	        var data_reserva_fim_now=$('#data_reserva_fim_reedicao').val();


			        if((typeof reedicao !== 'undefined') && (reedicao!="")){
					/* modo reedicao */
		                 	var output_result = "#info_result_devolver";
		                 	var output = "#ModalDevolver";


        	        	        var mode_reedicao = $('#reedicao').val();
        	        	        console.log('em reedicao');

			    		var id_veiculo=id;
					var id_usuario=$("#id_usuario").val();
					var km_ini=$("#km_ini_devolver").val();
					var km_fim=$("#km_fim_devolver").val();
					var os=$("#os_devolver").val();

				}else{
		                 	var output_result = "#info_result";
					var output = "#ModalReservar";
					var data_reserva_ini_now=temp_ini;
					var data_reserva_fim_now=temp_fim;

					var mode_reedicao = false;
					console.log('reedicao false');

			    		var id_veiculo=id;
					var id_usuario=$("#id_usuario").val();
					var km_ini=$("#km_ini").val();
					var km_fim=$("#km_fim").val();
					var os=$("#os").val();
				}

                        if (data_reserva_ini_now.indexOf("|")){
	                        var r_data_ini=data_reserva_ini_now.split("|");
	                        var r_data_fim=data_reserva_fim_now.split("|");

	                        var data_reserva_ini = r_data_ini[0];
	                        var data_reserva_fim = r_data_fim[0];
                        }else{
				var data_reserva_ini=$('#data_reserva_ini_'+id).val();
	                        var data_reserva_fim=$('#data_reserva_fim_'+id).val();
                        }

//                      if(restricao==""){
			setTimeout($( output_result ).html("»Enviando...<img alt='processando' src='img/loading_sistel.gif'/>"),1300);
                         $.ajax({
                            type:"post",
                            url:"agenda_grava.php",
                            data:"data_reserva_ini="+data_reserva_ini+"&data_reserva_fim="+data_reserva_fim+"&id_veiculo="+id_veiculo+"&id_usuario="+id_usuario+"&km_ini="+km_ini+"&km_fim="+km_fim+"&os="+os+""+"&reedicao="+mode_reedicao+"",
                            success:function(data){
                                	$( output_result ).html(data);
                                	var id_inserted = data.split("||"); /* ação para cria link para edição */
                                	var id_insert=id_inserted[1];

					if (id_insert)
					var identify = ""; //"::"+id_insert+"###"+$('#nome_user').val();
					else
					var identify = "";

					$("#data_reserva_ini_"+id).val(old_ini+temp_ini+identify);
					$("#data_reserva_fim_"+id).val(old_fim+temp_fim+identify);

					setTimeout($( output_result ).html("<i class='fa fa-cloud-upload fa-lg'> </i>"),20);;
					setTimeout($( output_result ).html("<p align=center>Gravado com sucesso</p>"),3000);
					setTimeout($( output_result ).html(""),4000);
					setTimeout($( output ).modal('hide'),5000);

					setTimeout(efetua_reserva(id_insert),50);

					$("#reserva-"+id).removeClass("ui-rangeSlider-bar-reservado").addClass("ui-rangeSlider-bar");
					$("#reserva-"+id).html("<i class=\"fa fa-bolt fa-lg\" style='text-align:center;padding:15px;color:#FFF55C;'></i>");
				}
                          });
//                      }

$( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
       		$('#a').attr("src","sound2.wav");
       		start();
       		$('#a').attr("src","alarm_car.wav");
       		setTimeout($("#info_result").html("<p align=center>Agenda não registrada... <img alt='processando' src='img/loading_sistel.gif'/></p>"),20);
       		setTimeout($("#info_result2").html("Verifique a internet... <img alt='processando' src='img/loading_sistel.gif'/>"),40);
});

                 } // final funcao agenda()

function edita_reserva(id_insercao){
    $("#modal_devolver_conteudo").load("edicao.php?id_insercao="+id_insercao, function(responseTxt, statusTxt, xhr){
        if(statusTxt == "success"){
            console.log("conteúdo reedicao carregado");
	}
        if(statusTxt == "error"){
            setTimeout($("#info_result").html("<p align=center>carregando... <img alt='processando' src='img/loading_sistel.gif'/></p>"),20);
       	    setTimeout($("#info_result2").html("Verifique a internet... <img alt='processando' src='img/loading_sistel.gif'/>"),40);
            console.log("Error: " + xhr.status + ": " + xhr.statusText);
        }

    });} /* close function edita_reserva */

function reserva(id){

$("#em_edicao").val(id);
$("#reedicao").remove();
$("#reserva-"+id).removeClass("ui-rangeSlider-bar").addClass("ui-rangeSlider-bar-reservado");

var dateValues = $("#slider_"+id).dateRangeSlider("values");
var data_min = moment($('#data_agora').val()).format('YYYY-MM-DD');
var data_max = moment($('#data_agora').val()).format('YYYY-MM-DD');
var hora_min   = moment(dateValues.min).format('HH');
var minuto_min = moment(dateValues.min).format('mm');
var hora_max   = moment(dateValues.max).format('HH');
var minuto_max = moment(dateValues.max).format('mm');

hora_min_0   = parseInt(hora_min.toString()) + 8;
minuto_min_0 = minuto_min.toString();
hora_max_0   = parseInt(hora_max.toString()) + 8;
minuto_max_0 = minuto_max.toString();

if(typeof $("#data_reserva_ini_"+id).val() === 'undefined'){
$('<input/>', {'type': 'hidden','id': 'data_reserva_ini_'+id,'value':''}).appendTo($("#datastore"));
$('<input/>', {'type': 'hidden','id': 'data_reserva_fim_'+id,'value':''}).appendTo($("#datastore"));
}

var d_ini = data_min+" "+hora_min_0+":"+minuto_min_0+":00"; /*  novos dados reserva ini */
var d_fim = data_max+" "+hora_max_0+":"+minuto_max_0+":00"; /*  novos dados reserva fim */

var old_ini = $("#data_reserva_ini_"+id).val(); /* dados ini atuais */
var old_fim = $("#data_reserva_fim_"+id).val(); /* dados fim atuais */


if(typeof $("#data_reserva_temp_ini_"+id).val() === 'undefined'){
$('<input/>', {'type': 'hidden','id': 'data_reserva_temp_ini_'+id,'value':''}).appendTo($("body"));
$('<input/>', {'type': 'hidden','id': 'data_reserva_temp_fim_'+id,'value':''}).appendTo($("body"));
}

$("#data_reserva_temp_ini_"+id).val(d_ini);
$("#data_reserva_temp_fim_"+id).val(d_fim);

output_0 = ""+hora_min_0+":"+minuto_min_0+" até "+hora_max_0+":"+minuto_max_0;
/* alert(output_0); */

$('#date-range0-label').html(output_0);
$('#date-range0').dateRangePicker({language: 'custom',inline:true,container:'#date-range0-container',singleMonth: 'true',showTopbar: false,startOfWeek: 'monday',separator:' até ',format: 'DD/MM',setValue: function(s){ return $('#date-range0').val(s) + $('#date-range0-label').html("Reservado: "+s);},showShortcuts:false});
} /* close function reserva */

var calendarPicker1 = $("#calendario").calendarPicker({date:"{{ http_get_request_body(d) }}", showDayArrows:false,callback:function(cal) { atualiza_data(cal.currentDate.getFullYear(),(cal.currentDate.getMonth()+1),(cal.currentDate.getDate()));}});
</script>
<audio preload src="alarm_car.wav" id="a"></audio>
<audio preload src="sound2.wav" id="b"></audio>
<input type="hidden" id="id_usuario" value="{{ session_register(user_id) }}">
<input type="hidden" id="id_veiculo" value="">
<input type="hidden" id="em_edicao" value="">
<input type="hidden" id="ultima_data" value="{{ $data_filtro }} ">
<input type="hidden" id="data_agora">
<input type="hidden" id="mem_ids" value="{{ $ids }}">
<input type="hidden" id="nome_user" value="{{ session_register(nome_user) }}">
<div id="datastore" style="display:none;visibility: hidden;width:1px;"></div>
</body>
</html>
