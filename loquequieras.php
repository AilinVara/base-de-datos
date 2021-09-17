<?php
$conexion = new mysqli("localhost","root","","labase");
if ($conexion->connect_error)
{
    echo $conexion->connect_error;
}
