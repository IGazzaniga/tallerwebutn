<?php
session_start();
session_destroy();
$enlace = false;
function Conectarse()
{
    global $enlace;
    if( $enlace )
        return $enlace;
    $enlace = mysql_connect( 'localhost', 'root', 'qwerty') or die('No se puede conectar al servidor' );
    mysql_select_db('tallerwebutn', $enlace) or die('No se pudo seleccionar la base');
    return $enlace;
}

function Desconectarse()
{
    global $enlace;
    if( $enlace != false )
        mysql_close($enlace);
    $enlace = false;
}

$res = mysql_query("SELECT * from usuario where login='".$_POST['username']."' and pass='".md5($_POST['password'])."'", Conectarse() );
#$res = mysql_query("SELECT * from usuario", Conectarse() );
Desconectarse();
if (!$res) {
  http_response_code (500);
    echo "No se pudo ejecutar con exito la consulta ($sql) en la BD: " . mysql_error();
    exit;
}

if (mysql_num_rows($res) == 0) {
  http_response_code (401);
    echo "Error de usuario o contraseña.";
    exit;
}

//Inicia la sesion
/*
$ip = $_SERVER['REMOTE_ADDR']; // the IP address to query
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  echo 'Hello visitor from '.$query['country'].', '.$query['city'].'!';
} else {
  echo 'Unable to get location';
}
*/
$usuario = mysql_fetch_assoc($res);
$_SESSION['username'] = $usuario['login'];
