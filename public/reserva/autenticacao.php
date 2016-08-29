<?php
session_start();
include("conexao.php");
$email = $_POST['email'];
$senha = $_POST['senha'];
$conexao = false;
$sql="SELECT id,email,senha,nome FROM `usuarios` WHERE email='".strtolower(trim($email))."' and senha='$senha' ";
$result="0[#,#]dados incorretos"; 
if ($stmt = $mysqli->prepare($sql)) {
    $stmt->execute();
    $stmt->store_result();
    $qtd_rows = $stmt->num_rows;

    /* bind variables to prepared statement */
    $stmt->bind_result($col1,$col2,$col3,$col4);

    /* fetch values */
    while ($stmt->fetch()) {
    
        if ($qtd_rows >0){
	$result=$col1."[#,#]".$col4;
	$conexao=true;
	}
   }

if ($conexao == true){
	session_start();
	$_SESSION['autenticacao']=true;	
	$_SESSION['user_id']   = $col1;
	$_SESSION['nome_user'] = $col4;
}
   echo $result;
}
?>