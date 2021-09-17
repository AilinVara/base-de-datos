<?php
$nombre = $_REQUEST["nombre"];
$clave = $_REQUEST["clave"];
$mail = $_REQUEST["mail"];
$fecha = $_REQUEST["fecha"];

include "loquequieras.php";

$sql = "insert into usuario (nombre,clave,mail,fecha_nac) values ('$nombre','$clave','$mail','$fecha')";

$a=$conexion->query($sql);

if(!$a){
    echo $conexion->error;
}