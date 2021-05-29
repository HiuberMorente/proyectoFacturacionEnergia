<?php

  class MunicipioController
  {


    public static function controllerMostrarMunicipio($item, $valor)
    {

      $tabla = "municipio";

      return MunicipioModel::modelMostrarMunicipio($tabla, $item, $valor);


    }
  }