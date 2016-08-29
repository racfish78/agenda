    @foreach ($reservas as $reserva)
<?php
    $id_veiculo = $reserva->id_veiculo;
    $data_reserva_ini = $reserva->data_reserva_ini;
    $data_reserva_fim = $reserva->data_reserva_fim;
    $numero_os = $reserva->os;
    $nome = $reserva->name;
    $km_ini = $reserva->km_ini;
    $id = $reserva->id;
    $km_fim= $reserva->km_fim;
    $id_usuario= $reserva->id_usuario;
?>
   @endforeach
<?php
    $dt_ini = explode(" ",$data_reserva_ini);
    $dt_ini = substr($dt_ini[1],0,-3);
    $dt_fim = explode(" ",$data_reserva_fim);
    $dt_fim = substr($dt_fim[1],0,-3);
    $data_reserva_ini_replace = str_replace(" ","",str_replace("-","",$data_reserva_ini));
    $data_reserva_inicial = substr($data_reserva_ini_replace,0,strpos($data_reserva_ini_replace,":"));
    $data_agora = str_replace(" ","",$data_agora);
?>
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
		          <span id="date-range0-container">
               Reserva do veículo: <img style="padding-top: 5px;" src="img/{{ $veiculos[$id_veiculo] }}">
              </span>
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
			     <input type="text" class="form-control" placeholder="Número da OS" id="os_devolver" value="<?php echo $numero_os; ?>">
			     <button id="btn_acao_atualizar" type="button" class="btn btn-primary" style="width:33.3%;margin-top:10px;margin-left:10px;" onclick="btn_acao_atualizacao()"> Confirmar</button>
			     <?php if($data_reserva_inicial < $data_agora) {?>
			     <button id="btn_acao_devolver_2" type="button" style="float:right;margin-right:10px;width:33.3%;margin-top:10px;margin-left:10px;" class="btn btn-danger" onclick="devolver_cancelar('devolver:<?php echo $_GET['id_insercao']; ?>');">Devolver</button>
			     <?php }else{ ?>
			     <button id="btn_acao_devolver_0" type="button" style="float:right;margin-right:10px;width:33.3%;margin-top:10px;margin-left:10px;background-color: #f63;" class="btn btn-danger" onclick="devolver_cancelar('cancelar:<?php echo $_GET['id_insercao']; ?>');">Cancelar</button>
			     <?php } ?>
			  </p>
		        </div>
	        </div>
            </div>
            <div id="info_result_devolver" class="modal-footer"><?php echo "ID:".$_GET['id_insercao'];?></div>
