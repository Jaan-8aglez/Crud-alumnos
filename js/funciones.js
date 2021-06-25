function agregardatos(nombre, matricula, turno, carrera, correo) {
  cadena =
    "nombre=" +
    nombre +
    "&matricula=" +
    matricula +
    "&turno=" +
    turno +
    "&carrera=" +
    carrera +
    "&correo=" +
    correo;

  $.ajax({
    type: "POST",
    url: "php/agregardatos.php",
    data: cadena,
    success: function (r) {
      if (r == 1) {
        $("#tabla").load("componentes/tabla.php");
        alertify.success("Se agrego con exito :)");
      } else {
        alertify.error("Fallo el servidor :(");
      }
    },
  });
}

function agregaform(datos) {
  d = datos.split("||");
  $("#id").val(d[0]);
  $("#nombre1").val(d[1]);
  $("#matricula1").val(d[2]);
  $("#turno1").val(d[3]);
  $("#carrera1").val(d[4]);
  $("#correo1").val(d[5]);
}

function actualizadatos() {
  id = $("#id").val();
  nombre = $("#nombre1").val();
  matricula = $("#matricula1").val();
  turno = $("#turno1").val();
  carrera = $("#carrera1").val();
  correo = $("#correo1").val();

  cadena =
    "id=" +
    id +
    "&nombre=" +
    nombre +
    "&matricula=" +
    matricula +
    "&turno=" +
    turno +
    "&carrera=" +
    carrera +
    "&correo=" +
    correo;
  $.ajax({
    type: "POST",
    url: "php/actualizadatos.php",
    data: cadena,
    success: function (r) {
      if (r == 1) {
        $("#tabla").load("componentes/tabla.php");
        alertify.success("Se actualizo con exito :)");
      } else {
        alertify.error("Fallo el servidor :(");
      }
    },
  });
}

function preguntarSiNo(id) {
  alertify.confirm('Eliminar datos', '¿Desea eliminar el registro?', function () {
    eliminardatos(id)
  }, function () {
    alertify.error('Cancelado')
  });
}

function eliminardatos(id) {

  cadena = "id=" + id;
  $.ajax({
    type: "POST",
    url: "php/eliminardatos.php",
    data: cadena,
    success: function (r) {
      if (r == 1) {
        $("#tabla").load("componentes/tabla.php");
        alertify.success("Se elimino con exito :)");
      } else {
        alertify.error("Fallo el servidor :(");
      }
    },
  });

}