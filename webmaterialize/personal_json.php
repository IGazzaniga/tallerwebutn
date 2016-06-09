<?php
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

  $res = mysql_query("SELECT nombre, apellido, documento,legajo,fh_ingreso from personal", Conectarse() );
  #$res = mysql_query("SELECT * from usuario", Conectarse() );
  Desconectarse();
  $retorno = array();
  while($fila = mysql_fetch_assoc($res)) {
    $retorno['data'][] = $fila;
  }

  echo json_encode($retorno);
