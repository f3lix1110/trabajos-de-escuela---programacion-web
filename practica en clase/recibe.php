<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $rol    = $_POST['rol'];
    //$rol    = $_GET['rol'];
    //$rol    = $_REQUEST['rol'];
    $rol_txt = ($rol == 1) ? 'Administrador' : 'Usuario';
    
    echo "Bienvenido $nombre <br>";
    echo "$correo / $rol_txt";
?>