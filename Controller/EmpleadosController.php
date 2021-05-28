<?php

  class EmpleadosController
  {


    public static function controllerMostrarEmpleado($item, $valor)
    {
      $tabla = "empleado";

      return EmpleadosModel::modelMostrarEmpleado($tabla, $item, $valor);

    }

    public static function controllerCrearEmpleado()
    {
      if (isset($_POST["nuevoDpi"])) {
        if (
           preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoDpi"]) &&
           preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
           preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellido"]) &&
           preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoTelefono"]) &&
           preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ@.]+$/', $_POST["nuevoEmail"]) &&
           preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaDireccionDomiciliar"])
        ) {


          $tabla = "empleado";

          $datos = array(
             'dpi' => $_POST["nuevoDpi"],
             'nombre' => $_POST["nuevoNombre"],
             'apellido' => $_POST["nuevoApellido"],
             'departamentoEmpleado' => $_POST["nuevoDepartamentoEmpleado"],
             'telefono' => $_POST["nuevoTelefono"],
             'email' => $_POST["nuevoEmail"],
             'direccionDomiciliar' => $_POST["nuevaDireccionDomiciliar"],
             'departamento' => $_POST["nuevoDepartamento"],
             'municipio' => $_POST["nuevoMunicipio"]
          );

          $respuesta = EmpleadosModel::modelIngresarEmpleado($tabla, $datos);

          if ($respuesta === "ok") {
            echo '<script>
                        Swal.fire({
                            icon: "success",
                            title: "¡El empleado ha sido guardado correctamente!",
                            confirmButtonText: "Cerrar"
                        }).then((result) => {
                            if(result.value){
                                window.location = "empleados";
                            }
                        });     
                    
                    </script>';
          }
        } else {
          echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "¡El empleado no puede ir vacío o llevar caracteres especiales!",
                    confirmButtonText: "Cerrar"
                }).then((result) => {
                    if(result.value){
                        window.location = "empleados";
                    }
                });     
                
                </script>';
        }
      }
    }

  }