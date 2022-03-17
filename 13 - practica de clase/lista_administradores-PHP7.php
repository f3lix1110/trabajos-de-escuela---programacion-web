<?php
$conn = mysqli_connect("localhost", "root", "","curso_tienda") or trigger_error(mysql_error(),E_USER_ERROR);
$sql  = "SELECT * FROM categorias ORDER BY nombre_categoria ASC";
$res  = mysqli_query($con,$sql) or die(mysql_error());
$fila = mysqli_fetch_assoc($res);

do {
  echo $fila['nombre']."<br>";
} while ($fila = mysqli_fetch_assoc($res));

mysqli_free_result($res);

/*
$row = mysqli_fetch_assoc($res);
$nombre = $row['nombre'];
*/
?>