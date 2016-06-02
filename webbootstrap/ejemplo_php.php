<?php
#session_start();

#print_r($_SERVER);

#print_r($_REQUEST['nombre']);
#exit;

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

$res = mysql_query("SELECT * from usuario where login='".$_GET['login']."' and pass='".md5($_GET['pass'])."'", Conectarse() );
#$res = mysql_query("SELECT * from usuario", Conectarse() );
Desconectarse();
if (!$res) {
    echo "No se pudo ejecutar con exito la consulta ($sql) en la BD: " . mysql_error();
    exit;
}

if (mysql_num_rows($res) == 0) {
    echo "No se han encontrado filas, nada a imprimir, asi que voy a detenerme.";
    exit;
}

while($fila = mysql_fetch_assoc($res)) {
  print_r($fila);
}

/*
if(isset($_GET)) {
    mysql_query("INSERT INTO usuario (login, pass, nombre) VALUES ('".$_GET['login']."','".md5($_GET['pass'])."','".$_GET['nombre']."')", Conectarse() );
}
Desconectarse();
*/
