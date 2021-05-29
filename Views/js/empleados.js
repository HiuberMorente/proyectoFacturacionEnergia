
function selectDepartamento() {

    let idDepartamento = $('#departamento').val();

    $.ajax({
        url:"ajax/empleados.ajax.php",
        method: "POST",
        data: {
            "id": idDepartamento
        },
        success: function(respuesta){

            $('#municipio').attr("disabled", false);
            $('#municipio').html(respuesta);
        }
    });

}



// ACTIVAR USAURIO
$(document).on("click", ".btnActivarEmpleado", function () {

    var idEmpleado = $(this).attr("idEmpleado");
    var estadoEmpleado = $(this).attr("estadoEmpleado");

    var datos = new FormData();
    datos.append("activarId", idEmpleado);
    datos.append("activarEmpleado", estadoEmpleado);

    $.ajax({
        url: "ajax/empleados.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
            if (window.matchMedia("(max-width: 767px)").matches) {
                Swal.fire({
                    icon: "success",
                    title: "¡El empleado ha sido actualizado!",
                    confirmButtonText: "Cerrar"
                }).then((result) => {
                    if (result.value) {
                        window.location = "empleados";
                    }
                });
            }
        }
    });

    if (estadoEmpleado == 0) {

        $(this).removeClass('btn-success');
        $(this).addClass('btn-danger');
        $(this).html('Desactivado');
        $(this).attr('estadoEmpleado', 1);

    } else {

        $(this).addClass('btn-success');
        $(this).removeClass('btn-danger');
        $(this).html('Activado');
        $(this).attr('estadoEmpleado', 0);

    }

});
