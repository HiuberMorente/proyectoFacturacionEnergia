<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Administrar medidores

          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio" class=" text-dark"></i>Inicio</a></li>
            <li class="breadcrumb-item active">Administrar medidores</li>
          </ol>
        </div>
      </div>
    </div>
  </section>


  <section class="content">

    <div class="card">
      <div class="card-header with-border">

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarMedidor">
          Agregar medidores
        </button>

      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">

            <table id="tabla" class="table table-bordered table-striped display nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>

                  <th width="10px">#</th>
                  <th>Medidor</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Tipo</th>
                  <th>Descripción</th>
                  <th>Acciones</th>

                </tr>
              </thead>

              <tbody>

                <?php

                $item = null;
                $valor = null;
                $medidores = ControllerMedidor::controllerMostrarMedidor($item, $valor);

                foreach ($medidores as $key => $value) {

                  echo '<tr>
                          <td>'.($key + 1).'</td>
                          <td>' . $value["medidor"] . '</td>
                          <td>' . $value["marca"] . '</td>
                          <td>' . $value["modelo"] . '</td>';
                         
                          $item = "id";
                          $valor = $value ["idTipoMedidor"];
                          $tipoMedidor = ControllerTipoMedidor::controllerMostrarTipoMedidor ($item, $valor);
                          
                          
                          echo '<td>' . $tipoMedidor["tipoMedidor"] . '</td>

                          <td>' . $value["descripcion"] . '</td>';
                          
                  
                  
                  echo '<td>
                          <div class="btn-group">
                            
                            <button type="" class="btn btn-warning btnEditarMedidor" idCMedidor="' . $value["id"] . '" data-bs-toggle="modal" data-bs-target="#EditarMedidor"><i class="fa fa-pen text-white"></i></button>
                            
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
MODAL REGISTRO MEDIDOR
==================================-->
<!-- Modal -->
<div class="modal fade" id="modalAgregarMedidor" role="dialog">

  <div class="modal-dialog">
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">
        <!--==================================
        MODAL HEADER
        ==================================-->
        <div class="modal-header bg-secondary">

          <h4 class="modal-title">Agregar Medidor</h4>
          <button type="button" class="btn-close quitarAlerta" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>

        <!--==================================
        MODAL BODY
        ==================================-->
        <div class="modal-body">

          <div class="box-body">

            <div class="form-group">

               <!-- medidor-->
               <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoMedidor" placeholder="Ingresar medidor" required>
              </div>


              <!-- marca -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoMarca" placeholder="Ingresar marca" required>
              </div>

                <!-- modelo -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoModelo" placeholder="Ingresar modelo" required>
              </div>


              <!-- tipoMedidor -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-users"></i>
                </span>
                <select name="nuevoTipoMedidor" class="form-select text-gray">
                  <option value="">Selecionar tipo de medidor</option>
                  <?php
                      $item = null;
                      $valor = null;

                      $tipoMedidor = ControllerTipoMedidor::controllerMostrarTipoMedidor($item,$valor);

                      foreach($tipoMedidor as $key => $value){
                        echo '<option value="'.$value["id"].'">'.$value["tipoMedidor"].'</option>';
                      }

                  
                  ?>
                </select>
              </div>

              <!-- descripcion -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoDescripcion" placeholder="Ingresar descripcion" required>
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
MODAL EDITAR MEDIDOR
==================================-->
<!-- Modal -->
<div id="EditarMedidor" class="modal fade" role="dialog">

  <div class="modal-dialog">
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">
        <!--==================================
        MODAL HEADER
        ==================================-->
        <div class="modal-header bg-secondary">

          <h4 class="modal-title">Editar Medidor</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>

        <!--==================================
        MODAL BODY
        ==================================-->
        <div class="modal-body">
          <div class="box-body">

            <div class="form-group">

             <!-- medidor -->
             <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoMedidor" id="editarMedidor" placeholder="Ingresar medidor" required>
              </div>


              <!-- marca -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoMarca" id="editarMarca" placeholder="Ingresar marca" required>
              </div>

                <!-- modelo -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoModelo" id="editarModelo" placeholder="Ingresar modelo" required>
              </div>

              <!-- tipoMedidor -->
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-users"></i>
                </span>
                <select name="nuevoTipoCliente" class="form-select text-gray">
                <option value="" id="editarTipoMedidor"></option>
                <?php
                      $item = null;
                      $valor = null;

                      $tipoMedidor = ControllerTipoMedidor::controllerMostrarTipoMedidor($item,$valor);

                      foreach($tipoMedidor as $key => $value){
                        echo '<option value="'.$value["id"].'">'.$value["tipoMedidor"].'</option>';
                      }

                  
                  ?>
                </select>
              </div>

               <!-- descripcion -->
               <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control input-lg" name="nuevoDescripcion" id="editarDescripcion" placeholder="Ingresar Descripcion" required>
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