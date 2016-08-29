<?php 
include("conexao.php");

$data_reserva_ini=$_POST["data_reserva_ini"];
$data_reserva_fim=$_POST["data_reserva_fim"];
$id_veiculo=$_POST["id_veiculo"];
$id_usuario=$_POST["id_usuario"];
$km_ini=$_POST["km_ini"];
$km_fim=$_POST["km_fim"];
$os=$_POST["os"];

if (!empty($_POST['reedicao'])){ $reedicao = $_POST['reedicao']; }

if (!empty($_POST['cancelar'])){ $cancelar=$_POST["cancelar"]; }

if (intval($reedicao) >= 1)
$sql = "UPDATE agenda SET data_reserva_ini='$data_reserva_ini',data_reserva_fim='$data_reserva_fim',data_devolucao='',id_veiculo='$id_veiculo',id_usuario='$id_usuario',km_ini='$km_ini',km_fim='$km_fim',os='$os' WHERE id='$reedicao'";
else
$sql = "INSERT INTO `agenda`(`data_reserva_ini`, `data_reserva_fim`, `data_devolucao`, `id_veiculo`, `id_usuario`, `km_ini`, `km_fim`, `os`) VALUES  ('$data_reserva_ini', '$data_reserva_fim', '', '$id_veiculo', '$id_usuario', '$km_ini', NULL, '$os');";


if (intval($cancelar) >= 1)
$sql = "delete from agenda where id = '$cancelar'";

if ($mysqli->query($sql)) {
$id=$mysqli->insert_id;
if (intval($reedicao) >= 1) $id=$reedicao;
    echo "Gravado com sucesso||$id";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close;
?>