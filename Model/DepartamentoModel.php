<?php

//require_once "conexion.php";

class DepartamentoModel
{

  public static function modelMostrarDepartamento($tabla, $item, $valor)
  {
    $url = "http://apienergy.herokuapp.com/api/";
    if ($item != null) {

      $search = $url. $tabla . "/" . $item;

      $json = file_get_contents($search);
      $datosDepartamento = json_decode($json, true);
      return $datosDepartamento;


    }else {

      $search = $url . $tabla;

      $json = file_get_contents($search);
      $datosDepartamento = json_decode($json, true);
      return $datosDepartamento;
    }
  }
}