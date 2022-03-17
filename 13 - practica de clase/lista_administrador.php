<?php
   
  require "conecta.php";
  $con = conecta();
                // SELECT (*) todas las columnas y filas
  $sql = "SELECT *
          FROM administradores
          WHERE status = 1 AND eliminado = 0";
  $res = mysql_query($sql, $con);    //guardo en mi variable res consulta y conexion
  $num = mysql_num_rows($res);      //devuelve el numero de filas de la variable resultado (res)
  
  //for que imprime todos los administradores
  for($i = 0; $i < $num; $i++){
      $id           = mysql_result($res, $i, "id");
      $nombre       = mysql_result($res, $i, "nombre");
      $apellidos    = mysql_result($res, $i, "apellidos");
      echo "$id - $nombre $apellidos <br>";
  }   
  ///meter en una tabla para la siguiente practica
?>