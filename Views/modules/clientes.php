<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Administrar clientes

          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio" class=" text-dark"></i>Inicio</a></li>
            <li class="breadcrumb-item active">Administrar clientes</li>
          </ol>
        </div>
      </div>
    </div>
  </section>


  <section class="content">

    <div class="card">
      <div class="card-header with-border">

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarCliente">
          Agregar clientes
        </button>

      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">

            <table id="tabla" class="table table-bordered table-striped display nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>

                  <th width="10px">#</th>
                  <th>DPI</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>NIT</th>
                  <th>Direccion</th>
                  <th>Correo</th>
                  <th>Telefono</th>
                  <th>Tipo</th>
                  <th>Estado</th>
                  <th>Acciones</th>

                </tr>
              </thead>

              <tbody>

                <?php

                $item = null;
                $valor = null;
                $clientes = ClientModel::getClients();

                foreach ($clientes as $key => $value) {

                  echo '<tr>
                          <td>'.($key + 1).'</td>
                          <td>' . $value["dpi"] . '</td>
                          <td>' . $value["nombre"] . '</td>
                          <td>' . $value["apellido"] . '</td>
                          <td>' . $value["nit"] . '</td>
                          <td>' . $value["direccionDomiciliar"] . '</td>
                          <td>' . $value["email"] . '</td>
                          <td>' . $value["telefono"] . '</td>';
                          $item = "id";
                          $valor = $value ["idTipoCliente"];
                          $tipoCliente = ControllerTipoCliente::controllerMostrarTipoCliente ($item, $valor);
                          
                          
                          echo '<td>' . $tipoCliente["tipoCliente"] . '</td>

                          <td>' . $value["estado"] . '</td>';
                          
                  
                  
                  echo '<td>
                          <div class="btn-group">
                            
                            <button type="" class="btn btn-warning btnEditarCliente" idCliente="' . $value["id"] . '" data-bs-toggle="modal" data-bs-target="#EditarCliente"><i class="fa fa-pen text-white"></i></button>
                            
                            <button type="" class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" ><i class="fa fa-times" ></i></button>

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
MODAL REGISTRO CLIENTE
==================================-->
<!-- Modal -->
<div class="modal fade" id="modalAgregarCliente" role="dialog">

  <div class="modal-dialog">
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">
        <!--==================================
        MODAL HEADER
        ==================================-->
        <div class="modal-header bg-secondary">

          <h4 class="modal-title">Agregar Cliente</h4>
          <button type="button" class="btn-close quitarAlerta" data-bs-dismiss="modal" aria-label="Close"></button>

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
                <input type="text" class="form-control input-lg" name="nuevoDpi" placeholder="Ingresar dpi" required>
              </div>


              <!-- nombre -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>
              </div>

                <!-- apellido -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoApellido" placeholder="Ingresar apellido" required>
              </div>

                <!-- nit -->
                <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoNit" placeholder="Ingresar nit" required>
              </div>

              <!-- direccionDomiciliar -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoDireccionDomiciliar" placeholder="Ingresar direccionDomiciliar" required>
              </div>

              
              <!-- email -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>
              </div>

              <!-- telefono -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar telefono" required>
              </div>


              <!-- tipoCliente -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-users"></i>
                </span>
                <select name="nuevoTipoCliente" class="form-select text-gray">
                  <option value="">Selecionar tipo de cliente</option>
                  <?php
                      $item = null;
                      $valor = null;

                      $tipoMedidor = TypeEnergyMetersModel::getTypeEnergyMeters();

                      foreach($tipoMedidor as $key => $value){
                        echo '<option value="'.$value["id"].'">'.$value["tipoCliente"].'</option>';
                      }

                  
                  ?>
                </select>
              </div>

                
          
            </div>
          </div>

        </div>

        <!--==================================
        MODAL FOOTER
        ==================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default d-flex quitarAlerta" data-bs-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary ml-auto">Guardar usuario</button>

        </div>


        <?php

        //$crearUsuario = new ControllerUsuarios();
        //$crearUsuario->controllerCrearUsuario();

        ?>

      </form>

    </div>
  </div>
</div>



<!--==================================
MODAL EDITAR CLIENTE
==================================-->
<!-- Modal -->
<div id="EditarCliente" class="modal fade" role="dialog">

  <div class="modal-dialog">
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">
        <!--==================================
        MODAL HEADER
        ==================================-->
        <div class="modal-header bg-secondary">

          <h4 class="modal-title">Editar Cliente</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

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
                <input type="text" class="form-control input-lg" name="nuevoDpi" id="editarDPI" placeholder="Ingresar dpi" required>
              </div>


              <!-- nombre -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoNombre" id="editarNombre" placeholder="Ingresar nombre" required>
              </div>

                <!-- apellido -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoApellido" id="editarApellido" placeholder="Ingresar apellido" required>
              </div>

                <!-- nit -->
                <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoNit" id="editarNit" placeholder="Ingresar nit" required>
              </div>

              <!-- direccionDomiciliar -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoDireccionDomiciliar" id="editarDireccionDomiciliar" placeholder="Ingresar direccionDomiciliar" required>
              </div>

              
              <!-- email -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoEmail" id="editarEmail" placeholder="Ingresar email" required>
              </div>

              <!-- telefono -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoTelefono" id="editarTeleono" placeholder="Ingresar telefono" required>
              </div>



              <!-- tipoCliente -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-users"></i>
                </span>
                <select name="nuevoTipoCliente" class="form-select text-gray">
                <option value="" id="editarTipoCliente"></option>
                  <option value="Residencial">Residencial</option>
                  <option value="Industrial">Industrial</option>
                </select>
              </div>

            </div>
          </div>
        </div>
        <!--==================================
        MODAL FOOTER
        ==================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default d-flex" data-bs-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary ml-auto">Guardar cambios</button>

        </div>

        <?php

        //$crearUsuario = new ControllerUsuarios();
        //$crearUsuario->controllerEditarUsuario();

        ?>


      </form>

    </div>
  </div>
</div>

<?php 

  //$borrarUsuario = new ControllerUsuarios();
  //$borrarUsuario -> controllerBorrarUsuario();

?>