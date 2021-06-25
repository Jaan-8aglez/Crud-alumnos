<?php

require_once "conexion.php";
$conexion=conexion();
$id=$_POST['id'];
$n=$_POST['nombre'];
$m=$_POST['matricula'];
$t=$_POST['turno'];
$c=$_POST['carrera'];
$r=$_POST['correo'];

$sql="UPDATE registros set nombre='$n',
                           matricula='$m',
                           turno='$t',
                           carrera='$c',
                           correo='$r'

                           where id='$id'";

                           echo $result=mysqli_query($conexion, $sql);
?>