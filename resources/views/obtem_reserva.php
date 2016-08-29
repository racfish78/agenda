<?php
include("conexao.php");

$dd=date('d');
$mm=date('m');
$aa=date('Y');

$veiculo_ini=array();
$veiculo_fim=array();
$v=0;
$rids = array();

$data_filtro = isset($_POST['d'])?$_POST['d']:$aa.'-'.$mm.'-'.$dd;

$sql="SELECT id_veiculo,data_reserva_ini,data_reserva_fim,id,(select nome from usuarios where usuarios.id = agenda.id_usuario) nome FROM `agenda` WHERE data_reserva_ini like '$data_filtro %'";

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->execute();
    $stmt->store_result();
    $qtd_rows = $stmt->num_rows;

    /* bind variables to prepared statement */
    $stmt->bind_result($col1,$col2,$col3,$col4,$col5);

    /* fetch values */
    while ($stmt->fetch()) {
      $rids[] = $col1;
	    $id_veiculos[] 	       = $col1;
	    $veiculo_ini["$col1"] .= $col2."::".$col4."###".$col5."|";
	    $veiculo_fim["$col1"] .= $col3."::".$col4."###".$col5."|";
    } // while
} // if stmt
$rids = array_unique($rids);
foreach($rids as $i){	$ids.=$i."-";} ?>
<?php echo $sql."||";?><?php echo $ids."||";?><?php foreach($veiculo_ini as $v => $d){ ?><input type="hidden" id="data_reserva_ini_<?php echo $v;?>" value="<?php echo $d;?>"><?php } ?><?php foreach($veiculo_fim as $v => $d){ ?><input type="hidden" id="data_reserva_fim_<?php echo $v;?>" value="<?php echo $d;?>"><?php } ?>
