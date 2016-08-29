<?php
$link = mysql_connect('localhost', 'gesta753_sistel', 'piramide!2015');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
?>
<?php 
$servername = "localhost";
$username = "gesta753_sistel";
$password = "piramide!2015";
$dbname = "gesta753_sistel";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

/* change character set to utf8 */
if (!$mysqli->set_charset("utf8")) {
    printf("erro ao setar caracter utf8: %s\n", $mysqli->error);
}
?>