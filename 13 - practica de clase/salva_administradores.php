<?php
require "conecta.php";

//Recibe variables
$nombre     = $_REQUEST['nombre'];
$apellidos     = $_REQUEST['apellidos'];

//Encripta contraseña
$pass = $_REQUEST['pass'];

//Recibe y procesa archivo
$file_name = $_FILES['archivo']['name'];

//Inserta en BD                                         *rol no lleva comillas porque es entero
$sql = "INSERTAR INTO administradores VALUES      
        (0, '$nombre', '$apellidos','$correo','$pass', $rol, 
        '$archivo_n','$archivo',1,0)"; //guardamos el nombre original del archivo, como el nuevo nombre

$res = mysql_query($sql, $con);

  header("Location: lista_administrador");     //redireccionamiento al listado administradores 
  //no debe haber un echo antes del header para la siguiente practica
?>