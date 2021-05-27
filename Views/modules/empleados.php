<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Administrar empleados
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio" class=" text-dark">Inicio</a></li>
            <li class="breadcrumb-item active">Administrar empleados</li>
          </ol>
        </div>
      </div>
    </div>
  </section>


  <section class="content">

    <div class="card">
      <div class="card-header with-border">

        <button
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#modalAgregarEmpleado">
          Agregar empleado
        </button>

      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">

            <table
                id="tabla"
                class="table table-bordered table-striped display nowrap"
                cellspacing="0"
                width="100%">
              <thead>
                <tr>

                  <th width="10px">#</th>
                  <th>DPI</th>
                  <th>Nombre</th>
                  <th>Departamento</th>
                  <th>Teléfono</th>
                  <th>Email</th>
                  <th>Direccion</th>
                  <th>Estado</th>
                  <th>Acciones</th>

                </tr>
              </thead>

              <tbody>

              <?php

                $item = null;
                $valor = null;
                $empleados =ControllerEmpleados::controllerMostrarEmpleado($item, $valor);


                foreach ($empleados as $key => $value) {

                  echo '<tr>
                            <td>' . ($key + 1) . '</td>
                            <td>' . $value["dpi"] . '</td>
                            <td>' . $value["nombre"] . ' ' . $value['apellido'] . '</td>';

                  $item =
                      "id";
                  $valor =
                      $value["idDepartamentoEmpleado"];

                  $departamentoEmpleado =
                      ControllerDepartamentoEmpleado::controllerMostrarDepartamentoEmpleado($item, $valor);

                  echo '<td>' . $departamentoEmpleado["departamento"] . '</td>
                        <td>' . $value["telefono"] . '</td>
                        <td>' . $value["email"] . '</td>';

                  $item =
                      "id";
                  $valor =
                      $value["idDepartamento"];

                  $departamento =
                      ControllerDepartamento::controllerMostrarDepartamento($item, $valor);

                  $item =
                      "id";
                  $valor =
                      $value["idMunicipio"];

                  $municipio =
                      ControllerMunicipio::controllerMostrarMunicipio($item, $valor);

                  echo '<td>' . $value["direccionDomiciliar"] . ', ' . $departamento["departamento"] . ', ' . $municipio["municipio"] . '</td>';

                  if ($value["estado"] != 0) {

                    echo '<td><button
                            class="btn btn-success btn-xs btnActivarEmpleado"
                            idEmpleado="' . $value["id"] . '"
                            estadoEmpleado="0" >Activado</button></td>';
                  } else {

                    echo '<td><button
                        class="btn btn-danger btn-xs btnActivarEmpleado"
                        idEmpleado="' . $value["id"] . '"
                        estadoEmpleado="1" >Desactivado</button></td>';
                  }

                  echo '<td>
                        <div class="btn-group">
                            
                            <button
                                type=""
                                class="btn btn-warning btnEditarUsuario"
                                idUsuario="' . $value["id"] . '"
                                data-bs-toggle="modal"
                                data-bs-target="#EditarEmpleado"><i
                                class="fa fa-pen text-white"></i></button>
                            
                            <button
                                type=""
                                class="btn btn-danger btnEliminarUsuario"
                                idUsuario="' . $value["id"] . '" ><i
                                class="fa fa-times" ></i></button>
  
                        </div>
                      </td>
                   </tr>';
                }

              ?>

              </tbody>

            </table>

          </div>
        </div>

      </div>

    </div>

  </section>
</div>


<!--==================================
MODAL REGISTRO USUARIO
==================================-->
<!-- Modal -->
<div class="modal fade" id="modalAgregarEmpleado" role="dialog">

  <div class="modal-dialog">
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">
        <!--==================================
MODAL HEADER
==================================-->
        <div class="modal-header bg-secondary">

          <h4 class="modal-title">Agregar empleado</h4>
          <button
              type="button"
              class="btn-close quitarAlerta"
              data-bs-dismiss="modal"
              aria-label="Close"></button>

        </div>

        <!--==================================
