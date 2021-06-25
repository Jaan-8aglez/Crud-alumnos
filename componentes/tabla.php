<?php

require_once "../php/conexion.php";
$conexion= conexion();

?>

<div class="row">
    <div class="col-sm-12">
      <p><h2>CRUD</h2></p>

        <table class="table table-hover table-condensed table-bordered" > 
        <caption> <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">Agregar nuevo</button> 
        </caption>

        <tr>
        <td>Nombre</td>
        <td>Matricula</td>
        <td>Turno</td>
        <td>Carrera</td>
        <td>Correo</td>
        <td>Editar</td>
        <td>Eliminar</td>
        </tr>

      <?php
        $sql="SELECT id,nombre,matricula,turno,carrera,correo from registros";
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){

             $datos=$ver[0]."||".
                    $ver[1]."||".
                    $ver[2]."||".
                    $ver[3]."||".
                    $ver[4]."||".
                    $ver[5];
      ?>    
        
        <tr>
        <td> <?php echo $ver[1]?></td>
        <td> <?php echo $ver[2]?></td>
        <td> <?php echo $ver[3]?></td>
        <td> <?php echo $ver[4]?></td>
        <td> <?php echo $ver[5]?></td>
        
        <td> 
           <button class="btn btn-warning" data-toggle="modal" data-target="#modalEditar" onclick="agregaform('<?php echo $datos ?>')"> </button>
        </td>
        <td> 
           <button class="btn btn-danger" onclick="preguntarSiNo('<?php echo $ver[0] ?>')"></button>
        </td>
        
        </tr>
      <?php  
        }
         ?>
        </table>
    </div> 
</div>   