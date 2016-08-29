@foreach ($reservas as $reserva)
<?php
        $veiculos = $reserva->id_veiculo;
        $rids[]                             = $reserva->id_veiculo;
        $id_veiculos[]                      = $reserva->id_veiculo;
        $veiculo_ini[$reserva->id_veiculo] .= $reserva->data_reserva_ini."::".$reserva->id."###".$reserva->name."|";
        $veiculo_fim[$reserva->id_veiculo] .= $reserva->data_reserva_fim."::".$reserva->id."###".$reserva->name."|";
?>
@endforeach
<?php $rids = array_unique($rids); foreach($rids as $i){   $ids.=$i."-";} ?>
<?php echo "sql"."||";?><?php echo $ids."||";?><?php foreach($veiculo_ini as $v => $d){ ?><input type="hidden" id="data_reserva_ini_<?php echo $v;?>" value="<?php echo $d;?>"><?php } ?><?php foreach($veiculo_fim as $v => $d){ ?><input type="hidden" id="data_reserva_fim_<?php echo $v;?>" value="<?php echo $d;?>"><?php } ?>
