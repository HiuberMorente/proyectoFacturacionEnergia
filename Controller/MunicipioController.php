<?php

  class MunicipioController
  {


    static public function controllerMostrarMunicipio($item, $valor)
    {

      $tabla = "municipio";

      $respuesta = MuncipioModel::modelMostrarMunicipio($tabla, $item, $valor);

      return $respuesta;
    }
  }