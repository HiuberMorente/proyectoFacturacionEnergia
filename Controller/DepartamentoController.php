<?php


  class DepartamentoController
  {
    public static function controllerMostrarDepartamento($item, $valor)
    {

      $tabla = "departamento";

      return DepartamentoModel::modelMostrarDepartamento($tabla, $item, $valor);

    }

  }

