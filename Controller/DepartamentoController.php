<?php


  class DepartamentoController
  {
    static public function controllerMostrarDepartamento($item, $valor)
    {

      $tabla = "departamento";

      $respuesta = DepartamentoModel::modelMostrarDepartamento($tabla, $item, $valor);

      return $respuesta;
    }

  }

