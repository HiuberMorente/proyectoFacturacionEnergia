<?php

  //require_once "conexion.php";

  class UsuariosModel
  {

    // MOSTRAR USUARIO
    public static function modelMostrarUsuario($tabla, $item, $valor)
    {
      $url = "https://apienergy.herokuapp.com/api/";

      if ($item !== null) {


        $search = $url . $tabla . "/" . $item;
        return json_decode(file_get_contents($search), true);


      }
      if ($item !== null && $valor != null) {

        $id = $_POST["ingPassword"];
        $user = $_POST["ingUsuario"];

        $curl = curl_init();

        curl_setopt_array($curl, array(
           CURLOPT_URL => 'https://apienergy.herokuapp.com/api/' . $tabla,
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => '',
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 0,
           CURLOPT_FOLLOWLOCATION => true,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => 'POST',
           CURLOPT_POSTFIELDS => 'user=' . $user . '&pass=' . $id . '',
           CURLOPT_HTTPHEADER => array(
              'Content-Type: application/x-www-form-urlencoded'
           ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;


      } else {

        $search = $url . $tabla;
        return json_decode(file_get_contents($search), true);


      }
    }


    // INGRESAR USUARIOS
    public static function modelIngresarUsuario($datos)
    {

      $curl = curl_init();

      curl_setopt_array($curl, array(
         CURLOPT_URL => 'https://apienergy.herokuapp.com/api/login/1',
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => '',
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => 'PUT',
         CURLOPT_POSTFIELDS => 'usuario='.$datos["usuario"].'&password='.$datos["password"].'&perfil='.$datos["perfil"]
            .'&idEmpleado='.$datos["idEmpleado"].'',
         CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
         ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);

      $repuesta = json_decode($response, true);
      curl_close($curl);

      return $repuesta;


    }

    // EDITAR USUARIOS
    public static function modelEditarUsuario($tabla, $datos)
    {
//      $statement = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, `password` = :password, perfil =:perfil, foto = :foto WHERE usuario = :usuario");
//
//      $statement->bindParam(':nombre', $datos["nombre"], PDO::PARAM_STR);
//      $statement->bindParam(':password', $datos["password"], PDO::PARAM_STR);
//      $statement->bindParam(':perfil', $datos["perfil"], PDO::PARAM_STR);
//      $statement->bindParam(':foto', $datos["foto"], PDO::PARAM_STR);
//      $statement->bindParam(':usuario', $datos["usuario"], PDO::PARAM_STR);
//
//      if ($statement->execute()) {
//        return "ok";
//      } else {
//        print_r($statement->errorInfo());
//        return "error";
//      }
//
//      $statement->closeCursor();
//      $statement = null;
    }

    // ACTUALIZAR USUARIO
    public static function modelActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2)
    {

//      $statement = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");
//
//      $statement->bindParam(':' . $item1, $valor1, PDO::PARAM_STR);
//
//      $statement->bindParam(':' . $item2, $valor2, PDO::PARAM_STR);
//
//      if ($statement->execute()) {
//        return "ok";
//      } else {
//        return "error";
//      }
//
//      $statement->closeCursor();
//      $statement = null;
    }

    // BORRAR USUARIO
    public static function modelBorrarUsuario($tabla, $datos)
    {
//      $statement = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
//
//      $statement->bindParam(":id", $datos, PDO::PARAM_INT);
//
//      if ($statement->execute()) {
//        return "ok";
//      } else {
//        return "error";
//      }
//
//      $statement->closeCursor();
//      $statement = null;
    }

  }
