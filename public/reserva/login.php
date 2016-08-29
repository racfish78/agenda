<?php 
session_start();
$_SESSION['autenticacao'] = false;
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Página de login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/typica-login.css">    
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->    
<!--[if lt IE 9]>      
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    
<![endif]-->    
<!-- Le favicon -->    
<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<div class="container">
<div id="login-wraper">
<form class="form login-form">                
<legend><img src="img/logo.png" alt="Sistel Engenharia - Reserva de Veículos"></legend>
<div class="body">
<label>email</label>
<input type="text" name="email" id="email" style="width:45%;text-align:right !important;" autocomplete="off">
<span style="vertical-align: super;font-family:arial;font-size:9.75px;" class="blue">@sistelengenharia.com.br</span>
<label>senha</label>
<input type="password" name="password" id="password" style="width:90%;vertical-align:super;font-size:24px;text-align:center !important;">
</div>                
<div class="footer">                    
<label class="checkbox inline">                        
<input type="checkbox" id="check_esqueci" value="esqueci"><i class='fa fa-help fa-lg'></i><font style="font-size:8.5px;">Esqueci a senha</font></label>
<button type="button" class="btn btn-success" id="btn_entrar" style="font-size: 20px !important;">Entrar</button>
</div>                        
</form>
</div>    
</div>    
<footer class="white navbar-fixed-bottom"><span id="info_result">Não tem acesso? <a href="#" class="btn btn-black">Cadastre-se</a></span></footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/backstretch.min.js"></script>
<script src="js/typica-login.js"></script>
</body>
<script>$(document).ready(function(){

$('#btn_entrar').click(function()  { 

$("#info_result").html("Enviando...");
var email=$('#email').val();
var senha=$('#password').val();

$.ajax({  url: 'autenticacao.php',  type: 'post',  data: 'email='+email+'&senha='+senha+'',  success: function(data) {		
var v = data.split("[#,#]");	console.log(v[1]);	
	if (v[1] != 'dados incorretos'){	
		setTimeout($("#info_result").html("<i class='fa fa-thumbs-o-up fa-lg' style='display:inline;'> Bem vindo "+v[1]+" </i>"),850);	
		location.href='agenda.php?session_id=<?php echo session_id(); ?>';
	} else {	
	$("#info_result").html("<i class='fa fa-bomb fa-lg' style='display:inline;'>ops, "+v[1]+" </i>");
	var refreshId = setTimeout( function() { $("#info_result").html("Não tem acesso? <a href='#' class='btn btn-black'>Cadastre-se</a>");}, 5000);
	}  
},  
error: function(e) {	
$("#info_result").html("<p align=center>Verifique a internet... <img alt='processando' src='img/loading_sistel.gif'/></p>");console.log(e.message);  }}); 

}); 

$( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {       		
$('#a').attr("src","sound2.wav");
start();
$('#a').attr("src","sound.wav");
$("#info_result").html("<p align=center>Agenda não registrada... <img alt='processando' src='img/loading_sistel.gif'/></p>"); 
$("#info_result2").html("<p align=center>Verifique a internet... <img alt='processando' src='img/loading_sistel.gif'/></p>");}); });
</script></html>