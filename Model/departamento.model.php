<?php

require_once "conexion.php";

class ModelDepartamento
{

  static public function modelMostrarDepartamento($tabla, $item, $valor)
  {

    if ($item != null) {

      $tabla = "departamento";
      $url = "http://apienergy.herokuapp.com/api/" . $tabla . "/" . $item;

      $json = file_get_contents($url);
      $datosDepartamento = json_decode($json, true);
      return $datosDepartamento;


    } else {

      $tabla = "departamento";
      $url = "http://apienergy.herokuapp.com/api/" . $tabla;

      $json = file_get_contents($url);
      $datosDepartamento = json_decode($json, true);
      return $datosDepartamento;

    }
  }
}