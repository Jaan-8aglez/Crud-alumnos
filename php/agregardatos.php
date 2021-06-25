<?php

require_once "conexion.php";
$conexion=conexion();
$n=$_POST['nombre'];
$m=$_POST['matricula'];
$t=$_POST['turno'];
$c=$_POST['carrera'];
$r=$_POST['correo'];

$sql="INSERT into registros(nombre,matricula,turno,carrera,correo)
    values('$n','$m','$t','$c','$r')";
    echo $result=mysqli_query($conexion, $sql);
?>