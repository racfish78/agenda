<?php
/* verbose off */
error_reporting(1);
clearstatcache();

/* codigo de ativação */
$codigo  = $_POST['code'];
$arquivo = 'contador.txt';

$validation = ($codigo == "5750") ? TRUE : FALSE;

if ((!file_exists($arquivo))){
    /* Grava o log do post */
    if ($validation){
      $cont = 1;
      $handle_write = fopen($arquivo, 'w');
      fwrite($handle_write, $cont);
      fclose($handle_write);
    }
}else{
    $brinde_ja_recebido = TRUE;
}

if (isset($_GET['reset'])) {
    unlink("./".$arquivo);
    header('Location: index.php');
}
?>
 <?php
  if ($validation && (!$brinde_ja_recebido)){
        echo "<h1 style='width: 100%;height: 25%;position: fixed;z-index: 2;to-p: 50%;margin: -80px 0 0 0;font-size: 25px;font-weight: normal;font-style: italic;text-align: center;text-transform: uppercase;color: #fafafa'>Tem um brinde para você!<br><img src='ninjas_brinde.png'><br>Pare a apresentação agora!</h1>";
        exit();
  } else if (!empty($codigo)){
            echo "<h1 style='width: 100%;height: 30%;position: fixed;z-index: 2;top: 50%;margin: -80px 0 0 0;font-size: 30px;font-weight: normal;font-style: italic;text-align: center;text-transform: uppercase;color: #fafafa'>Código inválido...</h1><script>setTimeout(function(){location.reload()},2000)</script>";
            exit();
          } else if (isset($codigo)){
            echo "<h1 style='width: 100%;height: 50%;position: fixed;z-index: 2;top: 50%;margin: -80px 0 0 0;font-size: 30px;font-weight: normal;font-style: italic;text-align: center;text-transform: uppercase;color: #fafafa'>vazio?</h1><script>setTimeout(function(){location.reload()},2000)</script>";
            exit();
  }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
      In&iacute;cio - Firework - Web Solutions
    </title>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Firework - Web Solutions - www.fireworkweb.com">
    <meta name="base_url" content="http://fireworkweb.com.br">
    <meta name="csrf-token" content="uqGq9tyNUnnD7k5m5Umxx4uQn5YCk77NHnIJnUmm">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=1">

    <meta property="og:title" content="Firework - Web Solutions">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://fireworkweb.com.br">
    <meta property="og:image" content="http://fireworkweb.com.br/themes/frontend/firework/assets/firework/img/social.png">
    <meta property="og:site_name" content="Firework">
    <meta property="og:description" content="">

    <link rel="shortcut icon" href="http://fireworkweb.com.br/themes/frontend/firework/assets/firework/img/icons/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="http://fireworkweb.com.br/themes/frontend/firework/assets/firework/img/icons/icon32x32.png">
    <link rel="apple-touch-icon-precomposed" href="http://fireworkweb.com.br/themes/frontend/firework/assets/firework/img/icons/icon57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://fireworkweb.com.br/themes/frontend/firework/assets/firework/img/icons/icon72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://fireworkweb.com.br/themes/frontend/firework/assets/firework/img/icons/icon114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://fireworkweb.com.br/themes/frontend/firework/assets/firework/img/icons/icon144x144.png">
    <link href="http://fireworkweb.com.br/cache/assets/frontend.firework.styles.908d9b3edd3b791db2821c2c6e38cd8b_1452719772.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <aside class="content-left"><a href="#" class="logo"></a>

<?php
if ($brinde_ja_recebido) { echo "<h1 style='width: 100%;height: 50%;position: fixed;z-index: 2;top: 50%;margin: -80px 0 0 0;font-size: 30px;font-weight: normal;font-style: italic;text-align: center;text-transform: uppercase;color: #fafafa'>Chegou tarde! Alguém postou antes...</h1>"; exit(); }
?>

<div id="resultado" style="width:100%">
  <form action="index.php"  method="post" data-common-contact autocomplete="off">
      <h1 class="heading">Entre com o Código: <input type="text" name="codigo" id="codigo_valor" placeholder="  ?  ?  ?  ?  " style="width:300px; ">
      <ul><li style="list-style-type: none;width:85%"><button id="enviar" type="submit" style="color: rgb(199, 85, 51);">Enviar</button></li></ul>
      </h1>
  </form>
</div>

<script>
$( "#enviar" ).click(function() {

    $.ajax({
      method: "POST",
      url: "index.php",
      data: { code: $('#codigo_valor').val() }
    })
      .done(function( msg ) {
        $('#resultado').html(msg);
      });

});
</script>


    <script src="http://fireworkweb.com.br/cache/assets/frontend.firework.scripts.02977bf1d4fe27fbcdb6ee2e7e7580a2_1452719772.js"></script>

  </body>
</html>
