<?php 
include("conexao.php");
$dd=date('d');
$mm=date('m');
$aa=date('Y');
$hora=date('H');
$data_agora = $aa.$mm.$dd.$hora;

$sql="SELECT id_veiculo,data_reserva_ini,data_reserva_fim,os,(select nome from usuarios where usuarios.id = agenda.id_usuario) nome, km_ini, id, km_fim, id_usuario FROM `agenda` WHERE agenda.id='".$_GET['id_insercao']."'";

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->execute();
    $stmt->store_result();
    $qtd_rows = $stmt->num_rows;

    /* bind variables to prepared statement */
    $stmt->bind_result($col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8,$col9);

    /* fetch values */
    while ($stmt->fetch()) {

	$id_veiculo = $col1;    
	$data_reserva_ini = $col2;    
	$data_reserva_fim = $col3;
	$os = $col4;
	$nome = $col5;    
	$km_ini = $col6;
	$id = $col7;
	$km_fim=$col8;
	$id_usuario=$col9;
	 
    } // while
    
    $dt_ini = explode(" ",$data_reserva_ini);
    $dt_ini = substr($dt_ini[1],0,-3);
    $dt_fim = explode(" ",$data_reserva_fim);
    $dt_fim = substr($dt_fim[1],0,-3);
} // if stmt

$data_reserva_ini_replace = str_replace(" ","",str_replace("-","",$data_reserva_ini));
$data_reserva_inicial = substr($data_reserva_ini_replace,0,strpos($data_reserva_ini_replace,":"));
$data_agora = str_replace(" ","",$data_agora);

?>
<script>


function devolver_cancelar(cancel){

var cancelar = cancel;
var data_reserva_ini = $('#data_reserva_ini_reedicao').val();
var data_reserva_fim = $('#data_reserva_ini_reedicao').val();
var id_veiculo       = "<?php echo $id_veiculo; ?>";
var id_usuario       = "<?php echo $id_usuario; ?>"; 
var km_ini 	     = $('#km_ini_devolver').val();
var km_fim 	     = $('#km_fim_devolver').val();
var os 		     = "<?php echo $os; ?>";
var id, mode_reedicao    = "<?php echo $id; ?>";

var data_agora =  $('#data_agora').val();
var dth =  data_agora.split("-");

	
                   $.ajax({type:"post",
                            url:"agenda_grava.php",
                            data:"data_reserva_ini="+data_reserva_ini+"&data_reserva_fim="+data_reserva_fim+"&id_veiculo="+id_veiculo+"&id_usuario="+id_usuario+"&km_ini="+km_ini+"&km_fim="+km_fim+"&os="+os+""+"&reedicao="+mode_reedicao+"&cancelar="+cancelar+"",
                            success:function(data){
					setTimeout($('#ModalDevolver').modal('hide'),5000);
					$('#a').attr("src","sound3.wav");
					atualiza_data(dth[0],dth[1],dth[2]);start();
				       	$('#a').attr("src","alarm_car.wav");
					
					$("#reserva-"+id).removeClass("ui-rangeSlider-bar-reservado").addClass("ui-rangeSlider-bar");
					$("#reserva-"+id).html("<i class=\"fa fa-bolt fa-lg\" style='text-align:center;padding:15px;color:#FFF55C;'></i>");
				}
                          });

$( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
       		$('#a').attr("src","sound2.wav");
       		start();
       		$('#a').attr("src","alarm_car.wav");
       		setTimeout($("#info_result").html("<p align=center>Agenda não registrada... <img alt='processando' src='img/loading_sistel.gif'/></p>"),20);
       		setTimeout($("#info_result2").html("Verifique a internet... <img alt='processando' src='img/loading_sistel.gif'/>"),40);
});

}


$("#em_edicao").val("<?php echo $id_veiculo;?>");
$("#btn_acao_devolver").click(function(){var id = $("#em_edicao").val();agenda(id);start();});

$("#btn_acao_devolver_0").click(function(){
	devolver_cancelar('<?php echo $id; ?>');
});


$("#btn_acao_devolver_2").click(function(){
	$('#a').attr("src","sound3.wav");
	var id = $("#em_edicao").val();agenda(id);start();
       	$('#a').attr("src","alarm_car.wav");
});

</script>
            <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<ul class="nav nav-tabs">
		    <li class="active"><a href="#tab11" data-toggle="tab">Data</a></li>
		    <li><a href="#tab22" data-toggle="tab">KM</a></li>
		    <li><a href="#tab33" data-toggle="tab">OS</a></li>
		</ul>
	        <div class="tab-content">
		        <div class="tab-pane active" id="tab11">
			<label for="message-text" style="margin-top:10px;" class="control-label">Confirme o período de reserva:</label>
			<div class="input-group">
		          <span id="date-range0-label" class="form-control">de <?php echo $dt_ini; ?> até <?php echo $dt_fim;?></span>
		          <div class="input-group-addon"><a href='#' id="new_date"><i class='fa fa-calendar'>&nbsp;</i></a></div>
		        </div>
		          <input type='hidden' id="date-range0_reedicao">
		          <input type='hidden' id="reedicao" value="<?php echo $id; ?>">
		          <input type='hidden' id="data_reserva_ini_reedicao" value="<?php echo $data_reserva_ini;?>">
		          <input type='hidden' id="data_reserva_fim_reedicao" value="<?php echo $data_reserva_fim;?>">
		          <span id="date-range0-container"></span>
		        </div>
		        <div class="tab-pane" id="tab22">
			  <p>
			    <label for="message-text" style="margin-top:10px;" class="control-label">Informe a KM inicial:</label>
			    <input type="text" class="form-control"  placeholder="KM Atual" id="km_ini_devolver" value="<?php echo $km_ini;?>">

			    <label for="message-text" style="margin-top:10px;" class="control-label">Informe a KM final:</label>
			    <input type="text" class="form-control" placeholder="KM Final" id="km_fim_devolver" value="<?php echo $km_fim;?>">
			  </p>
			</div>
		        <div class="tab-pane" id="tab33">
			  <p>
			     <label for="message-text" style="margin-top:10px;" class="control-label">Informe a ordem de serviço:</label>
			     <input type="text" class="form-control" placeholder="Número da OS" id="os_devolver" value="<?php echo $os;?>">
			     <button id="btn_acao_devolver" type="button" class="btn btn-primary" style="width:33.3%;margin-top:10px;margin-left:10px;">Confirmar</button>			     
			     <?php if($data_reserva_inicial < $data_agora) {?>
			     <button id="btn_acao_devolver_2" type="button" style="float:right;margin-right:10px;width:33.3%;margin-top:10px;margin-left:10px;" class="btn btn-danger">Devolver</button>
			     <?php }else{ ?>
			     <button id="btn_acao_devolver_0" type="button" style="float:right;margin-right:10px;width:33.3%;margin-top:10px;margin-left:10px;background-color: #f63;" class="btn btn-danger">Cancelar</button>
			     <?php } ?>
			  </p>
		        </div>
	        </div>
            </div>
            <div id="info_result_devolver" class="modal-footer"><?php echo "ID:".$_GET['id_insercao'];?></div>