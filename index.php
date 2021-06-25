<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA CRUD</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

    <script src="librerias/jquery-3.6.0.min.js" ></script>
    <script src="js/funciones.js" ></script>
    <script src="librerias/bootstrap-4.5.0-dist/js/bootstrap.js" ></script>
    <script src="librerias/alertifyjs/alertify.js" ></script>

</head>
<body>

   <div class="container">
       <div id="tabla"></div>
   </div>

<!-- Nuevos datos Modal -->
<div class="modal fade" id="modalNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Alumno</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         
         <label>Nombre:</label>
         <input type="text" name="" id="nombre" class="form-control input-sm">
         <label>Matricula:</label>
         <input type="text" name="" id="matricula" class="form-control input-sm">
         <label>Turno:</label>
         <input type="text" name="" id="turno" class="form-control input-sm">
         <label>Carrera:</label>
         <input type="text" name="" id="carrera" class="form-control input-sm">
         <label>Correo:</label>
         <input type="text" name="" id="correo" class="form-control input-sm">

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo" >Agregar</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Editar datos Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Alumno</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <input type="text" hidden="" id="id" class="form-control input-sm">
         <label>Nombre:</label>
         <input type="text" name="" id="nombre1" class="form-control input-sm">
         <label>Matricula:</label>
         <input type="text" name="" id="matricula1" class="form-control input-sm">
         <label>Turno:</label>
         <input type="text" name="" id="turno1" class="form-control input-sm">
         <label>Carrera:</label>
         <input type="text" name="" id="carrera1" class="form-control input-sm">
         <label>Correo:</label>
         <input type="text" name="" id="correo1" class="form-control input-sm">

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos" >Actualizar</button>
        
      </div>
    </div>
  </div>
</div>
    
</body>
</html>

<script type="text/javascript" >
$(document).ready(function(){

    $('#tabla').load('componentes/tabla.php')

});
</script>

<script type="text/javascript" >
$(document).ready(function(){

    $('#guardarnuevo').click(function(){
      nombre=$('#nombre').val();
      matricula=$('#matricula').val();
      turno=$('#turno').val();
      carrera=$('#carrera').val();
      correo=$('#correo').val();
      agregardatos(nombre,matricula,turno,carrera,correo);

    });

    $('#actualizadatos').click(function(){

      actualizadatos();

    });

});

</script>