<?php

//  require_once "conexion.php";


  class  DepartamentoEmpleadoModel
  {

    static public function modelMostrarDepartamentoEmpleado($tabla, $item, $valor)
    {


      $url = "http://apienergy.herokuapp.com/api/";

      if ($item != null) {

        $search = $url . $tabla."/".$item;
        $json = file_get_contents($search);
        $datosDeptoEmpleado = json_decode($json, true);
        return $datosDeptoEmpleado;

        var_dump($datosDeptoEmpleado);


//        $statement = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
//
//        $statement->bindParam(":" . $item, $valor, PDO::PARAM_STR);
//
//        $statement->execute();
//
//        return $statement->fetch();
//
//        $statement->closeCursor();
//
//        $statement = null;

      } else {

        $search = $url . $tabla;
        $json = file_get_contents($search);
        $datosDeptoEmpleado = json_decode($json, true);
        return $datosDeptoEmpleado;


//        $statement = Conexion::conectar()->prepare("SELECT * FROM $tabla");
//
//        $statement->execute();
//
//        return $statement->fetchAll();
//
//        $statement->closeCursor();
//
//        $statement = null;
      }
    }
  }

