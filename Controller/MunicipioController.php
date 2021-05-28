<?php

  class MunicipioController
  {


    public static function controllerMostrarMunicipio($item, $valor)
    {

      $tabla = "municipio";

      return MuncipioModel::modelMostrarMunicipio($tabla, $item, $valor);


    }
  }