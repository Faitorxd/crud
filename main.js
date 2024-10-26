$(document).ready(function () {
    Mostrar()
  $("#formulario").submit(function (e) {
    e.preventDefault();
    let nombre = $("#nombre").val();
    let cantidad = $("#cantidad").val();
    let precio = $("#precio").val();
    let categoria = $("#categoria").val();
    $.ajax({
      type: "post",
      url: "ingresarDatos.php",
      data: {
        nombreProducto: nombre,
        cantidad: cantidad,
        precio: precio,
        categoria: categoria,
      },
      success: function (response) {
        alert("Se añadido el producto ");
        console.log(response);
        Mostrar()
        $("#nombre").val("")
      },
      error: function (error) {
        alert("No se ha podido añadir el producto");
        console.log(error);
      },
    });
  });
  function Mostrar() {
    $.ajax({
      type: "get",
      url: "mostrarDatos.php",
      success: function (response) {
        $("#Datos").html(response);
        console.log(response)
      },
      error: function(error){
        console.log(error)
      }
    });
  }
  $("#Datos").on("click" , ".btn-delete" , function(){
    let indice = $(this).data("id")
    console.log(indice)
    eliminarDato(indice)
  })

  function eliminarDato(id){
    $.ajax({
      type: "post",
      url: "eliminarDatos.php",
      data: {
        codigo:id
      },
      success: function (response) {
        alert("Se elimino el dato")
        Mostrar()
      }
    });
  }
});