MODAL BODY
==================================-->
        <div class="modal-body">

          <div class="box-body">

            <div class="form-group">


              <!-- dpi -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="nuevoDpi"
                    placeholder="Ingresar DPI" required>
              </div>


              <!-- nombre -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="nuevoNombre"
                    placeholder="Ingresar nombre" required>
              </div>

              <!-- apellido -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="nuevoApellido"
                    placeholder="Ingresar apellido" required>
              </div>


              <!-- departamento empleado -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <select


                    name="nuevoDepartamentoEmpleado"
                    class="form-select text-gr">
                  <option value="0">Seleccionar Departamento</option>
                  <?php

                    $item =
                        null;
                    $valor =
                        null;
                    $departamentoEmpleado =
                        ControllerDepartamentoEmpleado::controllerMostrarDepartamentoEmpleado($item, $valor);

                    foreach ($departamentoEmpleado as $key => $value) {
                      echo '<option value="' . $value["id"] . '">' . $value["departamento"] . '</option>';
                    }

                  ?>
                </select>
              </div>

              <!-- telefomo -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="nuevoTelefono"
                    placeholder="Ingresar telefono" required>
              </div>

              <!-- email -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="nuevoEmail"
                    placeholder="Ingresar email" required>
              </div>

              <!-- direccion Domiciliar -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="nuevaDireccionDomiciliar"
                    placeholder="Ingresar domicilio" required>
              </div>


              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <select
                    id="departamento"
                    name="nuevoDepartamento"
                    class="form-select text-gr"
                    onchange="selectDepartamento()">
                  <option value="0">Seleccionar Departamento</option>

                  <?php

                    $item =
                        null;
                    $valor =
                        null;

                    $departamento =
                        ControllerDepartamento::controllerMostrarDepartamento($item, $valor);

                    foreach ($departamento as $key => $value) {

                      echo '<option value="' . $value["id"] . '">' . $value["departamento"] . '</option>';

                    }

                  ?>

                </select>
              </div>


              <!-- municipio  -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <select name="nuevoMunicipio" id="municipio" class="form-select text-gr" disabled>
                  <option value="0">Seleccione municipio</option>
                </select>

              </div>

            </div>
          </div>

        </div>

        <!--==================================
MODAL FOOTER
==================================-->
        <div class="modal-footer">
          <button
              type="button"
              class="btn btn-default d-flex quitarAlerta"
              data-bs-dismiss="modal">
            Salir
          </button>

          <button type="submit" class="btn btn-primary ml-auto">Guardar cambios</button>

        </div>


        <?php

          $crearEmpleado =
              new ControllerEmpleados();
          $crearEmpleado->controllerCrearEmpleado();

        ?>

      </form>

    </div>
  </div>
</div>


<!--==================================
MODAL EDITAR USUARIO
==================================-->
<!-- Modal -->
<div id="EditarEmpleado" class="modal fade" role="dialog">

  <div class="modal-dialog">
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">
        <!--==================================
MODAL HEADER
==================================-->
        <div class="modal-header bg-secondary">

          <h4 class="modal-title">Editar usuario</h4>
          <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>

        </div>

        <!--==================================
MODAL BODY
==================================-->
        <div class="modal-body">
          <div class="box-body">

            <div class="form-group">

              <!-- dpi -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="editarDpi"
                    id="editarDpi" readonly>
              </div>


              <!-- nombre -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="editarNombre"
                    id="editarNombre">
              </div>

              <!-- apellido -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="editarApellido"
                    id="editarApellido">
              </div>


              <!-- departamento empleado -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="editarDepartamentoEmpleado"
                    id="editarDepartamentoEmpleado">
              </div>

              <!-- telefomo -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="editarTelefono"
                    id="editarTelefono">
              </div>

              <!-- email -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="editarEmail"
                    id="editarEmail">
              </div>

              <!-- direccion Domiciliar -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="editarDireccionDomiciliar"
                    id="editarDireccionDomiciliar">
              </div>

              <!-- departamento -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="editarDepartamento"
                    id="editarDepartamento">
              </div>

              <!-- municipio  -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
                <input
                    type="text"
                    class="form-control input-lg"
                    name="editarMunicipio"
                    id="editarMunicipio">
              </div>


            </div>
          </div>
        </div>
        <!--==================================
MODAL FOOTER
==================================-->
        <div class="modal-footer">
          <button
              type="button"
              class="btn btn-default d-flex"
              data-bs-dismiss="modal">
            Salir
          </button>

          <button type="submit" class="btn btn-primary ml-auto">Guardar cambios</button>

        </div>

        <?php

          $crearUsuario =
              new ControllerUsuarios();
          $crearUsuario->controllerEditarUsuario();

        ?>


      </form>

    </div>
  </div>
</div>

<?php

  $borrarUsuario =
      new ControllerUsuarios();
  $borrarUsuario->controllerBorrarUsuario();

?>


