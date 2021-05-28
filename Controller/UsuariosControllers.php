<?php

  class UsuariosControllers
  {

    public static function controllerUsuarioIngreso()
    {

      if (isset($_POST["ingUsuario"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {


        $curl = curl_init();

        curl_setopt_array($curl, array(
           CURLOPT_URL => 'https://apienergy.herokuapp.com/api/login',
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => '',
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 0,
           CURLOPT_FOLLOWLOCATION => true,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => 'POST',
           CURLOPT_POSTFIELDS => 'user=' . $_POST["ingUsuario"] . '&pass=' . $_POST["ingPassword"] . '',
           CURLOPT_HTTPHEADER => array(
              'Content-Type: application/x-www-form-urlencoded'
           ),
        ));

        $response = curl_exec($curl);

        $datos = json_decode($response, true);

        curl_close($curl);



        if ($response) {

          $_SESSION["iniciarSesion"] = "ok";

          foreach ($datos['empleado'] as $item) {
            $_SESSION['nombre'] = $item['nombre'];
            $_SESSION['apellido'] = $item['apellido'];
          }



          echo '<script> 
                      window.location.href = "inicio";
                  </script>';


        } else {
          echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo.</div>';
        }

      }
    }


    // MOSTRAR USUARIOS
    public static function controllerMostrarUsuario($item, $valor)
    {

      $tabla = "login";

      return UsuariosModel::modelMostrarUsuario($tabla, $item, $valor);

    }

    // CREAR USUARIOS
    public static function controllerCrearUsuario()
    {
//          if (isset($_POST["nuevoUsuario"])) {
//              if (
//                  preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
//                  preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevoUsuario"]) &&
//                  preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevoPassword"])
//              ) {
//
//
//                  $ruta = "";
//                  if($_FILES["nuevaFoto"]["tmp_name"] == ""){
//                      $_FILES["nuevaFoto"]["tmp_name"] = "Views/img/usuarios/default/anonymous.png";
//                  }
//                  // VALIDAR IMAGEN
//                  if (isset($_FILES["nuevaFoto"]["tmp_name"])) {
//
//
//                      list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
//
//                      $nuevoAncho = 500;
//                      $nuevoAlto = 500;
//
//
//                      // DIRECTORIO FOTO USUARIO
//                      $directorio = "Views/img/usuarios/" . $_POST["nuevoUsuario"];
//
//                      mkdir($directorio, 0755);
//
//
//                      // VALIDACIONES DE ACUERDO AL TIPO IMAGEN
//                      if ($_FILES["nuevaFoto"]["type"] == "image/jpeg") {
//
//                          // GUARDAR IMAGEN EN DIRECTORIO
//
//                          $aleatorio = mt_rand(100, 999);
//
//                          $ruta = "Views/img/usuarios/" . $_POST["nuevoUsuario"] . "/" . $aleatorio . ".jpeg";
//
//                          $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);
//
//                          $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
//
//                          imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
//
//                          imagejpeg($destino, $ruta);
//                      }
//
//                      if ($_FILES["nuevaFoto"]["type"] == "image/png") {
//
//                          // GUARDAR IMAGEN EN DIRECTORIO
//
//                          $aleatorio = mt_rand(100, 999);
//
//                          $ruta = "Views/img/usuarios/" . $_POST["nuevoUsuario"] . "/" . $aleatorio . ".png";
//
//                          $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);
//
//                          $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
//
//                          imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
//
//                          imagepng($destino, $ruta);
//                      }
//                  }
//
//                  $tabla = "usuarios";
//
//                  $encriptar = crypt($_POST["nuevoPassword"], '$2a$07$usesomesillystringforsalt$');
//
//                  $datos = array(
//                      'nombre' => $_POST["nuevoNombre"],
//                      'usuario' => $_POST["nuevoUsuario"],
//                      'password' => $encriptar,
//                      'perfil' => $_POST["nuevoPerfil"],
//                      'foto' => $ruta
//                  );
//
//                  $respuesta = UsuariosModel::modelIngresarUsuario($tabla, $datos);
//
//                  if ($respuesta == "ok") {
//                      echo '<script>
//                          Swal.fire({
//                              icon: "success",
//                              title: "¡Usuario ha sido guardado correctamente!",
//                              confirmButtonText: "Cerrar"
//                          }).then((result) => {
//                              if(result.value){
//                                  window.location = "usuarios";
//                              }
//                          });
//
//                      </script>';
//                  }
//              } else {
//                  echo '<script>
//                  Swal.fire({
//                      icon: "error",
//                      title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
//                      confirmButtonText: "Cerrar"
//                  }).then((result) => {
//                      if(result.value){
//                          window.location = "usuarios";
//                      }
//                  });
//
//                  </script>';
//              }
//          }
    }

    // EDITAR USUARIOS
    public static function controllerEditarUsuario()
    {
//        if (isset($_POST["editarUsuario"])) {
//            if (
//                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])
//            ) {
//
//                // VALIDAR IMAGEN
//                $ruta = $_POST["fotoActual"];
//
//                if (isset($_FILES["editarFoto"]["tmp_name"]) && !empty($_FILES["editarFoto"]["tmp_name"])) {
//
//                    list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);
//
//                    $nuevoAncho = 500;
//                    $nuevoAlto = 500;
//
//
//                    // DIRECTORIO FOTO USUARIO
//                    $directorio = "Views/img/usuarios/" . $_POST["editarUsuario"];
//
//                    // VERIFICAR SI EXISTE IMAGEN
//                    if (!empty($_POST["fotoActual"])) {
//
//                        unlink($_POST["fotoActual"]);
//
//                    } else {
//
//                        mkdir($directorio, 0755);
//                    }
//
//
//                    // VALIDACIONES DE ACUERDO AL TIPO IMAGEN
//                    if ($_FILES["editarFoto"]["type"] == "image/jpeg") {
//
//                        // GUARDAR IMAGEN EN DIRECTORIO
//
//                        $aleatorio = mt_rand(100, 999);
//
//                        $ruta = "Views/img/usuarios/" . $_POST["editarUsuario"] . "/" . $aleatorio . ".jpeg";
//
//                        $origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);
//
//                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
//
//                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
//
//                        imagejpeg($destino, $ruta);
//                    }
//
//                    if ($_FILES["editarFoto"]["type"] == "image/png") {
//
//                        // GUARDAR IMAGEN EN DIRECTORIO
//
//                        $aleatorio = mt_rand(100, 999);
//
//                        $ruta = "Views/img/usuarios/" . $_POST["editarUsuario"] . "/" . $aleatorio . ".png";
//
//                        $origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);
//
//                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
//
//                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
//
//                        imagepng($destino, $ruta);
//                    }
//                }
//
//                $tabla = "usuarios";
//
//                if ($_POST["editarPassword"] != "") {
//
//                    if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["editarPassword"])){
//
//                        $encriptar = crypt($_POST["editarPassword"], '$2a$07$usesomesillystringforsalt$');
//
//
//                    }else{
//
//                        echo '<script>
//                                Swal.fire({
//                                    icon: "error",
//                                    title: "¡La contraseña no puede ir vacío o llevar caracteres especiales!",
//                                    confirmButtonText: "Cerrar"
//                                }).then((result) => {
//                                    if(result.value){
//                                        window.location = "usuarios";
//                                    }
//                                });
//
//                            </script>';
//                    }
//
//                }else{
//
//                    $encriptar = $_POST["passwordActual"];
//
//                }
//
//
//                $datos = array(
//                    'nombre' => $_POST["editarNombre"],
//                    'usuario' => $_POST["editarUsuario"],
//                    'password' => $encriptar,
//                    'perfil' => $_POST["editarPerfil"],
//                    'foto' => $ruta
//                );
//
//                $respuesta = UsuariosModel::modelEditarUsuario($tabla, $datos);
//
//                if ($respuesta == "ok") {
//                    echo '<script>
//                        Swal.fire({
//                            icon: "success",
//                            title: "¡Usuario ha sido cambiado correctamente!",
//                            confirmButtonText: "Cerrar"
//                        }).then((result) => {
//                            if(result.value){
//                                window.location = "usuarios";
//                            }
//                        });
//
//                    </script>';
//                }
//
//            }else{
//
//                echo '<script>
//                Swal.fire({
//                    icon: "error",
//                    title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
//                    confirmButtonText: "Cerrar"
//                }).then((result) => {
//                    if(result.value){
//                        window.location = "usuarios";
//                    }
//                });
//
//                </script>';
//
//            }
//        }
    }

    // BORRAR USUARIO
    public static function controllerBorrarUsuario()
    {

//        if(isset($_GET["idUsuario"])){
//
//            $tabla = "usuarios";
//            $datos = $_GET["idUsuario"];
//
//            var_dump($_GET["fotoUsuario"]);
//            if($_GET["fotoUsuario"] != ""){
//                unlink($_GET["fotoUsuario"]);
//                rmdir('Views/img/usuarios/'.$_GET["usuario"]);
//            }
//
//            $respuesta = UsuariosModel::modelBorrarUsuario($tabla, $datos);
//
//            if ($respuesta == "ok") {
//                echo '<script>
//                    Swal.fire({
//                        icon: "success",
//                        title: "¡Usuario ha sido eliminado correctamente!",
//                        confirmButtonText: "Cerrar"
//                    }).then((result) => {
//                        if(result.value){
//                            window.location = "usuarios";
//                        }
//                    });
//
//                </script>';
//            }
//
//
//        }
    }
  }