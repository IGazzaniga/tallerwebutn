<?php
  print_r($_POST);
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
$sql = "INSERT INTO personal(nombre, apellido, documento,legajo ,horas,fh_ingreso) VALUES ('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['documento']."','".$_POST['legajo']."','".$_POST['horas']."','".$_POST['fecha_ingreso']."')";
  echo $sql;
  $res = mysql_query($sql, Conectarse() );
  #$res = mysql_query("SELECT * from usuario", Conectarse() );

  if(mysql_affected_rows(Conectarse())) echo 'OK';

  Desconectarse();
